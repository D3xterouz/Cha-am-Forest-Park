<?php
include("../db.php");
include('sidebar.php');
$sql2 = "SELECT * FROM video where video_id='" . $_GET["video_id"] . "'";
$qry2 = mysqli_query($conn, $sql2);
$rs2 = mysqli_fetch_array($qry2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขวิดีโอ</title>
</head>

<body>
    <div class="main-content">
        <h3>แก้ไขข้อมูล</h3>
        <div class="cover_">
            <form action="save_editvideo.php" method="post" enctype="multipart/form-data">
                <div class="form-group row" style="width:50%;">
                    <label for="staticEmail" class="col-sm-4 col-form-label">วิดีโอ</label>
                    <div class="col-sm-8">
                        <?= $rs2["video_link"]; ?><br><br>
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" onclick="toggleAccordion(this)">
                                    วิธีฝังคลิป
                                </div>
                                <div class="card-content">
                                    1.เลือกวิดีโอที่อยากฝังบนหน้าเว็บ และคลิกแชร์ (Share)<br><br>
                                    <img src="../asset/image/1697551482887.jpg" alt="" width="100%"><br><br>
                                    2.คลิกฝัง (Embed) <br><br>
                                    <img src="../asset/image/messageImage_1697551502822.jpg" alt="" width="100%"><br><br>
                                    3.คลิกคัดลอก (Copy) <br><br>
                                    <img src="../asset/image/messageImage_1697551521224.jpg" alt="" width="100%"><br><br>
                                    4.นำมาใส่ในฟอร์มกรอกคลิปวิดีโอ
                                </div>
                            </div>
                        </div>
                        <input type="text" name="video_link" placeholder="นำที่คัดลอกมาใส่ตรงนี้!" class="form-control" required>
                    </div>
                </div>
                <script>
                    function toggleAccordion(element) {
                        const cardContent = element.nextElementSibling;
                        if (cardContent.style.display === 'block') {
                            cardContent.style.display = 'none';
                        } else {
                            cardContent.style.display = 'block';
                        }
                    }
                </script>
                <input type="hidden" name="video_id" value="<?= $rs2["video_id"]; ?>">
                <a href="javascript:history.back()" class="btn btn-danger">ย้อนกลับ</a>
                <input type="submit" value="ยืนยัน" class="btn btn-success">
            </form>
        </div>
    </div>
</body>

</html>