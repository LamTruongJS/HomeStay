<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="../grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./responsive.css">

    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title>HomeStay</title>
</head>

<body>
    <!-- Header -->
    <?php
    
    include "../header/index.php";
    $maHomeStay = $_GET['maHStay'];
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /homestay/login');
    }
    $email=$_SESSION['email'];
    ?>
    <?php 
        $CMND=$_POST['CMND']??'';
        $soDienThoai=$_POST['soDienThoai']??'';
        $ngayBatDau=$_POST['ngayBatDau']??'';
        $soNgayThue=$_POST['soNgayThue']??'';
      
        if(isset($_POST['add'])){
            $result=true;
            if(!is_numeric($CMND) || strlen($CMND)<9){
                $errCMND='Số chứng minh nhân dân không hợp lệ !';
                $result=false;
            }
            if(!is_numeric($soDienThoai) || strlen($soDienThoai)<9){
                $errSDT='Số điện thoại không hợp lệ !';
                $result=false;
            }
            if(!is_numeric($soNgayThue) || $soNgayThue <=0 || $soNgayThue!=round($soNgayThue))
            {
                $errSoNgayThue='Số ngày thuê không hợp lệ !';
                $result=false;
            }
            if($result){
                include '../config.php';
                $sql1="SELECT * FROM user where email like '$email'";
                $result1=mysqli_query($conn,$sql1);
                $row1 = mysqli_fetch_array($result1);
                $maUser=$row1['ID'];
                
                $sql2="SELECT * FROM gio_hang where maUser ='$maUser'";
                $result2=mysqli_query($conn,$sql2);
                
                if($result2->num_rows ==0){
                    $sql3="SELECT * FROM gio_hang";
                    $result3=mysqli_query($conn,$sql3);
                    $row3=mysqli_fetch_array($result3);
            
                    $index='GH'.rand(0,9).rand(0,9).rand(0,9);
                    while (strcmp($index, $row3['maGH']) == 0) {
                        $index='GH'.rand(0,9).rand(0,9).rand(0,9);
                    }
                    $sql4="INSERT INTO gio_hang values('$index','$maUser')";
                    $result4=mysqli_query($conn,$sql4);
                    
                    $sql5="INSERT INTO ct_gio_hang values('$index','$maHomeStay','$ngayBatDau','$soNgayThue')";
                    $result5=mysqli_query($conn,$sql5);
                    echo 'a';
                }
                else{
                    $row2=mysqli_fetch_array($result2);
                    $maGH=$row2['maGH'];
                    $sql6="SELECT * FROM ct_gio_hang WHERE maHST='$maHomeStay'";
                    $result6=mysqli_query($conn,$sql6);
                    if($result6->num_rows ==0){
                        $sql7="INSERT INTO ct_gio_hang values('$maGH','$maHomeStay','$ngayBatDau',$soNgayThue)";
                     
                        $result7=mysqli_query($conn,$sql7);
                        header("Location: /homestay/cart/");   
                    }
                    header("Location: /homestay/cart/");
                   
                }
            }


               
        }
    ?>

    <!-- End Header -->
    <div class="container">
        <!-- Slider -->
        <div class="content">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    include('../config.php');

                    $sql = "SELECT * FROM home_stay WHERE maHStay='$maHomeStay'";
                    $result = $conn->query("$sql");
                    $row = mysqli_fetch_array($result);
                    $arrayNumber = array('one', 'two', 'three', 'four', 'five', 'six');
                    for ($i = 0; $i < count($arrayNumber); $i++) {
                        echo '<div class="swiper-slide">';
                        echo '<img src="../' . $row["img_$arrayNumber[$i]"] . '" />';
                        echo '</div>';
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
        <!-- end Slider -->

        <!-- /////// -->
        <div class="content__two grid wide">
            <div class="row">
                <div class="col l-7  content__desc">
                     <?php
                        $email = $_SESSION['email'];
                        include "../config.php";
                        $sql = "SELECT * FROM user where email='$email'";
                        $result = $conn->query($sql);
                        $row = mysqli_fetch_array($result);
                        echo "<p class='hello_name'>Xin chào, " . $row['name'] . "&nbsp;&nbsp;<a href='../logout'><i class='ti-share-alt'></i></a></p>";
                        $conn->close();
                    ?>
                    <div>
                        <?php
                        include('../config.php');

                        $sql = "SELECT * FROM home_stay WHERE maHStay='HST0020'";

                        $result = $conn->query("$sql");

                        $row = mysqli_fetch_array($result);
                        echo '<h2 class="content__desc--title">' . $row["tenHStay"] . '</h2>';
                        echo '<p>' . $row["phuKien"] . '</p>';
                        echo '<p>Địa chỉ: ' . $row["diaChi"] . '</p>';
                        echo '<p class="content__desc--about">Tóm tắt về The Galaxy Home Apartment</p>';
                        echo '<p>' . $row["moTa"] . '</p>';
                        echo '<p class="content__desc--about">Về không gian</p>';
                        echo '<p>' . $row["khongGian"] . '</p>';

                        $conn->close();
                        ?>

                    </div>
                    <div class="content__desc__relate row">

                        <h3 class="content__desc__relate__title">Gợi ý từ TEDs-Stay</h3>
                        <?php
                        include('../config.php');

                        $sql = "SELECT* FROM home_stay WHERE maTP = (SELECT maTP FROM home_stay WHERE MaHStay='$maHomeStay')";
                        $result = $conn->query("$sql");

                        $randomNumber = rand(0, 14);
                        $maxNumber = $randomNumber + 6;
                        for ($i = 0; $i < $result->num_rows; $i++) {
                            $row = mysqli_fetch_array($result);
                            if ($i >= $randomNumber and $i < $maxNumber) {
                                $donGia = 0;
                                if (strlen($row['donGia']) >= 7) {
                                    $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                                } else
                                    $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                                $phuKien = substr($row["phuKien"], 0, 31);
                                $tenHStay = substr($row["tenHStay"], 0, 12);

                                echo '<a style="text-decoration:none" class="content__desc__relate__homestay col l-4 c-6" href=../homestay/?maHStay=' . $row['maHStay'] . '>';
                                echo '<div class="content__desc__relate__homestay--imgBig">';
                                echo '<img class="content__desc__relate__homestay--img" src="../' . $row["img_one"] . '" />';
                                echo '</div>';
                                echo '<p class="content__desc__relate__homestay--name">' . $tenHStay . '</p>';
                                echo '<p class="content__desc__relate__homestay--item">' . $phuKien . '</p>';
                                echo '<p class="content__desc__relate__homestay--price">' . $donGia . "₫ /đêm" . '</p>';
                                echo '<p class="content__desc__relate__homestay--location">' . $row['diaChi'] . '</p>';
                                echo '</a>';
                            }
                        }
                        $conn->close();
                        ?>


                    </div>
                </div>
                <div class="col l-4">
                    <form action='' method='post' class="content__payment">
                        <?php
                        include('../config.php');
                        $date=getdate();
                        $dateInput= $date['year']."-".$date['mon']."-".$date['mday'];
                        $sql = "SELECT * FROM home_stay WHERE maHStay='$maHomeStay'";
                        $result = $conn->query("$sql");
                        $row = mysqli_fetch_array($result);
                        $donGia = 0;
                        if (strlen($row['donGia']) >= 7) {
                            $donGia = substr($row["donGia"], -7, 1) . "," . substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        } else
                            $donGia = substr($row["donGia"], -6, 3) . "," . substr($row["donGia"], -3);
                        echo '<div class="content__payment--price">';
                        echo $donGia . "₫ /đêm";
                        echo '</div>';
                        $conn->close();
                        ?>
                        <input type="text" name='CMND' class="content__payment--input" placeholder="Nhập CCCD hoặc CMND" required 
                                value='<?php if(isset($_POST['CMND'])) echo $_POST['CMND']; else echo '' ?>'/>
                        <?php if(isset($errCMND)) echo "<p style='color:red; margin-left:20px; margin-top:10px'>$errCMND</p>"; else echo ''; ?>
                        
                        <input type="text" name='soDienThoai' class="content__payment--input" placeholder="Nhập số điện thoại" required 
                                value='<?php if(isset($_POST['soDienThoai'])) echo $_POST['soDienThoai']; else echo '' ?>'/>
                        <?php if(isset($errSDT)) echo "<p style='color:red; margin-left:20px; margin-top:10px'>$errSDT</p>"; else echo ''; ?>
                        
                        <input type="date" name='ngayBatDau' min='<?php echo $dateInput; ?>' class="content__payment--input" placeholder="Nhập ngày bắt đầu thuê" 
                                min="2021-10-06" 
                                value='<?php if(isset($_POST['ngayBatDau'])) echo $_POST['ngayBatDau']; else echo $dateInput?>'
                                required />
                        
                        <input type="text" name='soNgayThue' class="content__payment--input" placeholder="Nhập số ngày muốn thuê" required 
                                value='<?php if(isset($_POST['soNgayThue'])) echo $_POST['soNgayThue']; else echo '' ?>'/>
                        <?php if(isset($errSoNgayThue)) echo "<p style='color:red; margin-left:20px; margin-top:10px'>$errSoNgayThue</p>"; else echo ''; ?>
                        
                        <input class="option_type_payment" type="text" placeholder="Chọn hình thức thanh toán" readonly />
                        <div class="payment__type">
                            <img class="payment__type__img" src="../asset/payment_type/Argi.PNG" alt="Ngân hàng AgriBank">
                            <img class="payment__type__img" src="../asset/payment_type/BIDV.PNG" alt="Ngân hàng BIDV">
                            <img class="payment__type__img" src="../asset/payment_type/DongA.PNG" alt="Ngân hàng Đông Á">
                            <img class="payment__type__img" src="../asset/payment_type/HBBank.PNG" alt="Ngân hàng HDBank">
                            <img class="payment__type__img" src="../asset/payment_type/NamA.PNG" alt="Ngân hàng Nam Á">
                            <img class="payment__type__img" src="../asset/payment_type/sacombank.PNG" alt="Ngân hàng Sacombank">
                            <img class="payment__type__img" src="../asset/payment_type/OCB.PNG" alt="Ngân hàng OCB">
                            <img class="payment__type__img" src="../asset/payment_type/TechCom.PNG" alt="Ngân hàng TechcomBank">
                            <img class="payment__type__img" src="../asset/payment_type/Viettel.PNG" alt="Ngân hàng VietcomBank">
                            <img class="payment__type__img" src="../asset/payment_type/VietTin.PNG" alt="Ngân hàng VietTin">
                            <img class="payment__type__img" src="../asset/payment_type/TPBank.PNG" alt="Ngân hàng TPBank">
                        </div>
                        <input type="submit" name='add' class="content__payment--btn" value="Thêm vào giỏ hàng"></input>
                    </form>
                    <form class="content__question">
                        <div class="content__question--title">Tư vấn từ TEDs-Stay</div>
                        <p class="content__question--desc">Vui lòng cung cấp số điện thoại để nhận được tư vấn từ
                            TEDs-Stay cho chuyến đi của bạn.</p>
                        <input type="text" class="content__question--input" placeholder="Nhập tên của bạn" required />
                        <input type="text" class="content__question--input" placeholder="Nhập số điện thoại" required />

                        <input type="submit" class="content__question--btn" value="Nhận tư vấn"></input>
                    </form>
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
    <!-- script -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../js/slider_homestay.js"></script>
    <script type="text/javascript" src="../js/srcollTop.js"></script>
    <script type="text/javascript" src="../js/payment.js"></script>
</body>

</html>