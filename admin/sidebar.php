<?php
include('style.php');
$sql = "SELECT * FROM member where user_id='" . $_SESSION["user_id"] . "'";
$qry = mysqli_query($conn, $sql);
$rs = mysqli_fetch_array($qry);
$sql2 = "SELECT * FROM logo";
$qry2 = mysqli_query($conn, $sql2);
$rs2 = mysqli_fetch_array($qry2);
if ($_SESSION["user_id"]) {
} else {
    echo "<script>";
    echo "alert('ไม่ได้รับอนุญาติให้เข้าถึงเนื้อหาส่วนนี้');";
    echo "window.location='../index.php'";
    echo "</script>";
}

?>
<div class="sidebar_">
    <ul><a href="../index.php">
            <div class="HomeButton_"><img src="../asset/image/<?= $rs2["logo_img"]; ?>" alt="" width="100%"></div>
        </a>
        <li>
            <a href="index.php">
                <div class="menu_">หน้าหลัก</div>
            </a>
        </li>
        <li>
            <a href="member.php">
                <div class="menu_">ผู้ดูแล</div>
            </a>
        </li>
        <li>
            <a href="news.php">
                <div class="menu_">ข่าวสาร</div>
            </a>
        </li>
        <li class="dropdown" id="facilitiesDropdown">
            <a href="facilities.php">
                <div class="menu_" onclick="toggleDropdown('facilities')">สิ่งอำนวยความสะดวก</div>
            </a>
            <ul class="dropdown-content" id="facilitiesDropdownContent">
                <li><a href="camping.php">
                        <div class="menu_">การตั้งแคมป์</div>
                    </a></li>
                <li><a href="meeting_rooms.php">
                        <div class="menu_">ห้องประชุม และสัมมนา</div>
                    </a></li>
            </ul>
        </li>
        <li class="dropdown" id="youthcampDropdown">
            <a href="youthcamp.php">
                <div class="menu_" onclick="toggleDropdown('youthcamp')">ค่ายเยาวชน</div>
            </a>
            <ul class="dropdown-content" id="youthcampDropdownContent">
                <li><a href="yc_restroom.php">
                        <div class="menu_">รูปที่พัก</div>
                    </a></li>
            </ul>
        </li>
        <li class="dropdown" id="aboutDropdown">
            <a href="about.php">
                <div class="menu_" onclick="toggleDropdown('about')">เกี่ยวกับ</div>
            </a>
            <ul class="dropdown-content" id="aboutDropdownContent">
                <li><a href="terrain.php">
                        <div class="menu_">ลักษณะภูมิประเทศ</div>
                    </a></li>
                <li><a href="climate.php">
                        <div class="menu_">ลักษณะภูมิอากาศ</div>
                    </a></li>
                <li><a href="plant.php">
                        <div class="menu_">พันธ์ไม้และสัตว์ป่า</div>
                    </a></li>
            </ul>
        </li>
        <li class="dropdown" id="otherDropdown">
            <a href="other.php">
                <div class="menu_" onclick="toggleDropdown('other')">อื่นๆ</div>
            </a>
            <ul class="dropdown-content" id="otherDropdownContent">
                <li><a href="banner.php">
                        <div class="menu_">รูปปก</div>
                    </a></li>
            </ul>
        </li>
        <li>
            <a href="video.php">
                <div class="menu_">วิดีโอแนะนำ</div>
            </a>
        </li>
        <li>
            <a href="map.php">
                <div class="menu_">แผนที่</div>
            </a>
        </li>
    </ul>
</div>

<div class="navbar_">
    <div class="login_status"><a href="logout.php">ออกจากระบบ</a></div>
    <div class="login_status">ยินดีต้อนรับคุณ <?php echo $rs["user_FirstName"]; ?></div>
</div>
<script type="text/javascript">
    const currentLocation = location.href.split('?')[0];
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length;

    function setActiveMenu() {
        for (let i = 0; i < menuLength; i++) {
            const menuHref = menuItem[i].href;
            if (menuHref === currentLocation || menuHref.replace('?', '') === currentLocation) {
                menuItem[i].classList.add("active");
                const dropdownParent = menuItem[i].closest('.dropdown');
                if (dropdownParent) {
                    const dropdownContent = dropdownParent.querySelector('.dropdown-content');
                    dropdownContent.style.display = 'block';
                }
            }
        }
    }

    function toggleDropdown(dropdownId) {
        const dropdownContent = document.getElementById(`${dropdownId}DropdownContent`);
        dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    }

    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(function(dropdown) {
            if (event.target.closest(`#${dropdown.id}`) === dropdown) {
                return;
            }

            const dropdownContent = dropdown.querySelector('.dropdown-content');
            if (dropdownContent.style.display === 'block') {
                event.stopPropagation();
            }
        });
    });

    window.onload = setActiveMenu;
</script>