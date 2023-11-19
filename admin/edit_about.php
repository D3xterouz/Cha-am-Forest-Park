<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM about where About_ID='".$_GET["About_ID"]."'";
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
            <form action="save_editabout.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รายละเอียด</label>
                    <div class="col-sm-8">
                        <textarea name="About_Detail" class="form-control" style="float:right;" id="" cols="30" rows="10"><?= $rs2["About_Detail"];?></textarea>
                    </div>
                    <input type="hidden" name="About_ID" value="<?= $rs2["About_ID"];?>">
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>