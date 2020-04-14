<?php
require_once('bootstrap.php');

$record = Customer::find()->limit(1)->one();

var_dump($record);
