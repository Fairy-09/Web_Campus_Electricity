<?php
session_start();
if(!isset($_SESSION['s_id'])){
 echo '<script>alert("登录超时");location.href="signIn.php";</script>';      //防跳墙
}
?>