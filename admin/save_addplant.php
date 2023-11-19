<?php
include('../db.php');
session_start();
    $sql = "INSERT INTO plant (plant_name,plant_detail) values ('" . trim($_POST["plant_name"]) . "','".trim($_POST["plant_detail"])."')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มพันธ์ไม้และสัตว์ป่าเสร็จสิ้น');";
        echo "window.location='plant.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='plant.php';";
        echo "</script>";
    }
