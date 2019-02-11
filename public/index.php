<?php
require '../basic/basic.php';
inc([
    'auth',
    'controller',
    'db',
    'e',
    'error',
    'method',
    'model',
    'redirect',
    'segment',
    'view',
]);
error();
$cfg=require ROOT.'config/db.php';
createDB($cfg);
$controllerName=segment(1);
if($controllerName=='/'){
    $controllerName='index';
}
$controllerName=$controllerName.'Controller';
if(!controller($controllerName)){
    echo ''404';
}
