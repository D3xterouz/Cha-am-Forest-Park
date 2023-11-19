<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact_address = $_POST["contact_address"];
    $contact_email = $_POST["contact_email"];
    $contact_phone = $_POST["contact_phone"];
    $contact_tourist = $_POST["contact_tourist"];
    $contact_open = $_POST["contact_open"];
    $contact_close = $_POST["contact_close"];

    if (!empty($_FILES['contact_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['contact_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["contact_img"]["tmp_name"], $target_file)) {
            $contact_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE contact SET ";
    if (isset($contact_img)) {
        $sql .= "contact_img='$contact_img', ";
    }
    $sql .= "contact_address='$contact_address', contact_email='$contact_email', contact_phone='$contact_phone', contact_tourist='$contact_tourist', contact_open='$contact_open', contact_close='$contact_close'  WHERE contact_id = '" . $_POST["contact_id"] . "' ";
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
}
?>
