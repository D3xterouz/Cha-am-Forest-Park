<?php
include('../db.php');
session_start();
    $sql = "INSERT INTO terrain (terrain_name,terrain_detail) values ('" . trim($_POST["terrain_name"]) . "','".trim($_POST["terrain_detail"])."')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มภูมิประเทศเสร็จสิ้น');";
        echo "window.location='terrain.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='terrain.php';";
        echo "</script>";
    }
