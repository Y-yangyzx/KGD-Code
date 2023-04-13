<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        /* *{
            margin: 0;
            padding: 0;
        } */
        .box{
            width: 500px;
            margin: 150px auto;
        }
        fieldset{
            width: 500px;
        }
        h1{
            width: 500px;
            text-align: center;
        }
        .table{
            margin: 0 auto;
            text-align: center;
        }
        input{
            width: 250px;
            height: 30px;
        }
        .btn{
            width: 80px;
            height: 35px;
            margin-left: 15px;
        }
    </style>
    
</head>
<body>
       <!--导航-->
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">新闻管理系统</a>

    </nav>
    <!--导航-->
    <div class="box">
    <h1>用户注册</h1>
    <fieldset>
        <legend>注册</legend>
        <form action="./php/registerser.php" method="post" class="table">
            <p>用&nbsp;户&nbsp;名：<input type="text" name="username"></p>
            <p>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="password" name="pwd"></p>
            <p>确认密码：<input type="password" name="rePwd"></p>
            <p>电子邮箱：<input type="text" name="emial"></p>
            <p>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机：<input type="text" name="tel"></p>
            <p><input type="submit" name="btnSub" value="注册" class="btn">
               <input type="submit" name="btnRes" class="btn">
            </p>
        </form>
    </fieldset>
</div>
</body>
</html>