<?php
include('../db.php');
session_start();
if (move_uploaded_file($_FILES["f_img"]["tmp_name"], "../asset/image/" . $_FILES["f_img"]["name"])) {
    $f_img = $_FILES["f_img"]["name"];
    $sql = "INSERT INTO facilities (f_img,f_name,f_link) values ('" . $f_img . "','" . trim($_POST["f_name"]) . "','" . $_POST["f_link"] . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มสิ่งอำนวยความสะดวกเสร็จสิ้น');";
        echo "window.location='facilities.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='facilities.php';";
        echo "</script>";
    }
}
