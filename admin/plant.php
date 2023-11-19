<?php
include("../db.php");
include('sidebar.php');
if (isset($_POST["clear"])) {
    unset($_POST["keyword"]);
}
$keyword = null;
if (isset($_POST["keyword"])) {
    $keyword = $_POST["keyword"];
}


?>
<?php
$results_per_page = 10;

$sql_count = "SELECT COUNT(*) as total FROM plant";
$result_count = mysqli_query($conn, $sql_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_pages = ceil($row_count['total'] / $results_per_page);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($page - 1) * $results_per_page;

$sql2 = "SELECT * FROM plant WHERE (plant_name LIKE '%$keyword%') LIMIT $start_index, $results_per_page";
$qry2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พันธ์ไม้และสัตว์ป่า</title>
</head>

<body>
    <div class="main-content">
        <h3>รายการพันธ์ไม้และสัตว์ป่า</h3>
        <div class="cover_">
            <form action="" method="post">
                <div class="search_box">
                    <span>ค้นหา &nbsp;&nbsp;&nbsp;</span>
                    <input type="text" class="form-control" style="width:30%;" name="keyword">
                    <input type="submit" value="ค้นหา" class="btn btn-success">&nbsp;
                    <input type="submit" value="ล้างคำค้นหา" class="btn btn-danger" name="clear">
                </div>
            </form>
            <div class="" style="float:right;">
                <a href="add_plant.php" class="btn btn-success">เพิ่มพันธ์ไม้และสัตว์ป่า</a>
            </div>
            <br><br>
            <table class="table" align="center">
                <tr>
                    <td>รหัส</td>
                    <td>ชื่อ</td>
                    <td>รายละเอียด</td>
                    <td>แก้ไข</td>
                    <td>ลบ</td>
                </tr>
                <?php
                while ($rs2 = mysqli_fetch_array($qry2)) {
                ?>
                    <tr>
                        <td><?= $rs2["plant_id"]; ?></td>
                        <td><?= $rs2["plant_name"]; ?></td>
                        <td><?= $rs2["plant_detail"]; ?></td>
                        <td><a href="edit_plant.php?plant_id=<?= $rs2['plant_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                        <td><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $rs2['plant_id']; ?>">ลบ</button>
                            <div id="myModal<?= $rs2['plant_id']; ?>" class="modal fade">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content">
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">ต้องการที่จะลบ?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>คุณต้องการที่จะลบข้อมูลนี้หรือไม่ หากลบไปแล้ว <br>ไม่สามารถกู้ข้อมูลกลับคืนมาได้</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <a href="delete_plant.php?plant_id=<?= $rs2['plant_id']; ?>" class="btn btn-danger">ลบ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="pagination">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php if ($page > 1) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $page - 1; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                        ?>

                        <?php if ($page < $total_pages) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $page + 1; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <?php
            $results_per_page = 10;

            $sql_count = "SELECT COUNT(*) as total FROM plantimg";
            $result_count = mysqli_query($conn, $sql_count);
            $row_count = mysqli_fetch_assoc($result_count);
            $total_pages = ceil($row_count['total'] / $results_per_page);

            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start_index = ($page - 1) * $results_per_page;

            $sql3 = "SELECT * FROM plantimg LIMIT $start_index, $results_per_page";
            $qry3 = mysqli_query($conn, $sql3);
            ?>
                <div class="" style="float:right;">
                    <a href="add_plantimg.php" class="btn btn-success">เพิ่มรูป</a>
                </div>
                <br><br>
                <table class="table" align="center">
                    <tr>
                        <td>รหัส</td>
                        <td>รูป</td>
                        <td>แก้ไข</td>
                        <td>ลบ</td>
                    </tr>
                    <?php
                    while ($rs3 = mysqli_fetch_array($qry3)) {
                    ?>
                        <tr>
                            <td><?= $rs3["pi_id"]; ?></td>
                            <td><img src="../asset/image/<?= $rs3["pi_img"]; ?>" alt="" width="50%"></td>
                            <td><a href="edit_plantimg.php?pi_id=<?= $rs3['pi_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $rs3['pi_id']; ?>">ลบ</button>
                            <div id="myModal<?= $rs3['pi_id']; ?>" class="modal fade">
                                <div class="modal-dialog modal-confirm">
                                    <div class="modal-content">
                                        <div class="modal-header flex-column">
                                            <div class="icon-box">
                                                <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                            <h4 class="modal-title w-100">ต้องการที่จะลบ?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>คุณต้องการที่จะลบข้อมูลนี้หรือไม่ หากลบไปแล้ว <br>ไม่สามารถกู้ข้อมูลกลับคืนมาได้</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <a href="delete_plantimg.php?pi_id=<?= $rs3['pi_id']; ?>" class="btn btn-danger">ลบ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <div class="pagination">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php if ($page > 1) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $page - 1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                            }
                            ?>

                            <?php if ($page < $total_pages) : ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?= $page + 1; ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
        </div>
</body>

</html>