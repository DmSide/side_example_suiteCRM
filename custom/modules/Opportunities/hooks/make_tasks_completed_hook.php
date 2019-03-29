<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 25.03.19
 * Time: 13:02
 */

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


    class make_tasks_completed_hook
    {
        function main(&$bean, $event, $arguments)
        {
            //$bean->name = "TEST"; //strtoupper($bean->name)
            //$bean->name = strtoupper($bean->name);
            //$id =  "f1b71b12-004b-02d6-3667-5c93d1aaabb1"; //$bean->id;
            //$my_id = $bean->id;
            $dbUpdateTasks = DBManagerFactory::getInstance();
            //$query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='f1b71b12-004b-02d6-3667-5c93d1aaabb1'";
            $queryUpdateTasks = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$bean->id}' and deleted = 0";
            // $query = "SELECT * FROM tasks";
            $dbUpdateTasks->query($queryUpdateTasks);
        }
    }
//$id =  "f1b71b12-004b-02d6-3667-5c93d1aaabb1"; //$bean->id;
//$query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$bean->id}'";
//$this->db->query($query);
?>