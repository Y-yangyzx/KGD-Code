<?php
    include('./conn.php');
    session_start();
    if(isset($_POST['btnSub'])){
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];
        $rePwd = $_POST['rePwd'];
        $emial = $_POST['emial'];
        $tel = $_POST['tel'];
        
        // 1.输入是否为空
        if($username==''||$pwd=='')
        {
            echo "用户名或密码为空，请重新输入！";
            header('refresh:3;url=../register.php');
            // header('Content-Type:text/html;charset=utf-8');
            // header('location:../register.php');
            die();
        }
        //2.密码和确认密码是否一致
        if($pwd!=$rePwd){
            echo "两次密码输入不一致，请重新输入！";
            // 所有内容都会被清空
            header('refresh:3;url=../register.php');
            die();
        }
        // 3.用户名在数据库中是否存在
        $sql = "select * from userinfo where UserName ='$username'";
        $res = mysqli_query($conn,$sql);
        $resNum = mysqli_num_rows($res);//如果为1 说明数据库中存在 提示用户名已经存在
        if($resNum){
            echo "用户名已经存在，请重新输入！";
            header('refresh:3;url=../register.php');
            die();
        }
        // 4.将合法数据存放到数据库中
        // 将所有的数据都插入到数据库中  values
        $sqlInsert = "insert into userinfo values(null,'$username','$pwd','$emial','$tel')";
        $resInsert = mysqli_query($conn,$sqlInsert);//得到的结果是bool类型，无需处理结果集
        if($resInsert){
            echo "注册成功！";
            header('refresh:3;url=../login.html');
            $_SESSION['username'] = $username;
            $_SESSION['pwd'] = $pwd;
            $_SESSION['rePwd'] = $rePwd;
            $_SESSION['emial'] = $emial;
            $_SESSION['tel'] = $tel;
        }
        else{
            echo "注册失败！";
            header('refresh:3;url=../register.php');
        }
    }
    if(isset($_POST['btnRes'])){
        // $username = $pwd = $rePwd = $emial = $tel = '';
        $sql = "select * from userinfo where UserName ='$username'";
        $res = mysqli_query($conn,$sql);
        $resNum = mysqli_num_rows($res);//如果为1 说明数据库中存在 提示用户名已经存在
        if(!$resNum){
            echo "用户名不存在，无法重置！";
            header('refresh:3;url=../register.php');
            die();
        }
        if($_SESSION['pwd'] != $username ||$_SESSION['emial']!=$emial ||  $_SESSION['tel']!=$tel){
            echo "重置成功！";
            $sqlInsert = "insert into userinfo values(null,'$username','$pwd','$emial','$tel')";
            $resInsert = mysqli_query($conn,$sqlInsert);//得到的结果是bool类型，无需处理结果集
            header('refresh:3;url=../login.html');
        }
    }   



?>