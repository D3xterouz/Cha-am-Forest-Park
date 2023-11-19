<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM meetingrooms where mr_id='".$_GET["mr_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขห้องประชุม และสัมมนา</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editmeeting.php" method="post" enctype="multipart/form-data">
            <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ชื่อ</label>
                    <div class="col-sm-8">
                        <input type="text" name="mr_name" value="<?= $rs2["mr_name"];?>"class="form-control" style="float:right;" required>
                    </div>
                </div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="mr_detail" class="form-control" style="float:right;" id="" cols="30" rows="10"required><?= $rs2["mr_detail"];?></textarea>
                        <input type="hidden" name="mr_id" value="<?= $rs2["mr_id"]?>">
                    </div>
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>