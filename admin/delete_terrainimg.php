<?php
include('../db.php');
session_start();
$sql="DELETE FROM terrainimg where ti_id='".$_GET["ti_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='terrain.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='terrain.php';";
    echo "</script>";
}
?>