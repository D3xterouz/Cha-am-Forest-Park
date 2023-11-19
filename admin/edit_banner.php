<?php
include("../db.php");
include('sidebar.php');
$sql2 = "SELECT * FROM banner where banner_id='" . $_GET["banner_id"] . "'";
$qry2 = mysqli_query($conn, $sql2);
$rs2 = mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขหน้าปก</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editbanner.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูปหน้าปก</label>
                    <div class="col-sm-8">
                        <img src="../asset/image/<?= $rs2["banner_img"]; ?>" alt="" width="100%"><br><br>
                        <input type="file" name="banner_img" class="form-control" style="float:right;" accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div>
                <div class="clear_"></div>
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">หน้า</label>
                    <div class="col-sm-8">
                        <input type="text" name="banner_name" value="<?= $rs2["banner_name"]; ?>" class="form-control" style="float:right;" required>
                    </div>
                </div>
                    <input type="hidden" name="banner_id" value="<?= $rs2["banner_id"]; ?>">
                <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>