<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>第一个参数：<input type="text" name="first"></p>
        <select name="ysf" id="" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <p>第一个参数：<input type="text" name="second"></p>
        <p><input type="submit" value="提交" name="sub"></p>
    </form>
</body>
</html>

<?php
    if(isset($_POST["sub"])){
        $firstNum = $_POST["first"];
        $secondNum = $_POST["second"];
        
        if($firstNum!=null&& $secondNum!=null){
            $ysf = $_POST["ysf"];
            $res =0;    
            $n= null;
            
            if($ysf=="+"){
                         $res = $firstNum + $secondNum;
            }
            if($ysf=="-"){
                $res = $firstNum - $secondNum;
            }
            if($ysf=="*"){
                $res = $firstNum * $secondNum;
            }
            if($ysf=="/"){
                if($secondNum!=0){
                    $res = $firstNum / $secondNum;
                }
               echo "被除数不能为0";
            }          
                 echo $res;           
       }  
       else{       
        echo "请输入完整运算数！";
       } 
    }     
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <style> 
    </style>
</head>
<body>
    <form action="" method="post">
        <p><input type="text" name="C"></p>
        <p><input type="text" name="K"></p>
        <input type="submit" value="提交" name="sub">
    </form>
    

   
</body>
</html>

<?php
if(isset($_POST["sub"])){
    $C=$_POST["C"];
    $K=$_POST["K"];
    $S = $C*$K;
    echo $S;
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <p>第一个参数：<input type="text" name="first"></p>
        <select name="ysf" id="" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <p>第一个参数：<input type="text" name="second"></p>
        <p><input type="submit" value="提交" name="sub"></p>
    </form>
</body>
</html>

<?php
    if(isset($_POST["sub"])){
        $firstNum = $_POST["first"];
        $secondNum = $_POST["second"];
        
        if($firstNum!=null&& $secondNum!=null){
            $ysf = $_POST["ysf"];
            $res =0;    
            $n= null;
            
            if($ysf=="+"){
                         $res = $firstNum + $secondNum;
            }
            if($ysf=="-"){
                $res = $firstNum - $secondNum;
            }
            if($ysf=="*"){
                $res = $firstNum * $secondNum;
            }
            if($ysf=="/"){
                if($secondNum!=0){
                    $res = $firstNum / $secondNum;
                }
               echo "被除数不能为0";
            }          
                 echo $res;           
       }  
       else{       
        echo "请输入完整运算数！";
       } 
    }     
?>
