<html>
<head>
    <meta charset="utf-8">
    <style>
        div{
            padding: 15px;
            text-align: center;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<h2>รายชื่อสมาชิกใน blueshop</h2><br>
<div style="display:flex">
<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
    <div>
    <a href="detailworkshop5.php?username=<?=$row["username"]?>">
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'>
</a><br>
<?=$row ["username"]?>
</div>
<?php endwhile; ?>
</div>
</body>
</html>