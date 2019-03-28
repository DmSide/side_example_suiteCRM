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

//        $task = new Task();
//        $task->id = UUID();
//        $task->created_by = 1;
//        $task->name = 'Side test';
//        $task->status = 'Not Started';
//        $task->deleted = 0;
//        $task->description = "Side test"; //{$bean->description}'
//        $task->parent_type = 'Opportunities';
//        $task->parent_id = $bean->id;
//        $task->save();
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