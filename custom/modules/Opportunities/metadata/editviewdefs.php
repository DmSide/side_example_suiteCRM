<?php
$viewdefs ['Opportunities'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
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
          0 => 
          array (
            'name' => 'name',
          ),
          1 => 'account_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'deal_address_c',
            'label' => 'LBL_DEAL_ADDRESS_C',
          ),
          1 => 
          array (
            'name' => 'deal_manager_c',
            'label' => 'LBL_DEAL_MANAGER_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_closed',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'deal_creator_c',
            'label' => 'LBL_DEAL_CREATOR_C',
          ),
        ),
        5 => 
        array (
          0 => 'sales_stage',
          1 => 'lead_source',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'engineer_c',
            'studio' => 'visible',
            'label' => 'LBL_ENGINEER',
          ),
        ),
        7 => 
        array (
          0 => 'next_step',
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 'probability',
          1 => 'campaign_name',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
