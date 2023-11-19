<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $About_Detail = $_POST["About_Detail"];

    $sql = " UPDATE about set About_Detail='$About_Detail' WHERE About_ID = '" . $_POST["About_ID"] . "' ";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        echo "<script>";
        echo "alert('แก้ไขเสร็จสิ้น');";
        echo "window.location='about.php'";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='about.php'";
        echo "</script>";
    }
}
?>
