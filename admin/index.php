<?php
include('../db.php');
include('sidebar.php');
$sql2="SELECT * FROM view";
$qry2=mysqli_query($conn,$sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>หลังบ้าน</title>
</head>

<body>
<div class="main-content">
    <div class="cover_" style="padding-top:35px;">
        <h4>จำนวนผู้เข้าชมเว็บไซต์ ทั้งสิ้น <?= $rs2["count"];?> ครั้ง</h4>
    </div>
</div>
</body>
</html>