<?php
/**
 * @version  1.0
 * @author   小草
 * @description 全局加载项     
 * @date 	2016.10.24
 */
 
 //error_reporting(7);
ob_start();
header('Content-Type: text/html; charset=UTF-8');

define('W8AY_ROOT', dirname(__FILE__));
require_once W8AY_ROOT.'/config.php';
require_once W8AY_ROOT.'/include/lib/function.base.php';
define('TEMPLATE_PATH', W8AY_ROOT.'/content/views/');//后台当前模板路径
define('CSS_Path',"./content/views/");
doStripslashes();

$action = isset($_GET['action']) ? addslashes($_GET['action']) : '';
//Login_Controller::Display();
//$user = $_SESSION["user"];
