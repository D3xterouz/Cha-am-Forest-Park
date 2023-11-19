<?php
include('../db.php');
session_start();
    $sql = "INSERT INTO meetingrooms (mr_name,mr_detail) values ('" . trim($_POST["mr_name"]) . "','".trim($_POST["mr_detail"])."')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มภูมิห้องประชุม และสัมมนาเสร็จสิ้น');";
        echo "window.location='meeting_rooms.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='meeting_rooms.php';";
        echo "</script>";
    }
