<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.03.19
 * Time: 6:07
 */

$dictionary['Opportunity']['fields']['engineer_c'] =
    array (
        'required' => false,
        'name' => 'engineer_c',
        'vname' => 'LBL_ENGINEER_C',
        'type' => 'varchar',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
    );

$dictionary['Opportunity']['fields']['deal_manager_c'] =
    array (
        'required' => false,
        'name' => 'deal_manager_c',
        'vname' => 'LBL_DEAL_MANAGER_C',
        'type' => 'varchar',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'default' =>  'Заполнится автоматически',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
    );


$dictionary['Opportunity']['fields']['deal_address_c'] =
    array (
        'required' => false,
        'name' => 'deal_address_c',
        'vname' => 'LBL_DEAL_ADDRESS_C',
        'type' => 'varchar',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'default' =>  'Заполнится автоматически',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
    );

$dictionary['Opportunity']['fields']['created_by_name_c'] =
    array (
        'required' => false,
        'name' => 'created_by_name_c',
        'vname' => 'LBL_CREATED_BY_NAME_C',
        'type' => 'varchar',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'default' =>  'Заполнится автоматически',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
    );

$dictionary['Opportunity']['fields']['good_cost_c'] =
    array (
        'labelValue' => 'Стоимость товара',
        'required' => false,
        'name' => 'good_cost_c',
        'vname' => 'LBL_GOOD_COST_C',
        'type' => 'currency',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 26,
        'size' => '20',
        'enable_range_search' => false,
        'precision' => 6,
    );

$dictionary['Opportunity']['fields']['good_date_c'] =
    array (
       // 'labelValue' => 'Сроки поставки',
        'required' => false,
        'name' => 'good_date_c',
        'vname' => 'LBL_GOOD_DATE_C',
        'type' => 'date',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'size' => '20',
        'enable_range_search' => false,
    );

$dictionary['Opportunity']['fields']['good_date_comming_c'] =
    array (
       // 'labelValue' => 'Сроки поставки',
        'required' => false,
        'name' => 'good_date_comming_c',
        'vname' => 'LBL_GOOD_DATE_COMMING_C',
        'type' => 'date',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'size' => '20',
        'enable_range_search' => false,
    );

$dictionary['Opportunity']['fields']['loaded_act_c'] =
    array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'loaded_act_c',
        'vname' => 'LBL_LOADED_ACT_C',
        'type' => 'relate',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => false,
        'inline_edit' => true,
        'reportable' => true,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => '255',
        'size' => '20',
        'id_name' => 'document_id_c',
        'ext2' => 'Documents',
        'module' => 'Documents',
        'rname' => 'document_name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
    );


$dictionary['Opportunity']['fields']['document_id_c'] =
    array (
        'required' => false,
        'name' => 'document_id_c',
        'vname' => 'LBL_LOADED_ACT_C_DOCUMENT_ID',
        'type' => 'id',
        'massupdate' => 0,
        'no_default' => false,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => 0,
        'audited' => false,
        'inline_edit' => true,
        'reportable' => false,
        'unified_search' => false,
        'merge_filter' => 'disabled',
        'len' => 36,
        'size' => '20',
    );