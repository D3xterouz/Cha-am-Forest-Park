<?php
include('../db.php');
session_start();
    $sql = "INSERT INTO camp_detail (cd_content,cd_detail,cd_type) values ('" . trim($_POST["cd_content"]) . "','".trim($_POST["cd_detail"])."','".$_POST["cd_type"]."')";
    $qry = mysqli_query($conn, $sql);
    if ($qry) {
        echo "<script>";
        echo "alert('เพิ่มข้อมูลการตั้งแคมป์เสร็จสิ้น');";
        echo "window.location='camping.php';";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='camping.php';";
        echo "</script>";
    }
