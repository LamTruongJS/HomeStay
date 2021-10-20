<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />

    <link rel="stylesheet" href="../grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css" />
    <title>Giỏ Hàng</title>
</head>

<body>
    <?php

    include "../header/index.php";

    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: /homestay/login');
    }
    ?>
    <div id="container">
        <?php 
            $email= $_SESSION['email'];
            include '../config.php';
            $sql="SELECT * FROM user u INNER JOIN gio_hang gh on u.ID=gh.maUser 
            INNER JOIN ct_gio_hang ct on gh.maGH=ct.maGH 
            INNER JOIN home_stay ht on ht.maHStay =ct.maHST 
            INNER JOIN thanh_pho tp on ht.maTP = tp.maTP 
            INNER JOIN loai_home_stay lhs on lhs.maLoaiHST = ht.maLoaiHStay 
            WHERE u.email like '$email'";
            $result = mysqli_query($conn,$sql);

            for($i=0;$i<$result->num_rows;$i++){

                $row= mysqli_fetch_array($result);
                $maHStay= $row['maHStay'];
                $soNgayThue= $row['soNgayThue'];
                $donGia = 0;
                $gia=$row['donGia'] * $soNgayThue;
                if (strlen($gia) >= 7) {
                    $donGia = substr($gia, -7, 1) . "," . substr($gia, -6, 3) . "," . substr($gia, -3);
                } else
                    $donGia = substr($gia, -6, 3) . "," . substr($gia, -3);
                $tenHStay = substr($row["tenHStay"], 0, 12);

                echo "<div class='content'>";
                echo " <div class='content__header__cart'>";
               
                echo " <img src='../".$row['img_one']."'class='content__img'>";
                echo " <div class='content__cart__desc__container--top'>";
               
                echo " <img src='../".$row['img_two']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_three']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_four']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_five']."'class='content__cart__desc__img'>"; 
              
                echo "</div>"; 
                echo "</div>";
                
                echo " <div class='content__cart'>";
                echo  "<a href='../homestay?maHStay=$maHStay' class='content__cart__name'>$tenHStay</a>";
                echo "<div class='content__cart__price'>$donGia đ</div>";
                echo " <div class='content__cart__desc'>";
                echo "<p>Địa Chỉ: ".$row['diaChi']."</p>";
                echo "<p>Nội Thất: ".$row['phuKien']."</p>";
                echo "<p>Loại: ".$row['tenLoaiHST']."</p>";
                echo "<p>Thời gian bắt đầu thuê: ".$row['ngayBatDau']."</p>";
                echo "<p>Số Ngày Thuê: ".$soNgayThue." ngày</p>";
                echo "<div class='content__cart__desc__container'>";
                echo " <img src='../".$row['img_one']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_two']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_three']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_four']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_five']."'class='content__cart__desc__img'>";
                echo " <img src='../".$row['img_six']."'class='content__cart__desc__img'>"; 
                echo "<div class='btn__group'>";
                echo "<button class='btn__pay__cart'><a href='../home'>Thanh toán </a></button>";
                echo " <button class='btn__remove__cart'><a href='../removeItemCart?maHST=$maHStay'>Xóa khỏi giỏ hàng</a></button>";
                echo "</div></div>";
                echo "<div class='btn__group__end'>";
                echo " <button class='btn__remove__cart--end'><a href='../home'>Thanh toán</a></button>";
                echo "<button class='btn__remove__cart--end'><a href='../removeItemCart?maHST=$maHStay'>Xóa khỏi giỏ hàng</a></button>";
                echo " </div></div></div></div>";
            }
           $conn->close();
        ?>
  </div>     
    <?php include "../footer/index.php"; ?>
    <!-- ScrollTop -->
    <div id="scrollTop">
        <a href="#"><img class="scrollTop__img" src="../asset/scrollTop.png" /></a>
    </div>
    <!-- End Scroll -->
    <!-- script -->
    <script type="text/javascript" src="../js/srcollTop.js"></script>
    <script type="text/javascript" src="../js/cart.js"></script>
</body>

</html>