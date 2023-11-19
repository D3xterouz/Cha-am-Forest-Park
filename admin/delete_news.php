<?php
include('../db.php');
session_start();
$sql="DELETE FROM news where news_id='".$_GET["news_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข่าวเสร็จสิ้น');";
    echo "window.location='news.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='news.php';";
    echo "</script>";
}
?>