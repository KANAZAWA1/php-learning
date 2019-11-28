<?php
session_start();
if(isset($_POST['submit'])){
    if($_SESSION['code'] == $_POST['code']){
        echo "验证码正确！";
    }else{
        die('验证码错误！！！');
    }
}
?>