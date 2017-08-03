<?php /* Template Name: Test Page */ ?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

 ?>
<?php get_header();?>

<?php
//require_once "../tangocard/vendor/autoload.php";
require_once "/var/www/html/wp-content/themes/gifgift/tango/vendor/autoload.php";
//$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name // SANDBOX PLATFORM NAME
//$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; // RaaS v2 API Platform Key for SANDBOX

//$platformName = 'gifgift'; // RaaS v2 API Platform Name
//$platformKey = 'DtVQvvkHlZogP&nGMhnaDFslrlCxKCDpyNm@QcwLkAq'; // RaaS v2 API Platform Key

//$platformName = 'GifGiftCard_Test'; // RaaS v2 API Platform Name
//$platformKey = 'CDyCRNeJOjRfNOJIxwr$wadcE?&GLI@yPMBdSyJySSloQR'; // RaaS v2 API Platform Key

$platformName = 'gifgift'; // RaaS v2 API Platform Name
$platformKey = 'yOVufLQoFBKOsAfScBXkqNlImWVTTqU!?VNNVCxolaZvHmA'; // RaaS v2 API Platform Key


$client = new RaasLib\RaasClient($platformName, $platformKey);

$accounts = $client->getAccounts(); // Used For all purpose in accounts

$orders = $client->getOrders(); // Used for Orders

$catalog = $client->getCatalog();
$results = $catalog->getCatalog();
echo "<pre>"; print_r($results);

/* Get All Customers Start */

$customers = $client->getCustomers();
$resultcust = $customers->getAllCustomers();
echo "<pre>"; print_r($resultcust).'<br/>';

/* Get All Customers End */


/*
$customers = $client->getCustomers();
$customerIdentifier = 'navitest';
$diaplayname = 'navitest';
$body = new RaasLib\Models\CreateCustomerRequestModel($customerIdentifier,$diaplayname);
echo "<pre>"; print_r($body);
$result = $customers->createCustomer($body);
echo "<pre>"; print_r($result);*/



/* Create Customer Start */
/*$customers = $client->getCustomers();
$customerIdentifier = 'navi';
$diaplayname = 'navi';
$body = new RaasLib\Models\CreateCustomerRequestModel($customerIdentifier,$diaplayname);
echo "<pre>"; print_r($body);
$result = $customers->createCustomer($body);
echo "<pre>"; print_r($result);*/

/* Create Customer End */


/* Create Account Start */

//$identifier = 'gifgiftaccount';
/*$customerIdentifier = 'navitest';
$accountIdentifier = 'navitestaccount';
$email = 'navitestaccount@gmail.com';
$diaplayname = 'navitestaccount'; 
$body = new RaasLib\Models\CreateAccountRequestModel($accountIdentifier,$diaplayname,$email);
echo "<pre>"; print_r($body);
$result2 = $accounts->createAccount($customerIdentifier,$body);
echo "<pre>"; print_r($result2);*/

/* Create Account End */



/* Create Order Start*/

$body = new RaasLib\Models\CreateOrderRequestModel('navitests',50,'navitest',false,'U666425',NULL,'Create New Order with amount',NULL,'Testing New Order with amount',NULL,NULL,NULL);
//$body = new RaasLib\Models\CreateOrderRequestModel('shaanaksh',30,'shaanaku',false,'U666425',NULL,'Create New Order',NULL,'Testing New Order',NULL,NULL,NULL);

//$body = new RaasLib\Models\CreateOrderRequestModel('shaangifaccounts',20,NULL,'shaangifs','only for testing',NULL,'only for testing','only for testing','shaanaku@gmail.com','sunpreet','shaan',false,'shaanaku@gmail.com','sunpreet','shaan','U569744');
echo "<pre>"; print_r($body);
$result3 = $orders->createOrder($body); //7382b29d-b701-4118-b3ce-0dc03eb926ae
echo "<pre>"; print_r($result3);
$redempt = $result3->reward->redemptionInstructions;
echo "<pre>"; print_r($redempt).'<br/>';

$credentialList = $result3->reward->credentialList;
echo "<pre>"; print_r($credentialList).'<br/>';

/* Create Order End*/






/* $accounts = $client->getAccounts();
$identifier = 'gifgiftaccount';
$customerIdentifier = 'gifgift';
$email = 'shaanaku@gmail.com';



$body = new RaaSV2Lib\Models\CreateAccountRequestModel($identifier,'dean',$email);
echo "<pre>"; print_r($body);
$result = $accounts->createAccount($customerIdentifier,$body);
echo "<pre>"; print_r($result); */


?>

<?php get_footer(); ?>