<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost/restful/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



require_once ('vendor/autoload.php');

$route = new \Bramus\Router\Router();


$route->post('/' , 'System\controller\index@index');
$route->post('/createuser/', 'System\controller\creat_users@index');

$route->run();