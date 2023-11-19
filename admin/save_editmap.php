<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $map_name = $_POST["map_name"];
    $map_detail = $_POST["map_detail"];

    if (!empty($_FILES['map_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['map_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["map_img"]["tmp_name"], $target_file)) {
            $map_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }
    
    $sql = "UPDATE map SET ";
    if (isset($map_img)) {
        $sql .= "map_img='$map_img', ";
    }
    $sql .= "map_name='$map_name',map_detail='$map_detail' WHERE map_id = '" . $_POST["map_id"] . "' ";
    $qry = mysqli_query($conn, $sql);


    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='map.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='map.php'";
        echo "</script>";
    }
}
?>
