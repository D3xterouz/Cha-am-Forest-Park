<?php
include("../db.php");
include('sidebar.php');

?>
<?php

$sql2 = "SELECT * FROM video";
$qry2 = mysqli_query($conn,$sql2);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>วิดีโอแนะนำ</title>
    </head>
    <body>
    <div class="main-content">
    <h3>รายการวิดีโอ</h3>
    <div class="cover_">
        <table class="table" align="center">
            <tr>
                <td>รหัส</td>
                <td width="40%">วิดีโอแนะนำ</td>
                <td>ชื่อ</td>
                <td>แก้ไข</td>
            </tr>
            <?php
            while($rs2=mysqli_fetch_array($qry2)){
                ?>
                <tr>
                    <td><?= $rs2["video_id"];?></td>
                    <td><?= $rs2["video_link"];?></td>
                    <td><?= $rs2["video_name"];?></td>
                    <td><a href="edit_video.php?video_id=<?= $rs2['video_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </body>
    </html>



