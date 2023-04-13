<?php
if(isset($_POST['btn'])){
    include('./conn.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from UserInfo where UserName = '$username' and PassWord ='$password'";
    $res = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($res);
    if($rows<=0){
    echo '你丫的输入的数据库里没有！';
    header('refresh:3;url=../login.html');
    die();
    }
    $_SESSION['username'] = $username;
    header('location:../index.php');

}
?>