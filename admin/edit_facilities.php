<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM facilities where f_id='".$_GET["f_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขสิ่งอำนวยความสะดวก</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editfacilities.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <img src="../asset/image/<?= $rs2["f_img"];?>" alt="" width="100%"><br><br>
                        <input type="file" name="f_img" class="form-control" style="float:right;" accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อสิ่งอำนวยความสะดวก</label>
                    <div class="col-sm-8">
                        <input type="text" name="f_name" value="<?= $rs2["f_name"];?>" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ที่อยู่เนื้อหาเพิ่มเติม</label>
                    <div class="col-sm-8">
                        <input type="text" name="f_link" placeholder="เช่น facilities.php" value="<?= $rs2["f_link"];?>" class="form-control" style="float:right;">
                    </div>
                    <input type="hidden" name="f_id" value="<?= $rs2["f_id"];?>">
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>