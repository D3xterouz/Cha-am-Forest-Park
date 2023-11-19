<?php
include('../db.php');
session_start();
    if (!empty($_FILES['m_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['m_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["m_img"]["tmp_name"], $target_file)) {
            $m_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE meetingimg SET ";
    if (isset($m_img)) {
        $sql .= "m_img='$m_img' WHERE m_id = '" . $_POST["m_id"] . "'";
    }
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='meeting_rooms.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='meeting_rooms.php'";
        echo "</script>";
    }
?>
