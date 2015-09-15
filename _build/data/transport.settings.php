<?php

$settings = array();


$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
    'key' => 'yandexmoney.bill_serv_id',     // set unique key
    'value' => null,
    'xtype' => 'textfield',     //  textfield, numberfield, combo-boolean or other
    'namespace' => NAMESPACE_NAME,
    'area' => 'site',
),'',true,true);
$settings[] = $setting;

 

unset($setting);
return $settings;