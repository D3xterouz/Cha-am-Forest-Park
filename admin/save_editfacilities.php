<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_POST["f_name"];
    $f_link = $_POST["f_link"];

    if (!empty($_FILES['f_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['f_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["f_img"]["tmp_name"], $target_file)) {
            $f_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE facilities SET ";
    if (isset($f_img)) {
        $sql .= "f_img='$f_img', ";
    }
    $sql .= "f_name='$f_name', f_link='$f_link' WHERE f_id = '" . $_POST["f_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='facilities.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='facilities.php'";
        echo "</script>";
    }
}
?>
