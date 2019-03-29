<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 25.03.19
 * Time: 13:02
 */

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


    class bsHook
    {
        function main(&$bean, $event, $arguments)
        //function main($bean, $event, $arguments)
        {
            //$bean->name = "TEST"; //strtoupper($bean->name)
            //$bean->name = strtoupper($bean->name);
            //$id =  "f1b71b12-004b-02d6-3667-5c93d1aaabb1"; //$bean->id;
            //$my_id = $bean->id;
            $db = DBManagerFactory::getInstance();
//$query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='f1b71b12-004b-02d6-3667-5c93d1aaabb1'";
            $query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$bean->id}'";
           // $query = "SELECT * FROM tasks";
            $db->query($query);


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
            $now = date_create()->format('Y-m-d H:i:s');
            $tomorrow = date("Y-m-d", time() + 86400)->format('Y-m-d H:i:s');
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
            $task = new Task();
            $task->id = $uuid;
            $task->created_by = '1';
            $task->name = 'Side test';
            $task->status = 'Not Started';
            $task->deleted = 0;
            $task->date_entered = $now;
            $task->date_due_flag = 0;
            $task->date_due = $tomorrow;
            $task->description = "Side test"; //{$bean->description}'
            $task->parent_type = 'Opportunities';
            $task->parent_id = $bean->id;
            $task->save();
//            if ($bean->sales_stage == "Technical department" or $bean->sales_stage == "Техотдел") {
//                $uuid=_new_uuid();
//                //$uuid = UUID::v4();
//                $queryInsert = "INSERT INTO tasks (id, name, created_by, status, deleted, description, parent_type, parent_id)
//                            VALUES ('{$uuid}', 'SIDE test', 1, 'Not Started', 0, '{$bean->description}','Opportunities', '{$bean->id}')";
//                $this->db->query($queryInsert);
//            }

        }
    }
//$id =  "f1b71b12-004b-02d6-3667-5c93d1aaabb1"; //$bean->id;
//$query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$bean->id}'";
//$this->db->query($query);
?>