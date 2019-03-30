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


 // created: 2019-03-27 13:59:12
$dictionary['Opportunity']['fields']['deal_address_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['deal_address_c']['labelValue']='Адрес выезда';

 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-03-30 03:27:34
$dictionary['Opportunity']['fields']['deal_manager_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['deal_manager_c']['labelValue']='Ответственный менеджер';

 

 // created: 2019-03-12 21:43:13
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 
?>