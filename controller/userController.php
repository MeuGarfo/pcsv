<?php
$uid=segment(2);
$acao=segment(3);
if(!$acao){
    $acao='read';
}

switch($acao){
    case 'read':
    userReadController($uid);
    break;
}

function userReadController($uid){
    model('userModel');
    $user=userReadModel($uid);
    $data=[
        'profile'=>$user
    ];
    view('userRead',$data);
}
