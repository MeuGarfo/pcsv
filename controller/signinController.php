<?php
if(method()=='GET'){
    view('signin');
}else{
    die(var_dump(signin()));
}
