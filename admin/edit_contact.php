<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM contact where contact_id='".$_GET["contact_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลการติดต่อ</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editcontact.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <img src="../asset/image/<?= $rs2["contact_img"];?>" alt="" width="100%"><br><br>
                        <input type="file" name="contact_img" class="form-control" style="float:right;" accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ที่อยู่</label>
                    <div class="col-sm-8">
                        <textarea name="contact_address" id="" cols="30" rows="10" class="form-control" style="float:right;" required><?= $rs2["contact_address"];?></textarea>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">อีเมล</label>
                    <div class="col-sm-8">
                        <input type="email" name="contact_email" placeholder="เช่น test@email.com" value="<?= $rs2["contact_email"];?>" class="form-control" style="float:right;" required>
                    </div>
                    <input type="hidden" name="contact_id" value="<?= $rs2["contact_id"];?>">
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">โทรศัพท์</label>
                    <div class="col-sm-8">
                        <input type="text" name="contact_phone" value="<?= $rs2["contact_phone"];?>" minlength="10" maxlength="12" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ศูนย์บริการนักท่องเที่ยว</label>
                    <div class="col-sm-8">
                        <input type="text" name="contact_tourist" value="<?= $rs2["contact_tourist"];?>" minlength="10" maxlength="12" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">เวลาเปิดอุทยาน</label>
                    <div class="col-sm-8">
                        <input type="time" name="contact_open" value="<?= $rs2["contact_open"];?>" class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">เวลาปิดอุทยาน</label>
                    <div class="col-sm-8">
                        <input type="time" name="contact_close" value="<?= $rs2["contact_close"];?>" class="form-control" style="float:right;" required>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>