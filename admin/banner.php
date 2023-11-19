<?php
include("../db.php");
include('sidebar.php');
?>
<?php
$sql2 = "SELECT * FROM banner";
$qry2 = mysqli_query($conn,$sql2);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>หน้าปก</title>
    </head>
    <body>
    <div class="main-content">
    <h3>รายการหน้าปก</h3>
    <div class="cover_">
        <br><br>
        <table class="table" align="center">
            <tr>
                <td>รหัส</td>
                <td width="50%">รูปหน้าปก</td>
                <td>ชื่อ</td>
                <td>แก้ไข</td>
            </tr>
            <?php
            while($rs2=mysqli_fetch_array($qry2)){
                ?>
                <tr>
                    <td><?= $rs2["banner_id"];?></td>
                    <td><img src="../asset/image/<?= $rs2["banner_img"];?>" alt="" width="100%"></td>
                    <td><?= $rs2["banner_name"];?></td>
                    <td><a href="edit_banner.php?banner_id=<?= $rs2['banner_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </body>
    </html>



