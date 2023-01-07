<?php
$x = 20;
$menu = [
        "Lau Tu Xuyen",
        "Vit Quay Bac Kinh",
        "Bo Bit Tet"
];
  $title = "Home";
?>
<!doctype html>
<html lang="en">
<head>
   <?php include("head.php") ?>
</head>
<body>
 <h1> hello world </h1>
    <h2>so luong sinh vien: <?php echo $x+5; //cho nay viet code php  ?></h2>

    <?php if($x>=20) : ?>
        <h3>lop dong : <?php echo $x+5 ?> </h3>
    <?php else : ?>
        <h3>lop vang</h3>
    <?php endif ?>
    <h2>Danh sach cac mon an:</h2>
    <ul>
        <?php foreach ($menu as $iteam): ?>
        <li><?php echo $iteam; ?></li>
        <?php endforeach ?>
    </ul>
    <?php  include("footer.php") ?>
</body>
</html>