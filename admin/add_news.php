<?php
include("../db.php");
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข่าวสาร</title>
</head>

<body>
    <div class="main-content">
        <h3>เพิ่มข้อมูล</h3>
        <div class="cover_">
            <form action="save_addnews.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูปข่าวสาร</label>
                    <div class="col-sm-8">
                        <input type="file" name="news_img" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อข่าวสาร</label>
                    <div class="col-sm-8">
                        <input type="text" name="news_name" class="form-control" style="float:right;" required accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="news_description" id="" cols="30" rows="10" class="form-control" style="float:right;"></textarea>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ข่าววันที่</label>
                    <div class="col-sm-8">
                        <input type="datetime-local" name="news_date" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ที่อยู่ข่าว</label>
                    <div class="col-sm-8">
                        <input type="text" name="news_link" placeholder="เช่น https://mgronline.com/local/detail/..." class="form-control" style="float:right;" required>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>