<?php
include("../db.php");
include('sidebar.php');
?>
<?php
$sql2 = "SELECT * FROM youthcamp";
$qry2 = mysqli_query($conn,$sql2);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ค่ายเยาวชน</title>
    </head>
    <body>
    <div class="main-content">
    <h3>รายการค่ายเยาวชน</h3>
    <div class="cover_">
        <br><br>
        <table class="table" align="center">
            <tr>
                <td>รหัส</td>
                <td>รูปหน้าแรก</td>
                <td>รายละเอียด</td>
                <td>แก้ไข</td>
            </tr>
            <?php
            while($rs2=mysqli_fetch_array($qry2)){
                ?>
                <tr>
                    <td><?= $rs2["yc_id"];?></td>
                    <td><img src="../asset/image/<?= $rs2["yc_img"];?>" alt="" width="100%"></td>
                    <td><?= $rs2["yc_description"];?></td>
                    <td><a href="edit_youthcamp.php?yc_id=<?= $rs2['yc_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </body>
    </html>



