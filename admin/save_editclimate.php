    <?php
    include('../db.php');
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $climate_detail = $_POST["climate_detail"];
        $climate_summer = $_POST["climate_summer"];
        $climate_rainy = $_POST["climate_rainy"];
        $climate_winter = $_POST["climate_winter"];
    
        $sql = " UPDATE climate set climate_detail='$climate_detail',climate_summer='$climate_summer',climate_rainy='$climate_rainy',climate_winter='$climate_winter' WHERE climate_id = '" . $_POST["climate_id"] . "' ";
        $qry = mysqli_query($conn, $sql);
    
        if ($qry) {
            echo "<script>";
            echo "alert('แก้ไขเสร็จสิ้น');";
            echo "window.location='climate.php'";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('เกิดข้อผิดพลาด');";
            echo "window.location='climate.php'";
            echo "</script>";
        }
    }
    ?>
    