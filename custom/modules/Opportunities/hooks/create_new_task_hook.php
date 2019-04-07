<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 30.03.19
 * Time: 1:54
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class create_new_task_hook
{
    function main(&$bean, $event, $arguments){

//        'Primary contact' => 'Первичный контакт',
//        'Technical department' => 'Техотдел',
//        'Office' => 'Офис',
//        'Qualification' => 'Оценка',
//        'Matching' => 'Согласование',
//        'Price Quote' => 'Счет',
//        'Order' => 'Заказ',
//        'Waiting' => 'Ожидание товара',
//        'Sale' => 'Реализация',
//        'Closed Won' => 'Закрыто с успехом',
//        'Closed Lost' => 'Закрыто с потерей',
//
        $GLOBALS['log']->debug('Start create_new_task_hook');
        if ($bean->sales_stage == "Closed Won" or $bean->sales_stage == "Закрыто с успехом") return;
        if ($bean->sales_stage == "Primary contact" or $bean->sales_stage == "Первичный контакт") return;
        //**************GET USERS********************
        $techotdel_id = '';
        $denis_id = '';
        $office_id ='';
        $default_manager_id = 'ce946445-2eca-6010-d0ec-5c5ae43f67da';

        $dbGetUsers = DBManagerFactory::getInstance();
        $queryGetUsers = "SELECT * FROM users WHERE deleted = 0";
        $resultGetUsers = $dbGetUsers->query($queryGetUsers);
        while($resultGetUsersRow = $dbGetUsers->fetchByAssoc($resultGetUsers)){
            $name = $resultGetUsersRow['user_name'];
            if ($name == "tehotdel") $techotdel_id = $resultGetUsersRow['id'];
            if ($name == "d.tsoy") $denis_id = $resultGetUsersRow['id'];
            if ($name == "office") $office_id = $resultGetUsersRow['id'];
        }

        if ($techotdel_id == '' or $denis_id == '' or $office_id == '') return;
        //**********************************************************
        $now = date_create()->format('Y-m-d H:i:s');
        $uuid = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );

        //***************Get contact_id****************************
        $dbGetContactId = DBManagerFactory::getInstance();
        $queryGetContactId = "SELECT ac.contact_id as contact_id
                             FROM accounts_contacts ac, accounts_opportunities ao
                             WHERE ac.deleted =0 and ao.deleted = 0
                             and ac.account_id = ao.account_id 
                             and ao.opportunity_id = '{$bean->id}'";
        $resultGetContactId = $dbGetContactId->query($queryGetContactId);
        $resultGetContactIdRow = $dbGetContactId->fetchByAssoc($resultGetContactId);
        $contact_id  = $resultGetContactIdRow['contact_id'];
        //***************Get manager_id and deal_address_c************************
        $dbGetManager = DBManagerFactory::getInstance();
        $queryGetManager = "SELECT a.assigned_user_id as manager_id, o.deal_address_c as deal_address_c
                            FROM opportunities o, accounts a, accounts_opportunities ao
                            
                            WHERE o.id = '{$bean->id}' and o.deleted = 0 
                              and ao.opportunity_id = o.id  and ao.deleted = 0
                              and a.id = ao.account_id and a.deleted = 0  
                            "
        ;
        $resultGetManager = $dbGetManager->query($queryGetManager);
        $resultGetManagerRow = $dbGetManager->fetchByAssoc($resultGetManager);
        $manager_id = $resultGetManagerRow['manager_id'];
        if (empty($manager_id) or !isset($manager_id)) {
            $manager_id=$default_manager_id;
        }
        $GLOBALS['log']->debug("************AAAAAAAAAAAA*********");
        $GLOBALS['log']->debug($manager_id);
        $deal_address_c = $resultGetManagerRow['deal_address_c'];
        //*****************Get $date_due*****************************
        $date_due = ($bean->sales_stage == "Price Quote" or $bean->sales_stage == "Счет")
            ? date('Y-m-d H:i:s', strtotime("+3 day"))
            : date('Y-m-d H:i:s', strtotime("+1 day")); //$tomorrow;
        //***************Create list of users***********************
        $assigned_user_list = array(
            'techotdel' => $techotdel_id, //'c6c52b5c-cbed-5bbb-8d58-5c5bfb65720f',
            'office' => $office_id,//'72ddba62-cc55-edb2-3260-5c9fcf714535',
            'denis' => $denis_id, //'570cfb3e-fe1f-ed10-68f4-5c5bfaa04842',
            'manager' => $manager_id,
        );
        $name = '';
        $assigned_user_id = '';
        //*********Fill up field $assigned_user_id and $name*************************************************
        if ($bean->sales_stage == "Technical department" or $bean->sales_stage == "Техотдел") {
            $assigned_user_id = $assigned_user_list['techotdel'];
            $name = 'Выбрать инженера';
        } else if ($bean->sales_stage == "Office" or $bean->sales_stage == "Офис") {
            $assigned_user_id = $assigned_user_list['office'];
            $name = 'Загрузить акт';
        }else if ($bean->sales_stage == "Qualification" or $bean->sales_stage == "Оценка") {
            $assigned_user_id = $assigned_user_list['denis'];
            $name = 'Оценить';
        }
        else if ($bean->sales_stage == "Matching" or $bean->sales_stage == "Согласование") {
            $assigned_user_id = $assigned_user_list['manager'];
            $name = 'Согласовать';
        }
        else if ($bean->sales_stage == "Price Quote" or $bean->sales_stage == "Счет") {
            $assigned_user_id = $assigned_user_list['manager'];
            $name = 'Контроль оплаты';
        }else if ($bean->sales_stage == "Order" or $bean->sales_stage == "Заказ") {
            $assigned_user_id = $assigned_user_list['denis'];
            $name = 'Заказать';
        }else if ($bean->sales_stage == "Waiting" or $bean->sales_stage == "Ожидание товара") {
            $assigned_user_id = $assigned_user_list['denis'];
            $name = 'Поступление';
        }
        else if ($bean->sales_stage == "Sale" or $bean->sales_stage == "Реализация") {
            $assigned_user_id = $assigned_user_list['techotdel'];
            $name = 'Реализовать';
        }else if ($bean->sales_stage == "Closed Lost" or $bean->sales_stage == "Закрыто с потерей") {
            $assigned_user_id = $assigned_user_list['office'];
            $name = 'Счет на диагностику';
        }
        //*****************************************************************************************************
        $description = ($bean->sales_stage == "Technical department" or $bean->sales_stage == "Техотдел")
            ? 'Работа: '.$bean->name.'\nАдрес: '.$deal_address_c.'\nОписание: '.$bean->description
            : $bean->description;
//        $dbInsertNewTask = DBManagerFactory::getInstance();
//        $queryInsertNewTask = "INSERT INTO tasks (
//                                    id, name, created_by, assigned_user_id, status, deleted, description,
//                                    parent_type, parent_id, priority, contact_id,
//                                    date_start, date_entered, date_due_flag, date_due
//                                ) VALUES (
//                                    '{$uuid}', '{$name}', '{$bean->created_by}', '{$assigned_user_id}','Not Started', 0,'{$description}',
//                                    'Opportunities', '{$bean->id}', 'Medium', '{$contact_id}',
//                                    '{$now}' ,'{$now}',0,'{$date_due}'
//                                )";
//        $dbInsertNewTask->query($queryInsertNewTask);

        $dbInsertNewTask = DBManagerFactory::getInstance();
        $task = new Task();
        $task->id = $uuid;
        $task->name = $name;
        $task->created_by = $bean->created_by;
        $task->assigned_user_id = $assigned_user_id;
        $task->status = 'Not Started';
        $task->deleted = 0;
        $task->description = $description;
        $task->parent_type = 'Opportunities';
        $task->parent_id = $bean->id;
        $task->priority = 'Medium';
        $task->contact_id = $contact_id;
        $task->date_start = $now;
        $task->date_entered = $now;
        $task->date_due_flag = 0;
        $task->date_due = $date_due;
        $task->save();
        $dbInsertNewTask->insert($task);

        $GLOBALS['log']->debug('Start create_email');
        require_once('modules/Emails/Email.php');
        #global $mod_strings;
        #global $app_list_strings;
        #global $app_strings;
        global $current_user;

        $json = getJSONobj();
        $pass = '';
        if (!empty($_REQUEST['mail_smtppass'])) {
            $pass = $_REQUEST['mail_smtppass'];
        } elseif (isset($_REQUEST['mail_type'])) {
            $oe = new OutboundEmail();
            if (is_admin($current_user) && $_REQUEST['mail_type'] == 'system') {
                $oe = $oe->getSystemMailerSettings();
            } else {
                $oe = $oe->getMailerByName($current_user, $_REQUEST['mail_type']);
            }
            if (!empty($oe)) {
                $pass = $oe->mail_smtppass;
            }
        }
        $email = new Email();
        $out = $email->sendEmailTest(
            $_REQUEST['mail_smtpserver'],
            $_REQUEST['mail_smtpport'],
            $_REQUEST['mail_smtpssl'],
            ($_REQUEST['mail_smtpauth_req'] == 'true' ? 1 : 0),
            $_REQUEST['mail_smtpuser'],
            $pass,
            $_REQUEST['outboundtest_from_address'],
            $_REQUEST['outboundtest_to_address'],
            $_REQUEST['mail_sendtype'],
            $_REQUEST['mail_from_name']
        );

        $out = $json->encode($out);
        #echo $out;
        $GLOBALS['log']->debug($out);



        $GLOBALS['log']->debug('Finish create_new_task_hook');
    }
}

?>