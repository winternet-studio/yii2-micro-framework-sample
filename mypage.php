<?php
require_once('bootstrap.php');

$customers = Customer::find()->limit(5)->all();

foreach ($customers as $customer) {
	print_r($customer->toArray());
	// do something...
}
