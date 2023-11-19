<?php
include('../db.php');
session_start();
$sql="DELETE FROM camp_detail where cd_id='".$_GET["cd_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='camping.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='camping.php';";
    echo "</script>";
}
?>