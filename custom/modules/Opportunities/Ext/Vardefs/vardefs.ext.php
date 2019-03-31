<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-03-26 14:14:31
$dictionary['Opportunity']['fields']['date_entered']['display_default']='now&12:00am';
$dictionary['Opportunity']['fields']['date_entered']['comments']='Date record created';
$dictionary['Opportunity']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2019-03-26 16:30:00
$dictionary['Opportunity']['fields']['user_id_c']['inline_edit']=1;

 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2019-03-26 16:30:00
$dictionary['Opportunity']['fields']['engineer_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['engineer_c']['labelValue']='engineer';
$dictionary['Opportunity']['fields']['engineer_c']['name'] = 'engineer_c';
$dictionary['Opportunity']['fields']['engineer_c']['vname'] = 'LBL_ENGINEER_C';
$dictionary['Opportunity']['fields']['engineer_c']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['engineer_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['engineer_c']['dependency'] = '';
$dictionary['Opportunity']['fields']['engineer_c']['required'] = false;
$dictionary['Opportunity']['fields']['engineer_c']['massupdate'] = '0';
$dictionary['Opportunity']['fields']['engineer_c']['default'] = '';
$dictionary['Opportunity']['fields']['engineer_c']['no_default'] = false;
$dictionary['Opportunity']['fields']['engineer_c']['comments'] = 'Engineer';
$dictionary['Opportunity']['fields']['engineer_c']['help'] = '';
$dictionary['Opportunity']['fields']['engineer_c']['importable'] = 'true';
$dictionary['Opportunity']['fields']['engineer_c']['duplicate_merge'] = 'disabled';
$dictionary['Opportunity']['fields']['engineer_c']['duplicate_merge_dom_value'] = '0';
$dictionary['Opportunity']['fields']['engineer_c']['audited'] = false;
$dictionary['Opportunity']['fields']['engineer_c']['reportable'] = true;
$dictionary['Opportunity']['fields']['engineer_c']['unified_search'] = false;
$dictionary['Opportunity']['fields']['engineer_c']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['engineer_c']['calculated'] = false;
$dictionary['Opportunity']['fields']['engineer_c']['len'] = '255';
$dictionary['Opportunity']['fields']['engineer_c']['size'] = '20';
$dictionary['Opportunity']['fields']['engineer_c']['id'] = 'engineer_c';
$dictionary['Opportunity']['fields']['engineer_c']['custom_module'] = ''; #'Opportunities';
//required to create the field in the _cstm table
$dictionary['Opportunity']['fields']['engineer_c']['source'] = 'custom_fields';
 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

// created: 2019-03-29 01:45:25
$dictionary["Opportunity"]["fields"]["opportunities_documents_1"] = array (
  'name' => 'opportunities_documents_1',
  'type' => 'link',
  'relationship' => 'opportunities_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_OPPORTUNITIES_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);


 // created: 2019-03-31 02:19:00
$dictionary['Opportunity']['fields']['good_cost_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['good_cost_c']['labelValue']='Стоимость товара';

 

 // created: 2019-03-27 13:59:12
#$dictionary['Opportunity']['fields']['deal_address_c']['inline_edit']='1';
#$dictionary['Opportunity']['fields']['deal_address_c']['labelValue']='Адрес выезда';
$dictionary['Opportunity']['fields']['deal_address_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['deal_address_c']['labelValue']='выезда менеджер';
$dictionary['Opportunity']['fields']['deal_address_c']['name'] = 'deal_address_c';
$dictionary['Opportunity']['fields']['deal_address_c']['vname'] = 'LBL_DEAL_ADDRESS_C';
$dictionary['Opportunity']['fields']['deal_address_c']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['deal_address_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['deal_address_c']['dependency'] = '';
$dictionary['Opportunity']['fields']['deal_address_c']['required'] = false;
$dictionary['Opportunity']['fields']['deal_address_c']['massupdate'] = '0';
$dictionary['Opportunity']['fields']['deal_address_c']['default'] = 'Заполнится автоматически';
$dictionary['Opportunity']['fields']['deal_address_c']['no_default'] = false;
$dictionary['Opportunity']['fields']['deal_address_c']['comments'] = 'deal_address';
$dictionary['Opportunity']['fields']['deal_address_c']['help'] = '';
$dictionary['Opportunity']['fields']['deal_address_c']['importable'] = 'true';
$dictionary['Opportunity']['fields']['deal_address_c']['duplicate_merge'] = 'disabled';
$dictionary['Opportunity']['fields']['deal_address_c']['duplicate_merge_dom_value'] = '0';
$dictionary['Opportunity']['fields']['deal_address_c']['audited'] = false;
$dictionary['Opportunity']['fields']['deal_address_c']['reportable'] = true;
$dictionary['Opportunity']['fields']['deal_address_c']['unified_search'] = false;
$dictionary['Opportunity']['fields']['deal_address_c']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['deal_address_c']['calculated'] = false;
$dictionary['Opportunity']['fields']['deal_address_c']['len'] = '255';
$dictionary['Opportunity']['fields']['deal_address_c']['size'] = '20';
$dictionary['Opportunity']['fields']['deal_address_c']['id'] = 'deal_address_c';
$dictionary['Opportunity']['fields']['deal_address_c']['custom_module'] = '';
//required to create the field in the _cstm table
$dictionary['Opportunity']['fields']['deal_address_c']['source'] = 'custom_fields';


 // created: 2019-03-31 02:30:01
$dictionary['Opportunity']['fields']['good_date_comming_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['good_date_comming_c']['labelValue']='Дата поступления';
 

 // created: 2019-03-30 04:11:03
$dictionary['Opportunity']['fields']['date_closed']['display_default']='+1 day';
$dictionary['Opportunity']['fields']['date_closed']['inline_edit']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';

 

// created: 2019-03-26 16:30:00
$dictionary['Opportunity']['fields']['created_by_name_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['created_by_name_c']['labelValue']='Кем создано';
$dictionary['Opportunity']['fields']['created_by_name_c']['name'] = 'created_by_name_c';
$dictionary['Opportunity']['fields']['created_by_name_c']['vname'] = 'LBL_CREATED_BY_NAME_C';
$dictionary['Opportunity']['fields']['created_by_name_c']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['created_by_name_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['created_by_name_c']['dependency'] = '';
$dictionary['Opportunity']['fields']['created_by_name_c']['required'] = false;
$dictionary['Opportunity']['fields']['created_by_name_c']['massupdate'] = '0';
$dictionary['Opportunity']['fields']['created_by_name_c']['default'] = 'Заполнится автоматически';
$dictionary['Opportunity']['fields']['created_by_name_c']['no_default'] = false;
$dictionary['Opportunity']['fields']['created_by_name_c']['comments'] = 'Кем создано';
$dictionary['Opportunity']['fields']['created_by_name_c']['help'] = '';
$dictionary['Opportunity']['fields']['created_by_name_c']['importable'] = 'true';
$dictionary['Opportunity']['fields']['created_by_name_c']['duplicate_merge'] = 'disabled';
$dictionary['Opportunity']['fields']['created_by_name_c']['duplicate_merge_dom_value'] = '0';
$dictionary['Opportunity']['fields']['created_by_name_c']['audited'] = false;
$dictionary['Opportunity']['fields']['created_by_name_c']['reportable'] = true;
$dictionary['Opportunity']['fields']['created_by_name_c']['unified_search'] = false;
$dictionary['Opportunity']['fields']['created_by_name_c']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['created_by_name_c']['calculated'] = false;
$dictionary['Opportunity']['fields']['created_by_name_c']['len'] = '255';
$dictionary['Opportunity']['fields']['created_by_name_c']['size'] = '20';
$dictionary['Opportunity']['fields']['created_by_name_c']['id'] = 'created_by_name_c';
$dictionary['Opportunity']['fields']['created_by_name_c']['custom_module'] = ''; #'Opportunities';
//required to create the field in the _cstm table
$dictionary['Opportunity']['fields']['created_by_name_c']['source'] = 'custom_fields';


 // created: 2019-03-30 03:35:50
$dictionary['Opportunity']['fields']['amount_usdollar']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['default'] = 0;
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-03-31 02:34:30
$dictionary['Opportunity']['fields']['document_id_c']['inline_edit']=1;

 

/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.03.19
 * Time: 6:07
 */
//$dictionary['Opportunity']['fields']['engineer_c']['inline_edit']='1';
//$dictionary['Opportunity']['fields']['engineer_c']['labelValue']='engineer';
//$dictionary['Opportunity']['fields']['engineer_c']['name'] = 'engineer_c';
//$dictionary['Opportunity']['fields']['engineer_c']['vname'] = 'LBL_ENGINEER_C';
//$dictionary['Opportunity']['fields']['engineer_c']['type'] = 'varchar';
//$dictionary['Opportunity']['fields']['engineer_c']['enforced'] = '';
//$dictionary['Opportunity']['fields']['engineer_c']['dependency'] = '';
//$dictionary['Opportunity']['fields']['engineer_c']['required'] = false;
//$dictionary['Opportunity']['fields']['engineer_c']['massupdate'] = '0';
//$dictionary['Opportunity']['fields']['engineer_c']['default'] = '';
//$dictionary['Opportunity']['fields']['engineer_c']['no_default'] = false;
//$dictionary['Opportunity']['fields']['engineer_c']['comments'] = 'Engineer';
//$dictionary['Opportunity']['fields']['engineer_c']['help'] = '';
//$dictionary['Opportunity']['fields']['engineer_c']['importable'] = 'true';
//$dictionary['Opportunity']['fields']['engineer_c']['duplicate_merge'] = 'disabled';
//$dictionary['Opportunity']['fields']['engineer_c']['duplicate_merge_dom_value'] = '0';
//$dictionary['Opportunity']['fields']['engineer_c']['audited'] = false;
//$dictionary['Opportunity']['fields']['engineer_c']['reportable'] = true;
//$dictionary['Opportunity']['fields']['engineer_c']['unified_search'] = false;
//$dictionary['Opportunity']['fields']['engineer_c']['merge_filter'] = 'disabled';
//$dictionary['Opportunity']['fields']['engineer_c']['calculated'] = false;
//$dictionary['Opportunity']['fields']['engineer_c']['len'] = '255';
//$dictionary['Opportunity']['fields']['engineer_c']['size'] = '20';
//$dictionary['Opportunity']['fields']['engineer_c']['id'] = 'engineer_c';
//$dictionary['Opportunity']['fields']['engineer_c']['custom_module'] = ''; #'Opportunities';
////required to create the field in the _cstm table
//$dictionary['Opportunity']['fields']['engineer_c']['source'] = 'custom_fields';


$dictionary['Opportunity']['fields']['engineer_c'] =
    array (
        //'labelValue' => 'Инженер',
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

//(
//[type] => varchar
//[supports_unified_search] => 1
//    [view] => edit
//[name] => abcdefg
//[vname] => LBL_ABCDEFG
//[label] => LBL_ABCDEFG
//[id] =>
//    [size] => 20
//    [len] => 255
//    [required] =>
//    [default] =>
//    [default_value] =>
//    [comment] =>
//    [bean] =>
//    [ext1] =>
//    [ext2] =>
//    [ext3] =>
//    [ext4] =>
//    [audited] => 0
//    [inline_edit] => 1
//    [massupdate] => 0
//    [importable] => true
//[duplicate_merge] => 0
//    [new_field_definition] =>
//    [reportable] => 1
//    [label_value] => ABCDEFG
//[help] =>
//    [formula] =>
//    [unified_search] => 0
//    [vardef_map] => Array
//(
//    [name] => name
//    [label] => vname
//[default_value] => default
//            [default] => default_value
//[display_default] => default_value
//[len] => len
//[required] => required
//[type] => type
//[audited] => audited
//[inline_edit] => inline_edit
//[massupdate] => massupdate
//[options] => ext1
//[help] => help
//[comments] => comment
//[importable] => importable
//[duplicate_merge] => duplicate_merge
//[duplicate_merge_dom_value] => duplicate_merge_dom_value
//[merge_filter] => merge_filter
//[reportable] => reportable
//[ext2] => ext2
//[ext4] => ext4
//[ext3] => ext3
//[labelValue] => label_value
//[unified_search] => unified_search
//[full_text_search] => full_text_search
//        )
//
//    [decode_from_request_fields_map] => Array
//(
//    [0] => formula
//    [1] => dependency
//        )
//
//    [comments] =>
//    [labelValue] => ABCDEFG
//)

 // created: 2019-03-27 13:56:39
#$dictionary['Opportunity']['fields']['deal_manager_c']['inline_edit']='1';
//$dictionary['Opportunity']['fields']['deal_manager_c']['labelValue']='Ответственный менеджер';
$dictionary['Opportunity']['fields']['deal_manager_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['deal_manager_c']['labelValue']='Ответственный менеджер';
$dictionary['Opportunity']['fields']['deal_manager_c']['name'] = 'deal_manager_c';
$dictionary['Opportunity']['fields']['deal_manager_c']['vname'] = 'LBL_DEAL_MANAGER_C';
$dictionary['Opportunity']['fields']['deal_manager_c']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['deal_manager_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['deal_manager_c']['dependency'] = '';
$dictionary['Opportunity']['fields']['deal_manager_c']['required'] = false;
$dictionary['Opportunity']['fields']['deal_manager_c']['massupdate'] = '0';
$dictionary['Opportunity']['fields']['deal_manager_c']['default'] = 'Заполнится автоматически';
$dictionary['Opportunity']['fields']['deal_manager_c']['no_default'] = false;
$dictionary['Opportunity']['fields']['deal_manager_c']['comments'] = 'deal_manager';
$dictionary['Opportunity']['fields']['deal_manager_c']['help'] = '';
$dictionary['Opportunity']['fields']['deal_manager_c']['importable'] = 'true';
$dictionary['Opportunity']['fields']['deal_manager_c']['duplicate_merge'] = 'disabled';
$dictionary['Opportunity']['fields']['deal_manager_c']['duplicate_merge_dom_value'] = '0';
$dictionary['Opportunity']['fields']['deal_manager_c']['audited'] = false;
$dictionary['Opportunity']['fields']['deal_manager_c']['reportable'] = true;
$dictionary['Opportunity']['fields']['deal_manager_c']['unified_search'] = false;
$dictionary['Opportunity']['fields']['deal_manager_c']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['deal_manager_c']['calculated'] = false;
$dictionary['Opportunity']['fields']['deal_manager_c']['len'] = '255';
$dictionary['Opportunity']['fields']['deal_manager_c']['size'] = '20';
$dictionary['Opportunity']['fields']['deal_manager_c']['id'] = 'deal_manager_c';
$dictionary['Opportunity']['fields']['deal_manager_c']['custom_module'] = ''; #'Opportunities';
//required to create the field in the _cstm table
$dictionary['Opportunity']['fields']['deal_manager_c']['source'] = 'custom_fields';
 

 // created: 2019-03-31 02:34:30
$dictionary['Opportunity']['fields']['loaded_act_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['loaded_act_c']['labelValue']='Акт мастера';

 

 // created: 2019-03-31 02:20:11
$dictionary['Opportunity']['fields']['good_date_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['good_date_c']['labelValue']='Сроки поставки';

 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2019-03-30 04:21:39
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['options']='numeric_range_search_dom';
$dictionary['Opportunity']['fields']['amount']['enable_range_search']='1';
$dictionary['Opportunity']['fields']['amount']['default'] = 0;
 
?>