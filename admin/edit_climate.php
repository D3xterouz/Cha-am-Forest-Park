<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM climate where climate_id='".$_GET["climate_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขลักษณะภูมิอากาศ</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editclimate.php" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="climate_detail" class="form-control" style="float:right;" required id="" cols="30" rows="10"><?= $rs2["climate_detail"];?></textarea>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">หน้าร้อน</label>
                    <div class="col-sm-8">
                        <textarea name="climate_summer" class="form-control" style="float:right;" id="" cols="30" rows="10"required><?= $rs2["climate_summer"];?></textarea>
                        <input type="hidden" name="climate_id" value="<?= $rs2["climate_id"]?>">
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">หน้าฝน</label>
                    <div class="col-sm-8">
                        <textarea name="climate_rainy" class="form-control" style="float:right;" id="" cols="30" rows="10"required><?= $rs2["climate_rainy"];?></textarea>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">หน้าหนาว</label>
                    <div class="col-sm-8">
                        <textarea name="climate_winter" class="form-control" style="float:right;" id="" cols="30" rows="10"required><?= $rs2["climate_winter"];?></textarea>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>