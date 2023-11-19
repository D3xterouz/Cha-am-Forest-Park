<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $terrain_name = $_POST["terrain_name"];
    $terrain_detail = $_POST["terrain_detail"];

    $sql = " UPDATE terrain set terrain_name='$terrain_name',terrain_detail='$terrain_detail' WHERE terrain_id = '" . $_POST["terrain_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='terrain.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='terrain.php'";
        echo "</script>";
    }
}
?>
