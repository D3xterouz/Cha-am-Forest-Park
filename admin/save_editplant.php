<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plant_name = $_POST["plant_name"];
    $plant_detail = $_POST["plant_detail"];

    $sql = " UPDATE plant set plant_name='$plant_name',plant_detail='$plant_detail' WHERE plant_id = '" . $_POST["plant_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='plant.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='plant.php'";
        echo "</script>";
    }
}
?>
