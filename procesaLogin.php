<?php

/*$logins=array(
    'admin' => 'admin',
    'pepe' => 'pepe'
);

function checkLogin($username, $password, $logins){
    if(!isset($username) || !isset($password)){
        return false;
    }

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
}*/
require_once 'conectar.php';
$sql = "SELECT username, password FROM usuarios ";
foreach ($db->query($sql) as $fila) {
    if($fila['username']==$_REQUEST['username'] && $fila['password']==$_REQUEST['password']){


        if($_REQUEST['username']== "admin"){
            session_start();
            $_SESSION['username']=$_REQUEST['username'];
            header("Location: admin.php");
        }
        else{
            session_start();
            $_SESSION['username']=$_REQUEST['username'];
            header("Location: user.php");
        }
    }
    else{
        /*session_destroy();*/
        $errorLogin="El usuario o la contraseña son incorrectos";
        header("Location: index.php?errorLogin=$errorLogin");
    }
}

