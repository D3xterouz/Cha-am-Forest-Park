<?php
include('../db.php');
session_start();
$news_date=$_POST["news_date"];
if (move_uploaded_file($_FILES["news_img"]["tmp_name"], "../asset/image/" . $_FILES["news_img"]["name"])) {
    $news_img = $_FILES["news_img"]["name"];
    $sql = "INSERT INTO news (news_img,news_name,news_description,news_date,news_link) values ('" . $news_img . "','" . trim($_POST["news_name"]) . "','" . trim($_POST["news_description"]) . "','" . $news_date . "','" . $_POST["news_link"] . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มข่าวเสร็จสิ้น');";
        echo "window.location='news.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='news.php';";
        echo "</script>";
    }
}
