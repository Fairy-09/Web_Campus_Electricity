<?php
session_start();
require_once('pdo.php');   //引入pdo.php
// var_dump($_POST);
$s_id=strtolower(trim(htmlentities($_POST['s_id'])));
$s_id=addslashes($s_id);    //防SQL注入
$pwd=md5($_POST['pwd']); 
// if(empty($s_id)){
//     echo"<script>
//         alert('用户名不能为空！');
//         history.back();
//     </script>";
//     exit();
// }
// else if(empty($pwd)){
//     echo"<script>
//         alert('密码不能为空');
//         history.back();
//     </script>";
//     exit();
// }
$sql="select * from stu_info where s_id='{$s_id}' ";
$rs=$pdo->query($sql);
// var_dump($rs);
$result=$rs->fetch(PDO::FETCH_ASSOC);   //从结果集中获取下一行 并且只需要关联数组
// var_dump($result);
if($result==false){
    echo '<script>
        alert("学号不存在！");
        history.back();
        exit();
    </script>';
}
else{
    if ($pwd==$result['pwd']) {
        $_SESSION['s_id']=$result['s_id'];
        $_SESSION['pwd']=$result['pwd'];
         if ($_POST['auto']=='1') {
            $auto=md5($username.$password);
            setcookie('auto',$auto,time()+10*24*3600);
            setcookie('s_id',$_SESSION['s_id'],time()+10*24*3600);
            // setcookie('logins_id',$s_id,time()+10*24*3600);
            // setcookie('loginpwd',md5($pwd),time()+10*24*3600);
        }
        header('Location:main.php');
    }
    else{
        echo '<script>alert("密码错误！");history.back();</script>';
        exit();
    }
}
?>