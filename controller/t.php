<?php
$uid=segment(2);
$acao=segment(3);
if($acao=='upload'){
    tUpload();
}

function tUpload(){
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
