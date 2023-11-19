<?php
include("../db.php");
include('sidebar.php');
?>
<?php
$sql2 = "SELECT * FROM map";
$qry2 = mysqli_query($conn,$sql2);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>แผนที่</title>
    </head>
    <body>
    <div class="main-content">
    <h3>รายการแผนที่</h3>
    <div class="cover_">
        <table class="table" align="center">
            <tr>
                <td>รหัส</td>
                <td width="40%">รูป</td>
                <td>ชื่อ</td>
                <td>รายละเอียด</td>
                <td>แก้ไข</td>
            </tr>
            <?php
            while($rs2=mysqli_fetch_array($qry2)){
                ?>
                <tr>
                    <td><?= $rs2["map_id"];?></td>
                    <td><img src="../asset/image/<?= $rs2["map_img"];?>" alt="" width="100%"></td>
                    <td><?= $rs2["map_name"];?></td>
                    <td><?= $rs2["map_detail"];?></td>
                    <td><a href="edit_map.php?map_id=<?= $rs2['map_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </body>
    </html>



