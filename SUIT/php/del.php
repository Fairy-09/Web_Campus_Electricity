<?php 
require_once("pdo.php");
$d_id=$_POST['d_id'];
if(empty($d_id)){
    echo '<script>
        alert("请提供缴费的寝室号！");
        history.back();
    </script>';
    exit();
}
$sql="delete from stu_info where id={$id}";
$result=$pdo->exec($sql);
if($result!==false){
    echo '删除成功！';
}
 ?>
