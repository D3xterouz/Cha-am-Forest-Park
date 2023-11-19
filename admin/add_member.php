<?php
include("../db.php");
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มผู้ดูแล</title>
</head>

<body>
    <div class="main-content">
        <h3>เพิ่มข้อมูล</h3>
        <div class="cover_">
            <form action="save_addmember.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อผู้ใช้</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="float:right;" name="username"required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รหัสผ่าน</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" style="float:right;" name="password"required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อจริง</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="float:right;" name="user_FirstName"required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">นามสกุล</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" style="float:right;" name="user_LastName"required>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>