<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $camp_cost = $_POST["camp_cost"];

    $sql = " UPDATE camping set camp_cost='$camp_cost' WHERE camp_id = '" . $_POST["camp_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='camping.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='camping.php'";
        echo "</script>";
    }
}
?>
