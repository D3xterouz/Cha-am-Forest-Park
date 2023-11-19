<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yc_name = $_POST["yc_name"];
    $yc_description = $_POST["yc_description"];
    $yc_detail = $_POST["yc_detail"];

    if (!empty($_FILES['yc_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['yc_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["yc_img"]["tmp_name"], $target_file)) {
            $yc_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE youthcamp SET ";
    if (isset($yc_img)) {
        $sql .= "yc_img='$yc_img', ";
    }
    $sql .= "yc_name='$yc_name', yc_description='$yc_description',yc_detail='$yc_detail' WHERE yc_id = '" . $_POST["yc_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='youthcamp.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='youthcamp.php'";
        echo "</script>";
    }
}
?>
