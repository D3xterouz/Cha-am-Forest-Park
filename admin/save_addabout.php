<?php
include('../db.php');
session_start();
    $sql = "INSERT INTO about (About_Detail) values ('" . trim($_POST["About_Detail"]) . "')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มข้อมูลเสร็จสิ้น');";
        echo "window.location='about.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='about.php';";
        echo "</script>";
    }
