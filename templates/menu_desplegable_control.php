<?php
if(!isset($_SESSION['username'])){
    include "menu_desplegable.php";
}
else{
    include "menu_desplegableUser.php";
}
?>