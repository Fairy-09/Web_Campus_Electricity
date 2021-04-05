<?php
require_once('pdo.php');
$sql="select * from power_fee";
$rs=$pdo->query($sql);
$list=$rs->fetchAll(PDO::FETCH_ASSOC);
var_dump($list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>删除缴费信息</title>
</head>
<body>
    <form action="del.php" method="post">
        <select name="id">
            <?php
                foreach ($list as $key => $value) {
                    echo "<option value='$value[id]'>$value[d_id]</option>";
                }
            ?>
        </select>
        <p>
            <input type="submit" value="删除">
        </p>
    </form>
</body>
</html>