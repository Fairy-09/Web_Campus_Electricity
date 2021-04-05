<?php
header('Content-type:text/html;charset=utf8');
 // $dsn='mysql:host=localhost;dbname=power';
 // $db=new PDO($dsn,'root','');
try{
    $dsn='mysql:host=localhost;dbname=power';
    $pdo=new PDO($dsn,'root','');
} catch (PDOException $e) {
    echo'error:'.$e->getMessage();
}
$pdo->exec('set names utf8');
 $sql="insert into power_fee(s_id,d_id,fee_time,fee,remain_fee,remark)  values('201620181629','西一625','2018-9-12','100','120','现金支付')";

 echo $sql;
 $pdo->exec($sql);
 ?> 
