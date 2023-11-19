<?php
include('../db.php');
session_start();
$sql="DELETE FROM facilities where f_id='".$_GET["f_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบเสร็จสิ้น');";
    echo "window.location='facilities.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='facilities.php';";
    echo "</script>";
}
?>