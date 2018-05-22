<?php

error_reporting(0);
ob_start();
ini_set('session.cookie_lifetime', 0); // browser cookie deletion on browser close
ini_set('session.gc_maxlifetime', 600); // 10 minutes
ini_set('session.gc_probability', 1); // see next line...
ini_set('session.gc_divisor', 100); // in combination with previous

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-framework/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
