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
        $GLOBALS['log']->debug($result_street);
        $GLOBALS['log']->debug('Debugging message 5');

        $dbUpdateOpportunities = DBManagerFactory::getInstance();
        $queryUpdateOpportunities = "UPDATE opportunities_cstm SET deal_address_c = '{$result_street}' WHERE id_c ='{$bean->id}'";
        $GLOBALS['log']->debug('Debugging message 6');
        $dbUpdateOpportunities->query($queryUpdateOpportunities);
        $GLOBALS['log']->debug('Stop update_account_fileds_hook');
    }
}

?>