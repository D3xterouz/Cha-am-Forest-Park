<?php
include('../db.php');
session_start();
$sql="DELETE FROM plantimg where pi_id='".$_GET["pi_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='plant.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='plant.php';";
    echo "</script>";
}
?>