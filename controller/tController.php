<?php
$uid=segment(2);
$acao=segment(3);
if(!$acao){
    $acao='read';
}

switch($acao){
    case 'upload':
    tUploadController();
    break;
    case 'read':
    tReadController($uid);
    break;
}

function tReadController($uid){
    model('tModel');
    $t=tReadModel($uid);
    model('userModel');
    $uuid=$t['uuid'];
    $profile=userReadModel($uuid);
    $data=[
        't'=>$t,
        'profile'=>$profile
    ];
    view('tRead',$data);
}

function tUploadController(){
    $currentUser=isAuth();
    if($currentUser){
        $data=[
            'currentUser'=>$currentUser
        ];
        if(method()=='GET'){
            view('upload');
        }else{

        }
    }else{
        $url='/signin?return_to=/t/_/upload';
        redirect($url);
    }

}
