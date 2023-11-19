<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yc_detail2 = $_POST["yc_detail2"];
    if (!empty($_FILES['yc_restroom']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['yc_restroom']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["yc_restroom"]["tmp_name"], $target_file)) {
            $yc_restroom = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE youthcamp SET ";
    if (isset($yc_restroom)) {
        $sql .= "yc_restroom='$yc_restroom' ";
    }
    $sql .= "yc_detail2='$yc_detail2' WHERE yc_id = '" . $_POST["yc_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='yc_restroom.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='yc_restroom.php'";
        echo "</script>";
    }
}
?>
