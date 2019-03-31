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
        #FILL UP deal_address_c
        $dbSelectAccountFileds = DBManagerFactory::getInstance();
        //deal_creator_c = '',  engineer_c = ''
        $queryAccountFileds = "SELECT a.billing_address_street as street, a.id as id 
                                   FROM accounts a, accounts_opportunities ao
                                   WHERE a.deleted = 0 and ao.account_id = a.id and ao.opportunity_id ='{$bean->id}' LIMIT 1";
        $resultAccount = $dbSelectAccountFileds->query($queryAccountFileds);
        $resultAccountRow = $dbSelectAccountFileds->fetchByAssoc($resultAccount);
        $result_account_id = $resultAccountRow['id'];
        $result_street = $resultAccountRow['street'];

        if (is_null($result_street) or $result_street == '') {
            $result_street = 'Нет данных';
        }

        #FILL UP deal_manager_c
        if (!is_null($result_account_id) and $result_account_id !== '')
        {
            $dbSelectManager = DBManagerFactory::getInstance();
            $querySelectManager = "SELECT u.user_name as user_name
                  FROM accounts a, users u
                  WHERE a.deleted = 0 and u.deleted = 0 
                        and u.id = a.assigned_user_id  and a.id = '{$result_account_id}'";
            $resultManager = $dbSelectManager->query($querySelectManager);
            $resultManagerRow = $dbSelectManager->fetchByAssoc($resultManager);
            $result_manager_name = $resultManagerRow['user_name'];
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
        $queryUpdateOpportunities = "UPDATE opportunities
                                    SET created_by_name_c = '{$result_created_by_name}', 
                                        deal_manager_c = '{$result_manager_name}',
                                        deal_address_c = '{$result_street}'
                                    WHERE id ='{$bean->id}'";
        $dbUpdateOpportunities->query($queryUpdateOpportunities);

        $GLOBALS['log']->debug('Stop update_account_fileds_hook');
    }
}

?>