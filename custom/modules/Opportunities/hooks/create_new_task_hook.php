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
        $tomorrow = date('Y-m-d H:i:s', time() + 86400);
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

        if ($bean->sales_stage == "Technical department" or $bean->sales_stage == "Техотдел") {
            $dbInsertNewTask = DBManagerFactory::getInstance();
            $queryInsertNewTask = "INSERT INTO tasks (id, name, created_by, status, deleted, date_entered, date_due_flag, date_due, description, parent_type, parent_id)
                                VALUES ('{$uuid}', 'SIDE test', '1', 'Not Started', 0, '{$now}',0,'{$tomorrow}','{$bean->description}','Opportunities', '{$bean->id}')";
            $dbInsertNewTask->query($queryInsertNewTask);
        }
        $GLOBALS['log']->debug('Finish create_new_task_hook');
    }

}

?>