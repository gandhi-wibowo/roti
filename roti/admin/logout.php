<?php
session_start();
if($_SESSION['name']==NULL){
    header("location:login.php");
}else{
    session_destroy();
    header("location:login.php");
    
}
?>

