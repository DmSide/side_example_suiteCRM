<?php
$viewdefs ['Opportunities'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'sales_stage',
        ),
        1 => 
        array (
          0 => 'account_name',
          1 => 
          array (
            'name' => 'engineer_c',
            'label' => 'LBL_ENGINEER_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'loaded_act_c',
            'studio' => 'visible',
            'label' => 'LBL_LOADED_ACT_C',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
        ),
        3 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'pay_c',
            'label' => 'LBL_PAY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'history_description_c',
            'label' => 'LBL_HISTORY_DESCRIPTION_C',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'deal_manager_c',
            'label' => 'LBL_DEAL_MANAGER_C',
          ),
          1 => 
          array (
            'name' => 'created_by_name_c',
            'label' => 'LBL_CREATED_BY_NAME_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'good_cost_c',
            'label' => 'LBL_GOOD_COST_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'deal_address_c',
            'label' => 'LBL_DEAL_ADDRESS_C',
          ),
          1 => 
          array (
            'name' => 'good_date_c',
            'label' => 'LBL_GOOD_DATE_C',
          ),
        ),
        4 => 
        array (
          0 => 'date_closed',
          1 => 
          array (
            'name' => 'good_date_comming_c',
            'label' => 'LBL_GOOD_DATE_COMMING_C',
          ),
        ),
      ),
    ),
  ),
);
;
?>
