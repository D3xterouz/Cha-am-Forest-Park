<?php
include("../db.php");
include('sidebar.php');

$sql2 = "SELECT * FROM logo";
$qry2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โลโก้เว็บ</title>
</head>

<body>
    <div class="main-content">
        <h3>โลโก้เว็บ</h3>
        <div class="cover_" style="background-color:#212529; color:white;">
            <br><br>
            <table class="table table-dark" align="center" style="width:30%; float:left;">
                <tr>
                    <td width="10%">รหัส</td>
                    <td width="50%">รูป</td>
                    <td>แก้ไข</td>
                </tr>
                <?php
                while ($rs2 = mysqli_fetch_array($qry2)) {
                ?>
                    <tr>
                        <td><?= $rs2["logo_id"]; ?></td>
                        <td><img src="../asset/image/<?= $rs2["logo_img"]; ?>" alt="" width="100%"></td>
                        <td><a href="edit_logo.php?logo_id=<?= $rs2['logo_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="clear_"></div>
        </div>
        <h3>ข้อมูลการติดต่อ</h3>
        <?php
        $sql3="SELECT * FROM contact";
        $qry3=mysqli_query($conn,$sql3);
        ?>
        <div class="cover_">
            <br><br>
            <table class="table" align="center">
                <tr>
                    <td>รหัส</td>
                    <td width="30%">รูป</td>
                    <td>ที่อยู่</td>
                    <td>อีเมล</td>
                    <td>โทรศัพท์</td>
                    <td>แก้ไข</td>
                </tr>
                <?php
                while ($rs3 = mysqli_fetch_array($qry3)) {
                ?>
                    <tr>
                        <td><?= $rs3["contact_id"]; ?></td>
                        <td><img src="../asset/image/<?= $rs3["contact_img"]; ?>" alt="" width="100%"></td>
                        <td><?= $rs3["contact_address"]; ?></td>
                        <td><?= $rs3["contact_email"]; ?></td>
                        <td><?= $rs3["contact_phone"]; ?></td>
                        <td><a href="edit_contact.php?contact_id=<?= $rs3['contact_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>