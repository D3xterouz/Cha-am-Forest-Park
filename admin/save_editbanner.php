<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $banner_name = $_POST["banner_name"];

    if (!empty($_FILES['banner_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['banner_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["banner_img"]["tmp_name"], $target_file)) {
            $banner_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }
    
    $sql = "UPDATE banner SET ";
    if (isset($banner_img)) {
        $sql .= "banner_img='$banner_img', ";
    }
    $sql .= "banner_name='$banner_name' WHERE banner_id = '" . $_POST["banner_id"] . "' ";
    $qry = mysqli_query($conn, $sql);


    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='banner.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='banner.php'";
        echo "</script>";
    }
}
?>
