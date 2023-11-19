<?php
include('../db.php');
session_start();
if (move_uploaded_file($_FILES["pi_img"]["tmp_name"], "../asset/image/" . $_FILES["pi_img"]["name"])) {
    $pi_img = $_FILES["pi_img"]["name"];
    $sql = "INSERT INTO plantimg (pi_img) values ('" . $pi_img . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มรูปพันธ์ไม้และสัตว์ป่าเสร็จสิ้น');";
        echo "window.location='plant.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='plant.php';";
        echo "</script>";
    }
}
