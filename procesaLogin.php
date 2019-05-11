<?php

$logins=array(
    'admin' => 'admin',
    'pepe' => 'pepe'
);

function checkLogin($username, $password, $logins){
    if(!isset($username) || !isset($password)){
        return false;
    }
    return(array_key_exists($username, $logins)&&
        (strcmp($logins[$username], $password)==0));
}

if(!checkLogin($_REQUEST['username'],$_REQUEST['password'], $logins)){
    session_destroy();
    $errorLogin="El usuario o la contraseña son incorrectos";
    header("Location: index.php?errorLogin=$errorLogin");
}
else{
    session_start();
    $_SESSION['username']=$_REQUEST['username'];
    if($_SESSION['username']== "admin"){
        header("Location: admin.php");
    }
    else{
        header("Location: user.php");
    }
}