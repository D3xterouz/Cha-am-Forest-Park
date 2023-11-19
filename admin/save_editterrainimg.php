<?php
include('../db.php');
session_start();
    if (!empty($_FILES['ti_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['ti_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["ti_img"]["tmp_name"], $target_file)) {
            $ti_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE terrainimg SET ";
    if (isset($ti_img)) {
        $sql .= "ti_img='$ti_img' WHERE ti_id = '" . $_POST["ti_id"] . "'";
    }
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='terrain.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='terrain.php'";
        echo "</script>";
    }
?>
