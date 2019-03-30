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
//        'Office' => 'Офис',descr
//        'Qualification' => 'Оценка',
//        'Matching' => 'Согласование',
//        'Price Quote' => 'Счет',
//        'Order' => 'Заказ',
//        'Sale' => 'Реализация',
//        'Closed Won' => 'Закрыто с успехом',
//        'Closed Lost' => 'Закрыто с потерей',
//
        $GLOBALS['log']->debug('Start create_new_task_hook');
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
        $name = 'SIDE test';
        $description = '';
        $created_by = $bean->created_by;
        $assigned_user_list = array(
            'techotdel' => 'c6c52b5c-cbed-5bbb-8d58-5c5bfb65720f',
            'office' => '',
            'denis' => '570cfb3e-fe1f-ed10-68f4-5c5bfaa04842',
            'manager' => $created_by,

        );
        $GLOBALS['log']->debug($assigned_user_list['techotdel']);
        $GLOBALS['log']->debug($bean->sales_stage);
        $date_due_flag = ($bean->sales_stage == "Price Quote" or $bean->sales_stage == "Счет")
            ? date('Y-m-d H:i:s', time() + 86400*3)
            : date('Y-m-d H:i:s', time() + 86400); //$tomorrow;
        $assigned_user_id = $assigned_user_list['techotdel'];
        if ($bean->sales_stage == "Technical department" or $bean->sales_stage == "Техотдел") {
            $dbInsertNewTask = DBManagerFactory::getInstance();
            $queryInsertNewTask = "INSERT INTO tasks (id, name, created_by, assigned_user_id, status, deleted,  date_start, date_entered, date_due_flag, date_due, description, parent_type, parent_id)
                                VALUES ('{$uuid}', '{$name}', '{$created_by}', '{$assigned_user_id}','Not Started', 0,'{$now}' ,'{$now}',0,'{$date_due_flag}','{$bean->description}','Opportunities', '{$bean->id}')";
            $dbInsertNewTask->query($queryInsertNewTask);
        }
        $GLOBALS['log']->debug('Finish create_new_task_hook');
    }

}

?>