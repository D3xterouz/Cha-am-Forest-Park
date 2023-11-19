<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mr_name = $_POST["mr_name"];
    $mr_detail = $_POST["mr_detail"];

    $sql = " UPDATE meetingrooms set mr_name='$mr_name',mr_detail='$mr_detail' WHERE mr_id = '" . $_POST["mr_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='meeting_rooms.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='meeting_rooms.php'";
        echo "</script>";
    }
}
?>
