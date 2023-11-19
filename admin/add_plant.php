<?php
include("../db.php");
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขพันธ์ไม้และสัตว์ป่า</title>
</head>

<body>
    <div class="main-content">
        <h3>เพิ่มไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_addplant.php" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อ</label>
                    <div class="col-sm-8">
                        <input type="text" name="plant_name" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="plant_detail" class="form-control" style="float:right;" id="" cols="30" rows="10"required></textarea>
                        </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>