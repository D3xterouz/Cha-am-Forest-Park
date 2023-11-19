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

$sql_count = "SELECT COUNT(*) as total FROM climate";
$result_count = mysqli_query($conn, $sql_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_pages = ceil($row_count['total'] / $results_per_page);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($page - 1) * $results_per_page;

$sql2 = "SELECT * FROM climate LIMIT $start_index, $results_per_page";
$qry2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลักษณะภูมิอากาศ</title>
</head>

<body>
    <div class="main-content">
        <h3>รายการลักษณะภูมิอากาศ</h3>
        <div class="cover_">
            <br><br>
            <table class="table" align="center">
                <tr>
                    <td>รหัส</td>
                    <td>รายละเอียด</td>
                    <td>หน้าร้อน</td>
                    <td>หน้าฝน</td>
                    <td>หน้าหนาว</td>
                    <td>แก้ไข</td>
                </tr>
                <?php
                while ($rs2 = mysqli_fetch_array($qry2)) {
                ?>
                    <tr>
                        <td><?= $rs2["climate_id"]; ?></td>
                        <td><?= $rs2["climate_detail"]; ?></td>
                        <td><?= $rs2["climate_summer"]; ?></td>
                        <td><?= $rs2["climate_rainy"]; ?></td>
                        <td><?= $rs2["climate_winter"]; ?></td>
                        <td><a href="edit_climate.php?climate_id=<?= $rs2['climate_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
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

            $sql_count = "SELECT COUNT(*) as total FROM terrainimg";
            $result_count = mysqli_query($conn, $sql_count);
            $row_count = mysqli_fetch_assoc($result_count);
            $total_pages = ceil($row_count['total'] / $results_per_page);

            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start_index = ($page - 1) * $results_per_page;

            $sql3 = "SELECT * FROM climateimg LIMIT $start_index, $results_per_page";
            $qry3 = mysqli_query($conn, $sql3);
            ?>
                <br><br>
                <table class="table" align="center">
                    <tr>
                        <td>รหัส</td>
                        <td>รูป</td>
                        <td width="50%">แก้ไข</td>
                    </tr>
                    <?php
                    while ($rs3 = mysqli_fetch_array($qry3)) {
                    ?>
                        <tr>
                            <td><?= $rs3["ci_id"]; ?></td>
                            <td><img src="../asset/image/<?= $rs3["ci_img"]; ?>" alt="" width="100%"></td>
                            <td><a href="edit_climateimg.php?ci_id=<?= $rs3['ci_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
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