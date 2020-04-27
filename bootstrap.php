<?php
require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');

$config = [
	'id' => 'micro-app',
	// the basePath of the application will be the `micro-app` directory
	'basePath' => __DIR__,
	// this is where the application will find all controllers
	// 'controllerNamespace' => 'app\controllers',
	// set an alias to enable autoloading of classes from the 'app' namespace
	'aliases' => [
		'@app' => __DIR__,
	],
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:host=localhost;dbname=yourdatabasename',
			'username' => 'yourusername',
			'password' => 'yourpassword',
			'charset' => 'utf8',
		],
	],
];

(new yii\web\Application($config));

class Customer extends \yii\db\ActiveRecord {
	public static function tableName() {
		return 'main_customers';
	}
}
