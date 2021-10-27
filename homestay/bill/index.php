<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./responsive.css">
    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css" />
    <title>Lịch sử mua hàng</title>
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
                $email = $_SESSION['email'];
                include "../config.php";
                $sql1 = "SELECT * FROM user where email='$email'";
                $result1 = $conn->query($sql1);
                $row1 = mysqli_fetch_array($result1);
                echo "<p class='hello_name'>Xin chào, " . $row1['name'] . "&nbsp;&nbsp;<a href='../logout'><i class='ti-share-alt'></i></a></p>";
            $conn->close();
       ?>
        <?php 
            include "../config.php";
            $email =$_SESSION['email'];

            //truy vấn user
            $sql1=" SELECT * FROM user WHERE email = '$email'";
            $result1 = mysqli_query($conn,$sql1);
            $row1=mysqli_fetch_array($result1);
            $maUser=$row1['ID'];

            //truy vấn hoa đơn
            $sql2="SELECT * FROM hoa_don where maUser ='$maUser' ORDER BY thoiGian DESC ";
            $result2=mysqli_query($conn,$sql2);
           

            

            for($i=0; $i<$result2->num_rows; $i++){

                $row2=mysqli_fetch_array($result2);
                $maHST= $row2['maHST'];
                $maHD=$row2['maHD'];
                //truy vấn homestay
                $sql3="SELECT * FROM home_stay where maHStay='$maHST'";
                $result3=mysqli_query($conn,$sql3);
                $row3=mysqli_fetch_array($result3);
                $tenHStay = substr($row3["tenHStay"], 0, 12);

                echo "<div class='content'>";
                echo "<div class='content__img'>";
                echo " <img src='../".$row3['img_one']."'class='content__img__img'/>";
                echo "</div>";
                echo "<div class='content__desc'>";
                echo "<h4 class='content__desc__name'>$tenHStay</h4>";
                echo "<p>Địa Chỉ: ".$row3['diaChi']."</p>";
                echo "<p>Nội Thất: ".$row3['phuKien']."</p>";
                echo "<p>Ngày đến ở: ".$row2['ngayBatDau']."</p>";
                echo "<p>Ngày rời đi: ".$row2['ngayKetThuc']."</p>";
                echo "<p>Thời gian lập hóa đơn: ".$row2['thoiGian']."</p>";
                echo "<p>Mã Hóa Đơn: ".$row2['maHD']."</p>";
                echo "<p>Tên Khách Hàng: ".$row1['name']."</p>";
                echo "<p>Email: $email</p>";
                echo "</div>";
                echo "<div class='content__QR'>";
                echo "<h5 class='content__desc__price'>".$row2['thanhTien']." VNĐ</h5>";
                echo "<img src='../asset/QR.PNG' class='content__QR__img' />";
                echo "<button class='content__QR__btn'><a href='../removeBill?maHD=$maHD' >Xóa Lịch Sử</a></button>";
                echo" </div></div>";
            }
            $conn ->close();
        ?>

    </div>
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