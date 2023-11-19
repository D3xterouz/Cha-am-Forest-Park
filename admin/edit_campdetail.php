<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM camp_detail where cd_id='".$_GET["cd_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลการตั้งแคมป์</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editcampdetail.php" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อ</label>
                    <div class="col-sm-8">
                        <input type="text" name="cd_content" value="<?= $rs2["cd_content"];?>"class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="cd_detail" class="form-control" style="float:right;" id="" cols="30" rows="10"required><?= $rs2["cd_detail"];?></textarea>
                        <input type="hidden" name="cd_id" value="<?= $rs2["cd_id"]?>">
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ประเภท</label>
                    <div class="col-sm-8">
                        <select name="cd_type" class="form-control">
                            <option value="การใช้บริการ" <?= $rs2["cd_type"] === "การใช้บริการ" ? "selected" : "" ?>>การใช้บริการ</option>
                            <option value="ข้อแนะนำ" <?= $rs2["cd_type"] === "ข้อแนะนำ" ? "selected" : "" ?>>ข้อแนะนำ</option>
                        </select>
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>