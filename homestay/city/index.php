<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="../grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css" />
    <title>Thành Phố</title>
</head>

<body>
    <!-- header -->
    <?php

    include "../header/index.php";
    $maThanhPho = $_GET['maTP'];
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /homestay/login');
    }
    ?>

    <!-- end--Header -->

    <!-- Container -->

    <div id="container">
        <!-- Conttent_button -->
        <div class="content">
            <div class="content__button">
                <button>Hủy phòng linh hoạt</button>
                <button>Đặt phòng nhanh</button>
                <button>Giá ưu đãi</button>
                <button>Khu vực</button>
                <button>Loại phòng</button>
                <button>Giá chỗ ở</button>
                <button>Thêm bộ lọc</button>
            </div>
        </div>
        <!-- End content_button -->
        <!-- content__two -->
        <div class="content">
            <div class="content__two">
                <p>
                    <b>Trước khi đặt phòng, hãy kiểm tra những địa điểm bị hạn chế du lịch trong thời gian
                        này.</b>
                    Sức khỏe và sự an toàn của cộng đồng luôn được đặt hàng đầu. Vì vậy, vui lòng làm theo
                    chỉ thị của chính phủ bởi điều đó thực sự cần thiết.
                </p>
            </div>
        </div>
        <!-- End content__two -->

        <!-- content__final -->
        <div class="content content_final">
            <div class="content__final__top">
                <div class="content__title">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay ht,thanh_pho tp where ht.maTP like '$maThanhPho' and ht.maTP =tp.maTP";
                    $result = $conn->query("$sql");
                    $soLuong = mysqli_num_rows($result);
                    $row = mysqli_fetch_array($result);
                    echo "<h3>$soLuong homestay tại " . $row["tenTP"] . "</h3>";

                    $conn->close();
                    ?>

                </div>
                <div class="content__final__sort">
                    <p class="content__final__sort--title">
                        Sắp xếp:&nbsp; &nbsp; &nbsp;&nbsp;Lựa chọn
                        <i class="ti-angle-down content__final__sort--icon"></i>
                    </p>
                    <div class="content__final__sort--toggle">
                        <p>Giá tăng dần</p>
                        <p>Giá giảm dần</p>
                    </div>
                </div>
            </div>

            <!-- Hiển thị danh sách homestay -->
            <div class="content__homestay grid">
                <div class="row">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay where maTP ='$maThanhPho' ";

                    $result = $conn->query("$sql");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $row = mysqli_fetch_array($result);
                        $phuKien = substr($row['phuKien'], 0, 48);
                        $name = substr($row['tenHStay'], 0, 25);
                        $donGia = 0;
                        if (strlen($row['donGia']) >= 7) {
                            $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        } else
                            $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        echo '<a style="text-decoration:none" class="col l-2-4 c-6" href=../homestay?maHStay=' . $row['maHStay'] . '>';
                        echo '<img class="content__homestay__img" src="../' . $row["img_one"] . '" />';
                        echo '<p class="homestay__item">' . $phuKien . "</p>";
                        echo '<img src="../asset/favicon.png" class="content_favicon" />';
                        echo '<p class="homestay__name">' . $name . '</p>';
                        echo ' <p class="homestay__price">' . $donGia . 'đ/đêm</p>';
                        echo '</a>';
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include "../footer/index.php";
    ?>

    <!-- End Footer -->

    <!-- ScrollTop -->
    <div id="scrollTop">
        <a href="#"><img class="scrollTop__img" src="../asset/scrollTop.png" /></a>
    </div>
    <!-- End Scroll -->

    <script type="text/javascript" src="../js/srcollTop.js"></script>
</body>

</html>