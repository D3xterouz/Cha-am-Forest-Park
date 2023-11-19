<?php
include('../db.php');
$sql="SELECT * FROM member WHERE username='".mysqli_real_escape_string($conn,$_POST["username"])."'";
$qry=mysqli_query($conn,$sql);
$rs=mysqli_fetch_array($qry);
if(!$rs){
    $sql="INSERT INTO member (username,password,user_FirstName,user_LastName) VALUES ('".trim($_POST["username"])."','".trim($_POST["password"])."','".trim($_POST["user_FirstName"])."','".trim($_POST["user_LastName"])."')";
    $qry=mysqli_query($conn,$sql);
    if($qry){
        echo "<script>";
        echo "alert('เพิ่มผู้ดูแลเสร็จสิ้น');";
        echo "window.location='member.php'";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "window.location='member.php'";
        echo "</script>"; 
    }
}else{
    echo "<script>";
    echo "alert('มีชื่อผู้ใช้นี้แล้ว');";
    echo "window.location='member.php'";
    echo "</script>";
}
?>