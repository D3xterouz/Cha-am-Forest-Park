<?php
include('../db.php');
session_start();
    if (!empty($_FILES['logo_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['logo_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["logo_img"]["tmp_name"], $target_file)) {
            $logo_img = $filename;
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาด');";
            echo "window.location='logo.php'";
            echo "</script>";
            exit();
        }
    }

    $sql = "UPDATE logo SET ";
    if (isset($logo_img)) {
        $sql .= "logo_img='$logo_img' WHERE logo_id = '" . $_POST["logo_id"] . "'";
    }
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='other.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='other.php'";
        echo "</script>";
    }
