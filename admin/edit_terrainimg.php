<?php
include("../db.php");
include('sidebar.php');
$sql2 = "SELECT * FROM terrainimg where ti_id='" . $_GET["ti_id"] . "'";
$qry2 = mysqli_query($conn, $sql2);
$rs2 = mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรูปลักษณะภูมิประเทศ</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editterrainimg.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">รูป</label>
                    <div class="col-sm-8">
                        <img src="../asset/image/<?= $rs2["ti_img"]; ?>" alt="" width="100%"><br><br>
                        <input type="file" name="ti_img" class="form-control" style="float:right;" accept=".jpg, .jpeg , .png"><br>
                        <label for="" style="color:red;">*ต้องเป็นไฟล์นามสกุล .jpg, .jpeg, .png เท่านั้น!*</label>
                    </div>
                </div> <input type="hidden" name="ti_id" value="<?= $rs2["ti_id"] ?>">
                <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>