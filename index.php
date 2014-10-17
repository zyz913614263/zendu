<META http-equiv="content-type" content="text/html; charset=UTF-8"> 
<title>怎度网---最有人气的网站</title>

<?php
/**
 * 前端页面加载
 * @copyright (c) Emlog All Rights Reserved
 */

require_once 'init.php';

define('TEMPLATE_PATH', TPLS_PATH.Option::get('nonce_templet').'/');
//前台模板路径
$emDispatcher = Dispatcher::getInstance();
$emDispatcher->dispatch();
View::output();
