<?php
include('../db.php');
session_start();
if (move_uploaded_file($_FILES["m_img"]["tmp_name"], "../asset/image/" . $_FILES["m_img"]["name"])) {
    $m_img = $_FILES["m_img"]["name"];
    $sql = "INSERT INTO meetingimg (m_img) values ('" . $m_img . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มรูปห้องประชุม และสัมมนาเสร็จสิ้น');";
        echo "window.location='meeting_rooms.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='meeting_rooms.php';";
        echo "</script>";
    }
}
