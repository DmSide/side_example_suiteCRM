<?php
/**
 * Created by Sidenko Dmitriy.
 * User: dima
 * Date: 23.03.19
 * Time: 17:23
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class updateTasksLHClass //extends SugarBean
{
//    public $jjwg_Maps;
//    public function __construct()
//    {
//        $this->jjwg_Maps = get_module_info('jjwg_Maps');
//    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
//    public function updateTasks_logicHook(&$bean, $event, $arguments)
//    {
//        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
//        if (isset($GLOBALS['log'])) {
//            $GLOBALS['log']->deprecated($deprecatedMessage);
//        } else {
//            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
//        }
//        self::__construct();
//    }

    function main(&$bean, $event, $arguments)
    {
        // after_save

//        require_once('modules/Tasks/Task.php');
//        $tasks = $bean->get_linked_beans('task', 'Task');
//        foreach ($tasks as $task) {
//            $task->status = "Completed";
//            }
////        }
//        $firstname = 'fred';
//        $lastname  = 'fox';
//
//        $query = sprintf("SELECT firstname, lastname, address, age FROM friends
//            WHERE firstname='%s' AND lastname='%s'",
//            mysql_real_escape_string($firstname),
//            mysql_real_escape_string($lastname));


            #
        $id =  "f1b71b12-004b-02d6-3667-5c93d1aaabb1"; //$bean->id;
        //$query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$id}'";
        $query = "UPDATE tasks SET status = 'Completed' WHERE parent_id ='{$bean->id}'";
        //$query = "UPDATE prospects set  contact_id=$contactid, account_id=$accounti
        $this->db->query($query);


        // Выполняем запрос
        #$result = mysql_query($query);
    }
}
?>