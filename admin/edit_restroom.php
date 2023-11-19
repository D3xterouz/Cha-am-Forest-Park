<?php
include("../db.php");
include('sidebar.php');
$sql2 = "SELECT * FROM youthcamp where yc_id='" . $_GET["yc_id"] . "'";
$qry2 = mysqli_query($conn, $sql2);
$rs2 = mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขค่ายเยาวชน</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editrestroom.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูปที่พัก</label>
                    <div class="col-sm-8">
                        <img src="../asset/image/<?= $rs2["yc_restroom"]; ?>" alt="" width="100%"><br><br>
                        <input type="file" name="yc_restroom" class="form-control" style="float:right;" accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                <div class="clear_"></div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">เนื้อหาเพิ่มเติม</label>
                    <div class="col-sm-8">
                        <textarea name="yc_detail2" id="" cols="30" rows="10" class="form-control" style="float:right;" required><?= $rs2["yc_detail2"]; ?></textarea>
                    </div>
                </div>
                    <input type="hidden" name="yc_id" value="<?= $rs2["yc_id"]; ?>">
                <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>