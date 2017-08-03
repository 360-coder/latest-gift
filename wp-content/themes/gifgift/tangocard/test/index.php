<?php
set_error_handler(null);
set_exception_handler(null);
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once "../vendor/autoload.php";
$platformName = 'gifgift'; // RaaS v2 API Platform Name
$platformKey = 'DtVQvvkHlZogP&nGMhnaDFslrlCxKCDpyNm@QcwLkAq'; // RaaS v2 API Platform Key

$client = new RaaSV2Lib\RaaSV2Client($platformName, $platformKey);

$orders = $client->getOrders();

$accounts = $client->getAccounts();
echo "<pre>"; print_r($accounts);
$identifier = 'gifgiftaccount';
$customerIdentifier = 'gifgift';
$email = 'shaanaku@gmail.com';



$body = new RaaSV2Lib\Models\CreateAccountRequestModel($identifier,'gifgift',$email);
echo "<pre>"; print_r($body);
$result = $client->createAccount($customerIdentifier,$body);
echo "<pre>"; print_r($result);

$result = $orders->createOrder($body);

echo "<pre>"; print_r($result);

$credentialList = $result->reward->credentialList;
print_r($result);
foreach ($credentialList as $credential) {
	$reedem.= ($credential->type == 'url') ? '<a href="'.$credential->value.'">'.$credential->value.'</a><br />' : $credential->value .'<br />';
	$reedem.= 'test' ;
	print_r($reedem);
}