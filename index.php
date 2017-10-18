<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2017/10/18
 * Time: 10:22
 */
/*echo "<pre>";
var_dump($_SERVER);*/
header("content-type:text/html;charset:utf-8");
define('come','true');
define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
define('APP_PATH',substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],'/')));
define('LIBS_PATH',APP_PATH.'/libs');
define('MODULES_PATH',APP_PATH.'/modules');
define('TEMPLATE_PATH',APP_PATH.'/template');
define('HTTP_URL',strtolower(strchr($_SERVER['SERVER_PROTOCOL'],'/',true)));
define('SERVER_URL',$_SERVER['HTTP_HOST']);
define('APP_URL',HTTP_URL.'://'.SERVER_URL.substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')));
define('LIBS_URL',APP_URL.'/libs');
define('MODULES_URL',APP_URL.'/modules');
define('TEMPLATE_URL',APP_URL.'/template');
define('STATIC_URL',APP_URL.'/static');
define('JS_URL',STATIC_URL.'/js');
define('CSS_URL',STATIC_URL.'/css');
define('IMG_URL',STATIC_URL.'/img');
include_once LIBS_PATH."/routes.class.php";
include_once LIBS_PATH."/smarty.class.php";
$route = new routes();
$route->set();


