<?php
    session_start();
    if(!$_SESSION['username']){
        header("location:../login.html");
        die();
    }
    echo $_SESSION['username'].",欢迎登录！";
?>