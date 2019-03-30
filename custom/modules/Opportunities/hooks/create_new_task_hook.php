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
//        'Sale' => 'Реализация',
//        'Closed Won' => 'Закрыто с успехом',
//        'Closed Lost' => 'Закрыто с потерей',
//
        $GLOBALS['log']->debug('Start create_new_task_hook');
        if ($bean->sales_stage == "Closed Won" or $bean->sales_stage == "Закрыто с успехом") return;
        if ($bean->sales_stage == "Primary contact" or $bean->sales_stage == "Первичный контакт") return;

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

        //            $task = new Task();
        //            $task->id = $uuid;
        //            $task->created_by = '1';
        //            $task->name = 'Side test';
        //            $task->status = 'Not Started';
        //            $task->deleted = 0;
        //            $task->date_entered = $now;
        //            $task->date_due_flag = 0;
        //            $task->date_due = $tomorrow;
        //            $task->description = "Side test"; //{$bean->description}'
        //            $task->parent_type = 'Opportunities';
        //            $task->parent_id = $bean->id;
        //            $task->save();
        //            $GLOBALS['log']->debug($now);
        //            $GLOBALS['log']->debug($tomorrow);
        //            $GLOBALS['log']->debug($uuid);
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
        //***************Get $deal_manager_c************************
        $dbGetManager = DBManagerFactory::getInstance();
        $queryGetManager = "SELECT deal_manager_c FROM opportunities_cstm WHERE id_c = '{$bean->id}'";
        $resultGetManager = $dbGetManager->query($queryGetManager);
        $resultGetManagerRow = $dbGetManager->fetchByAssoc($resultGetManager);
        $deal_manager_c = $resultGetManagerRow['deal_manager_c'];
        //*****************Get $date_due*****************************
        $date_due = ($bean->sales_stage == "Price Quote" or $bean->sales_stage == "Счет")
            ? date('Y-m-d H:i:s', time() + 86400*3)
            : date('Y-m-d H:i:s', time() + 86400); //$tomorrow;
        //***************Create list of users***********************
        $assigned_user_list = array(
            'techotdel' => 'c6c52b5c-cbed-5bbb-8d58-5c5bfb65720f',
            'office' => '72ddba62-cc55-edb2-3260-5c9fcf714535',
            'denis' => '570cfb3e-fe1f-ed10-68f4-5c5bfaa04842',
            'manager' => $deal_manager_c,
        );
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

        $GLOBALS['log']->debug('*************PARAGUE***************');
        $GLOBALS['log']->debug($assigned_user_list['techotdel']);
        $GLOBALS['log']->debug($bean->sales_stage);

        $dbInsertNewTask = DBManagerFactory::getInstance();
        $queryInsertNewTask = "INSERT INTO tasks (
                                    id, name, created_by, assigned_user_id, status, deleted, description, 
                                    parent_type, parent_id, priority, contact_id,
                                    date_start, date_entered, date_due_flag, date_due
                                ) VALUES (
                                    '{$uuid}', '{$name}', '{$bean->created_by}', '{$assigned_user_id}','Not Started', 0,'{$bean->description}',
                                    'Opportunities', '{$bean->id}', 'Medium', '{$contact_id}',
                                    '{$now}' ,'{$now}',0,'{$date_due}'
                                )";
        $dbInsertNewTask->query($queryInsertNewTask);
        $GLOBALS['log']->debug('Finish create_new_task_hook');
    }

}

?>