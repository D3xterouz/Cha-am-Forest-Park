<?php
include('../db.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_FirstName = $_POST["user_FirstName"];
    $user_LastName = $_POST["user_LastName"];
    $user_id = $_POST["user_id"];

    $sql_check_duplicate = "SELECT * FROM member WHERE username='" . mysqli_real_escape_string($conn, $_POST["username"]) . "' AND user_id != '" . $user_id . "'";
    $qry_check_duplicate = mysqli_query($conn, $sql_check_duplicate);
    $rs_check_duplicate = mysqli_fetch_array($qry_check_duplicate);

    if (!$rs_check_duplicate) {
        $sql = "UPDATE member SET username='$username', password='$password', user_FirstName='$user_FirstName', user_LastName='$user_LastName' WHERE user_id = '$user_id'";
        $qry = mysqli_query($conn, $sql);

        if ($qry) {
            echo "<script>";
            echo "alert('แก้ไขเสร็จสิ้น');";
            echo "window.location='member.php'";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาด');";
            echo "window.location='member.php'";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert('ชื่อผู้ใช้นี้ถูกใช้แล้ว');";
        echo "window.location='member.php'";
        echo "</script>";
    }
}
?>
