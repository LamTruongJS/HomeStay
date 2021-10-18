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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <title>Đặt phòng HomeStay</title>
</head>


<body>


    <?php

include "../header/index.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: /homestay/login');
}
?>
    <!-- slider -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../asset/slide_img.png" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
                <img src="../asset/slide_img2.PNG" class="d-block w-100" alt="..." />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end--Slider -->

    <div id="container">


        <div class="content">
            <?php
                $email = $_SESSION['email'];
                include "../config.php";
                $sql = "SELECT * FROM user where email='$email'";
                $result = $conn->query($sql);
                $row = mysqli_fetch_array($result);
                echo "<p class='hello_name'>Xin chào, " . $row['name'] . "&nbsp;&nbsp;<a href='../logout'><i class='ti-share-alt'></i></a></p>";
            ?>

            <h3 class="content__title">Chào mừng đến với TEDs-Stay!</h3>
            <p class="content__desc">
                Đặt chổ ở, tìm phòng phù hợp với bạn, thỏa sức du lịch không lo suy nghĩ.
                <br />
                TEDs-Stay sẽ giúp chuyến du lịch của bạn trở nên thú vị hơn, còn ngại gì mà không lựa
                chọn.
            </p>
        </div>

        <div class="content">
            <h3 class="content__title">Địa Điểm Nổi Bật</h3>
            <p class="content__desc">
                Cùng TEDs-Stay bắt đầu chuyến hành trình chinh phục thế giới của bạn.
            </p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <?php
                        include('../config.php');

                        $sql = "SELECT * FROM thanh_pho";

                        $result = $conn->query("$sql");
                        for ($i = 0; $i < $result->num_rows; $i++) {
                            $row = mysqli_fetch_array($result);
                            $maTP=$row['maTP'];
                            $sql2= "SELECT * FROM home_stay where maTP = '$maTP'";
                            $result2=mysqli_query($conn,$sql2);
                            $soLuong = mysqli_num_rows($result2);
                            echo '<a class="swiper-slide slider__top__pros" href=../city?maTP=' . $row['maTP'] . '>';
                            echo '<div class="swiper__content">';
                            echo '<p class="swiper__content__title">' . $row['tenTP'] . '</p>';
                            echo '<p class="swiper__content__desc">' . $soLuong . ' homestay </p>';
                            echo '</div>';
                            echo '<img class="img__slider__top__pros" src="../' . $row["hinh_anhTP"] . '" />';
                            echo '</a>';
                        }
                        $conn->close();
                        ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="content">
            <h3 class="content__title">Gợi ý từ TEDs-Stay!</h3>
            <p class="content__desc">Những địa điểm TEDs-Stay gợi ý cho bạn</p>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/Bavi.jpg" class="slider__beetwen__pros" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/BaVi_2.jfif" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/BaVi_3.png" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/HoaBinh.jpg" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/LuongSon.jpg" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/PhuYen.jfif" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/SocSon.jpg" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/SocSon_2.jpg" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                    <div class="swiper-slide slider__beetwen__pros">
                        <img src="../asset/Famous/TamDao.jpg" />
                        <div class="slider__beetwen__pros__desc">
                            <p>BAVI Padme Home - Bungalow 2</p>
                            <p>3 khách·1 phòng ngủ·1 phòng tắm</p>
                            <p>800,000₫/đêm</p>
                            <p>Ba Vì, Hà Nội, Vietnam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <h3 class="content__title">Hướng dẫn sử dụng</h3>
            <p class="content__desc">Đặt chỗ nhanh, thanh toán đơn giản, sử dụng dễ dàng</p>
            <div class="content__howto">
                <img src="../asset/howtobook.jpg" alt="" />
                <img src="../asset/payment.jpg" alt="" />
                <img src="../asset/manyQuestion.jpg" alt="" />
            </div>
        </div>

        <div class="content grid wide">
            <div class="row desc">
                <div class="col l-7">
                    <img class="desc_img" src="../asset/print-152700386.jpg" />
                    <h2 class="desc__name">TEDs-Stay</h2>
                    <h2 class="desc__sologan">TÌM KIẾM CHỖ Ở GIÁ TỐT NHẤT</h2>
                    <p class="desc__details">
                        TEDs-Stay hiện là nền tảng đặt phòng trực tuyến #1 Việt Nam. Đồng hành cùng chúng tôi,
                        bạn có những chuyến đi mang đầy trải nghiệm. Với TEDs-Stay, việc đặt chỗ ở, biệt thự
                        nghỉ dưỡng, khách sạn, nhà riêng, chung cư... trở nên nhanh chóng, thuận tiện và dễ
                        dàng.
                    </p>
                    <img class="desc__payment" src="../asset/img_paymentType.PNG" />
                </div>
                <div class="col l-5 desc__img c-11"><img src="../asset/phone_img.PNG" /></div>
            </div>
        </div>
    </div>
    <!-- Blog -->
    <div id="blog">
        <div class="grid">
            <div class="row">
                <div class="col l-2-4 c-12 blog__col__one">
                    <p class="title">Top HomeStay yêu thích</p>
                    <p><a href="">Homestay Đà Lạt </a></p>
                    <p><a href="">Homestay Hà Nội</a></p>
                    <p><a href="">Homestay Hồ Chí Minh</a></p>
                    <p><a href="">Homestay Sapa</a></p>
                    <p><a href="">Homestay Vũng Tàu</a></p>
                    <p><a href="">Homestay Tam Đảo</a></p>
                    <p><a href=""> Homestay Hội An</a></p>
                    <p><a href="">Homestay Hạ Long</a></p>
                    <p><a href="">Homestay Phan Thiết</a></p>
                    <p><a href="">Homestay Đà Nẵng</a></p>
                </div>
                <div class="col l-2-4 c-12 blog__col__two">
                    <p class="title">Căn hộ dịch vụ</p>
                    <p><a href="">Biệt thự</a></p>
                    <p><a href="">Nhà riêng</a></p>
                    <p><a href="">Studio</a></p>
                    <p><a href="">Travel Guide</a></p>
                </div>
                <div class="col l-2-4 c-12 blog__col__three">
                    <p class="title">Về Chúng Tôi</p>
                    <p><a href="">Blog</a></p>
                    <p><a href="">Điều khoản hoạt động</a></p>
                    <p><a href="">1800 3819</a></p>
                    <p><a href="">info@TEDsStay.com</a></p>
                </div>
                <div class="col l-2-4 blog__col__four">
                    <p class="title">Tải ứng dụng TEDs-Stay</p>
                    <img class="blog__img" src="../asset/footer/footer_img.PNG" />
                </div>
                <div class="col l-2-4 blog__col__five">
                    <p class="title">Mạng Xã Hội</p>
                    <a><img src="../asset/footer/facebook.jpg" /></a>
                    <a><img src="../asset/footer/youtube.jpg" /></a>
                    <a><img src="../asset/footer/twitter.jpg" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="../js/srcollTop.js"></script>
</body>

</html>