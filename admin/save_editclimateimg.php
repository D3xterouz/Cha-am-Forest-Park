<?php
include('../db.php');
session_start();
    if (!empty($_FILES['ci_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['ci_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["ci_img"]["tmp_name"], $target_file)) {
            $ci_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE climateimg SET ";
    if (isset($ci_img)) {
        $sql .= "ci_img='$ci_img' WHERE ci_id = '" . $_POST["ci_id"] . "'";
    }
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='climate.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='climate.php'";
        echo "</script>";
    }
?>
