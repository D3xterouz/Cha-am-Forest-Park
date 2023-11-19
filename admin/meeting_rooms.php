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

$sql_count = "SELECT COUNT(*) as total FROM meetingrooms";
$result_count = mysqli_query($conn, $sql_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_pages = ceil($row_count['total'] / $results_per_page);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($page - 1) * $results_per_page;

$sql2 = "SELECT * FROM meetingrooms LIMIT $start_index, $results_per_page";
$qry2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ห้องประชุม และสัมมนา</title>
</head>

<body>
    <div class="main-content">
        <h3>ห้องประชุม และสัมมนา</h3>
        <div class="cover_">
            <div class="" style="float:right;">
                <a href="add_meeting.php" class="btn btn-success">เพิ่มข้อมูลห้องประชุม</a>
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
                        <td><?= $rs2["mr_id"]; ?></td>
                        <td><?= $rs2["mr_name"]; ?></td>
                        <td><?= $rs2["mr_detail"]; ?></td>
                        <td><a href="edit_meeting.php?mr_id=<?= $rs2['mr_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                        <td><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $rs2['mr_id']; ?>">ลบ</button>
                            <div id="myModal<?= $rs2['mr_id']; ?>" class="modal fade">
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
                                            <a href="delete_meeting.php?mr_id=<?= $rs2['mr_id']; ?>" class="btn btn-danger">ลบ</a>
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

            $sql_count = "SELECT COUNT(*) as total FROM meetingimg";
            $result_count = mysqli_query($conn, $sql_count);
            $row_count = mysqli_fetch_assoc($result_count);
            $total_pages = ceil($row_count['total'] / $results_per_page);

            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start_index = ($page - 1) * $results_per_page;

            $sql3 = "SELECT * FROM meetingimg LIMIT $start_index, $results_per_page";
            $qry3 = mysqli_query($conn, $sql3);
            ?>
            <div class="" style="float:right;">
                <a href="add_meetingimg.php" class="btn btn-success">เพิ่มรูป</a>
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
                        <td><?= $rs3["m_id"]; ?></td>
                        <td><img src="../asset/image/<?= $rs3["m_img"]; ?>" alt="" width="50%"></td>
                        <td><a href="edit_meetingimg.php?m_id=<?= $rs3['m_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                        <td><button class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $rs3['m_id']; ?>">ลบ</button>
                            <div id="myModal<?= $rs3['m_id']; ?>" class="modal fade">
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
                                            <a href="delete_meetingimg.php?m_id=<?= $rs3['m_id']; ?>" class="btn btn-danger">ลบ</a>
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