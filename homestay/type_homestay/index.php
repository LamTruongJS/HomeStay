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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Căn Hộ</title>
</head>

<body>
    <!-- header -->
    <?php

    include "../header/index.php";


    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /homestay/login');
    }
    ?>
    <!-- end--Header -->
    <div id="container">
        <!-- Căn Hộ -->
        <div class="content">

            <h3 class="content__title">Biệt Thự</h3>
            <p class="content__desc">Những địa điểm TEDs-Stay gợi ý cho bạn</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay where maLoaiHStay='LHST001'";

                    $result = $conn->query("$sql");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $row = mysqli_fetch_array($result);
                        $donGia = 0;
                        if (strlen($row['donGia']) >= 7) {
                            $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        } else
                            $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        $phuKien = substr($row["phuKien"], 0, 67);
                        $tenHStay = substr($row["tenHStay"], 0, 12);
                        echo '<a style="text-decoration:none" class="swiper-slide slider__beetwen__pros" href=../homestay?maHStay=' . $row['maHStay'] . '>';
                        echo '<img class="slider__beetwen__pros" src="../' . $row["img_one"] . '" />';
                        echo '<div class="slider__beetwen__pros__desc">';
                        echo "<p>$tenHStay</p>";
                        echo "<p>$phuKien</p>";
                        echo "<p>$donGia ₫ /đêm</p>";
                        echo "<p>" . $row['diaChi'] . "</p>";
                        echo "</div> </a>";
                    }
                    $conn->close();
                    ?>

                </div>
            </div>
        </div>
        <!-- End Căn Hộ -->
        <!-- Biệt Thự-->
        <div class="content">
            <h3 class="content__title">Nhà Riêng !</h3>
            <p class="content__desc">Những địa điểm TEDs-Stay gợi ý cho bạn</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay where maLoaiHStay='LHST002'";

                    $result = $conn->query("$sql");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $row = mysqli_fetch_array($result);
                        $donGia = 0;
                        if (strlen($row['donGia']) >= 7) {
                            $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        } else
                            $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        $phuKien = substr($row["phuKien"], 0, 67);
                        $tenHStay = substr($row["tenHStay"], 0, 12);
                        echo '<a style="text-decoration:none" class="swiper-slide slider__beetwen__pros" href=../homestay?maHStay=' . $row['maHStay'] . '>';
                        echo '<img class="slider__beetwen__pros" src="../' . $row["img_one"] . '" />';
                        echo '<div class="slider__beetwen__pros__desc">';
                        echo "<p>$tenHStay</p>";
                        echo "<p>$phuKien</p>";
                        echo "<p>$donGia ₫ /đêm</p>";
                        echo "<p>" . $row['diaChi'] . "</p>";
                        echo "</div> </a>";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <!-- End Biệt thự -->
        <!-- Nhà Riêng -->
        <div class="content">
            <h3 class="content__title">Căn Hộ !</h3>
            <p class="content__desc">Những địa điểm TEDs-Stay gợi ý cho bạn</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay where maLoaiHStay='LHST003'";

                    $result = $conn->query("$sql");
                    for ($i = 0; $i < $result->num_rows; $i++) {
                        $row = mysqli_fetch_array($result);
                        $donGia = 0;
                        if (strlen($row['donGia']) >= 7) {
                            $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        } else
                            $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        $phuKien = substr($row["phuKien"], 0, 67);
                        $tenHStay = substr($row["tenHStay"], 0, 12);
                        echo '<a style="text-decoration:none" class="swiper-slide slider__beetwen__pros" href=../homestay?maHStay=' . $row['maHStay'] . '>';
                        echo '<img class="slider__beetwen__pros" src="../' . $row["img_one"] . '" />';
                        echo '<div class="slider__beetwen__pros__desc">';
                        echo "<p>$tenHStay</p>";
                        echo "<p>$phuKien</p>";
                        echo "<p>$donGia ₫ /đêm</p>";
                        echo "<p>" . $row['diaChi'] . "</p>";
                        echo "</div> </a>";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <!-- End Nhà Riêng -->
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
    <!-- script -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../js/sliderType_homeStay.js"></script>
    <script type="text/javascript" src="../js/srcollTop.js"></script>
</body>

</html>