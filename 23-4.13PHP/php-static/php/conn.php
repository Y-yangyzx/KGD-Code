<?php
    $server = 'localhost';
    $UserName = 'root';
    $PassWord='root';
    $DBName = 'userinfo';
    $charset = 'utf8';
    $conn = mysqli_connect($server,$UserName,$PassWord,$DBName);
    if(!$conn){
        echo '链接失败！';
    }
?>