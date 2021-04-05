<?php 
    require_once('Anti_jump.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>校园电网---电费查询</title>
</head>
<body>
    <link rel="stylesheet" href="../css/checkPower.css">
    <div class="head">    <!-- 头部盒子 -->
        <img src="../images/logo1.jpg" alt="logo" width="180" height="80" class="logo">
        <h1>校园电费缴纳系统</h1>
        <span class="s">
        <input type="text" name="search" placeholder="请输入您要搜索的内容">
        <!-- <a href="#">搜索</a> -->
        </span>
        <a href="#" title="个人主页"><img src="../images/user.png" alt="个人主页" class="user"></a>
    </div>
    <div class="middle">      <!-- 身体盒子 -->
            <?php 
                require_once('pdo.php');
    $sql="select * from power_fee where s_id='{$_SESSION['s_id']}'";
    // echo $sql;
    // exit;
    ?>
    <div class="info">
    <span class="con">
    <p id="titl">电费查询</p>
    <?php foreach ($pdo->query($sql) as $value) {?>
    <p>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号：<?=$value['s_id']?></p>
    <p>寝&nbsp;&nbsp;室&nbsp;&nbsp;号：<?=$value['d_id']?></p>
    <p>缴费时间：<?=empty($value['fee_time'])?'':date('Y-m-d',$value['fee_time'])?></p>
    <p>最近缴费：<?=$value['fee']?></p>
    <p>剩余电费： <?=$value['remain_fee']?></p>
    <p>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：<?=$value['remark']?></p>
    </span>
    </div>
    <?php } ?>
   <!--  <table>
        <caption>电费列表</caption>
        <thead>
            <tr>
                <th>学号</th>
                <th>寝室号</th>
                <th>缴费时间</th>
                <th>最近缴费</th>
                <th>剩余电费</th>
                <th>备注</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sql) as $value) {?>
            <tr>
                <td><?=$value['s_id']?></td>
                <td><?=$value['d_id']?></td>
                 <td><?=empty($value['fee_time'])?'':date('Y-m-d',$value['fee_time'])?></td>
                <td><?=$value['fee']?></td>
                <td><?=$value['remain_fee']?></td>
                <td><?=$value['remark']?></td>
            </tr> -->
         <!-- <?php } ?> -->
<!--         </tbody>
    </table> -->
        <br class="clearfloat ">
    </div>
    <div class="foot">           <!-- 脚部盒子 -->
        <div class="f">
        <p>校园电网&nbsp;&nbsp;&nbsp;Copyright &copy;Suit</p>
        <p>地址：江西省南昌市经开区广兰
        大道418号</p>
       <p>联系电话：15070908124</p>
   </div>
    </div>
</body>
</html>