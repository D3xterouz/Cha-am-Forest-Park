<?php
include('../db.php');
session_start();
$sql="DELETE FROM about where About_ID='".$_GET["About_ID"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='about.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='about.php';";
    echo "</script>";
}
?>