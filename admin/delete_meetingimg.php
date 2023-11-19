<?php
include('../db.php');
session_start();
$sql="DELETE FROM meetingimg where m_id='".$_GET["m_id"]."'";
$qry=mysqli_query($conn,$sql);
if ($qry) {
    echo "<script>";
    echo "alert('ลบข้อมูลเสร็จสิ้น');";
    echo "window.location='meeting_rooms.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='meeting_rooms.php';";
    echo "</script>";
}
?>