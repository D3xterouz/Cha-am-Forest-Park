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
    <h3>รูปห้องพัก</h3>
    <div class="cover_">
        <br><br>
        <table class="table" align="center">
            <tr>
                <td width="50%">รูปห้องพัก</td>
                <td width="40%">รายละเอียด</td>
                <td width="10%">แก้ไข</td>
            </tr>
            <?php
            while($rs2=mysqli_fetch_array($qry2)){
                ?>
                <tr>
                    <td><img src="../asset/image/<?= $rs2["yc_restroom"];?>" alt="" width="100%"></td>
                    <td><?= $rs2["yc_detail2"];?></td>
                    <td><a href="edit_restroom.php?yc_id=<?= $rs2['yc_id'];?>" class="btn btn-warning">แก้ไข</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
    </body>
    </html>



