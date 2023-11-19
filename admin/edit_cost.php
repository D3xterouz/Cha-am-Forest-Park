<?php
include("../db.php");
include('sidebar.php');
$sql2="SELECT * FROM camping where camp_id='".$_GET["camp_id"]."'";
$qry2 = mysqli_query($conn, $sql2);
$rs2=mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขค่าธรรมเนียม</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editcost.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">ค่าธรรมเนียม</label>
                    <div class="col-sm-8">
                        <input type="text" name="camp_cost" value="<?= $rs2["camp_cost"];?>"class="form-control" style="float:right;" required>
                    </div>
                    <input type="hidden" name="camp_id" value="<?= $rs2["camp_id"];?>">
                </div>
                    <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>