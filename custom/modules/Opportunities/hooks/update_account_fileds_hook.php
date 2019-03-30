<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 30.03.19
 * Time: 1:54
 */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


class update_account_fileds_hook
{
    function main(&$bean, $event, $arguments){
        $GLOBALS['log']->debug('Start update_account_fileds_hook');
        $GLOBALS['log']->debug($event);
        $GLOBALS['log']->debug($arguments);

        #FILL UP deal_address_c
        $dbSelectAccountFileds = DBManagerFactory::getInstance();
        //deal_creator_c = '',  engineer_c = ''
        $queryAccountFileds = "SELECT a.billing_address_street as street, a.id as id 
                                   FROM accounts a, accounts_opportunities ao
                                   WHERE a.deleted = 0 and ao.account_id = a.id and ao.opportunity_id ='{$bean->id}' LIMIT 1";
        $GLOBALS['log']->debug('Debugging message 1');
        $resultAccount = $dbSelectAccountFileds->query($queryAccountFileds) or die(mysql_error());
        $GLOBALS['log']->debug('Debugging message 2');
        #$resultAccountRow =mysqli_fetch_row($resultAccount);
        #$resultAccountRow =mysqli_fetch_row($resultAccount);
        #$resultAccountRow = mysql_fetch_array($resultAccount);
        $resultAccountRow = $dbSelectAccountFileds->fetchByAssoc($resultAccount);
        $GLOBALS['log']->debug('Debugging message 2/2');
        $GLOBALS['log']->debug($resultAccountRow);
        $result_account_id = $resultAccountRow['id'];
        $GLOBALS['log']->debug('Debugging message 3');
        $result_street = $resultAccountRow['street'];
        $GLOBALS['log']->debug('Debugging message 4');
        $GLOBALS['log']->debug($result_account_id);
        $GLOBALS['log']->debug($result_street);
        $GLOBALS['log']->debug($bean->id);
        if (is_null($result_street) or $result_street == '') {
            $result_street = 'Нет данных';
        }

        #FILL UP deal_manager_c
        if (!is_null($result_account_id) and $result_account_id !== '')
        {
            $dbSelectManager = DBManagerFactory::getInstance();
            $querySelectManager = "SELECT u.user_name as user_name
                  FROM accounts a, users u
                  WHERE a.deleted = 0 and u.deleted = 0 and a.assigned_user_id is not null and a.assigned_user_id != \"\" 
                        and u.id = a.assigned_user_id  and a.id = '{$result_account_id}'";
            $GLOBALS['log']->debug('Debugging message 6/1');
            $resultManager = $dbSelectManager->query($querySelectManager);
            $GLOBALS['log']->debug('Debugging message 6/2');
            $resultManagerRow = $dbSelectManager->fetchByAssoc($resultManager);
            $GLOBALS['log']->debug('Debugging message 6/3');
            $result_manager_name = $resultManagerRow['user_name'];
            $GLOBALS['log']->debug('Debugging message 6/4');
            if (is_null($result_manager_name) or $result_manager_name == '') {
                $result_manager_name = 'Нет данных';
            }
        }
        #FILL UP created_by_name_c
        $dbSelectCreatedUser = DBManagerFactory::getInstance();
        $querySelectCreatedUser = "SELECT u.user_name as user_name
                                    FROM users u
                                    WHERE u.deleted = 0 
                                      and u.id = '{$bean->created_by}'";
        $resultSelectCreatedUser = $dbSelectCreatedUser->query($querySelectCreatedUser);
        $resultSelectCreatedUserRow = $dbSelectCreatedUser->fetchByAssoc($resultSelectCreatedUser);
        $result_created_by_name = $resultSelectCreatedUserRow['user_name'];
        if (is_null($result_created_by_name) or $result_created_by_name == '') {
            $result_created_by_name = 'Нет данных';
        }

        $dbUpdateOpportunities = DBManagerFactory::getInstance();
        $queryUpdateOpportunities = "UPDATE opportunities_cstm 
                                    SET created_by_name_c = '{$result_created_by_name}', 
                                        deal_manager_c = '{$result_manager_name}',
                                        deal_address_c = '{$result_street}'
                                    WHERE id_c ='{$bean->id}'";
        $dbUpdateOpportunities->query($queryUpdateOpportunities);

        $GLOBALS['log']->debug('Stop update_account_fileds_hook');
    }
}

?>