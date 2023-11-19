<?php
include('../db.php');
session_start();
if (move_uploaded_file($_FILES["ti_img"]["tmp_name"], "../asset/image/" . $_FILES["ti_img"]["name"])) {
    $ti_img = $_FILES["ti_img"]["name"];
    $sql = "INSERT INTO terrainimg (ti_img) values ('" . $ti_img . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มรูปภูมิประเทศเสร็จสิ้น');";
        echo "window.location='terrain.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='terrain.php';";
        echo "</script>";
    }
}
