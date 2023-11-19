<?php
include("../db.php");
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มรูปลักษณะภูมิประเทศ</title>
</head>

<body>
    <div class="main-content">
        <h3>เพิ่มข้อมูล</h3>
        <div class="cover_">
            <form action="save_addterrainimg.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <input type="file" name="ti_img" class="form-control" style="float:right;" required accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>