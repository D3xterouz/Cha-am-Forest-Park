<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $video_link = $_POST["video_link"];

    $sql = "UPDATE video SET video_link='$video_link' WHERE video_id = '" . $_POST["video_id"] . "' ";
    $qry = mysqli_query($conn, $sql);


    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='video.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='video.php'";
        echo "</script>";
    }
}
?>
