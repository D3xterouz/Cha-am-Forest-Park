<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cd_content = $_POST["cd_content"];
    $cd_detail = $_POST["cd_detail"];
    $cd_type = $_POST["cd_type"];

    $sql = " UPDATE camp_detail set cd_content='$cd_content',cd_detail='$cd_detail',cd_type='$cd_type' WHERE cd_id = '" . $_POST["cd_id"] . "' ";
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
