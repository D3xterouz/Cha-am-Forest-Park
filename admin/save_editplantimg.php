<?php
include('../db.php');
session_start();
    if (!empty($_FILES['pi_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['pi_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["pi_img"]["tmp_name"], $target_file)) {
            $pi_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE plantimg SET ";
    if (isset($pi_img)) {
        $sql .= "pi_img='$pi_img' WHERE pi_id = '" . $_POST["pi_id"] . "'";
    }
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='plant.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='plant.php'";
        echo "</script>";
    }
?>
