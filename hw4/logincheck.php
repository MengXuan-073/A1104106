<?php
session_start();


$adminName="nuk";
$adminPwd="123456";

$userName="a1104106";
$userPwd="20250314";

$loginName=$_POST["loginName"];
$loginPwd=$_POST["loginPwd"];


if($adminName==$loginName && $adminPwd==$loginPwd){
    echo "Login Success, Hello Admin!";
    $_SESSION["check"]=1;  
    setcookie("loginName", $loginName, time() + 60, "/");

    header("Location:login_admin.php");
    exit();

}else if($userName==$loginName && $userPwd==$loginPwd){
    echo "Login Success, Hello User!";
    $_SESSION["check"]=1;  
    setcookie("loginName", $loginName, time() + 30, "/");

    header("Location:login_user.php");
    exit();

}else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3; url='login.php'");
    exit();
}

?>
