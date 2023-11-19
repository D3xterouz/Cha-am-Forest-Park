<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $news_name = $_POST["news_name"];
    $news_description = $_POST["news_description"];
    $news_date = $_POST["news_date"];
    $news_link = $_POST["news_link"];

    if (!empty($_FILES['news_img']['name'])) {
        $target_dir = "../asset/image/";
        $temp = explode(".", $_FILES['news_img']['name']);
        $filename = round(microtime(true)) . '.' . end($temp);
        $target_file = $target_dir . basename($filename);

        if (move_uploaded_file($_FILES["news_img"]["tmp_name"], $target_file)) {
            $news_img = $filename;
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }

    $sql = "UPDATE news SET ";
    if (isset($news_img)) {
        $sql .= "news_img='$news_img', ";
    }
    $sql .= "news_name='$news_name', news_description='$news_description', news_date='$news_date', news_link='$news_link' WHERE news_id = '" . $_POST["news_id"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขข่าวสารเสร็จสิ้น');";
        echo "window.location='news.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='news.php'";
        echo "</script>";
    }
}
?>
