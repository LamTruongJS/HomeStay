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
                $email = $_SESSION['email'];
                include "../config.php";
                $sql1 = "SELECT * FROM user where email='$email'";
                $result1 = $conn->query($sql1);
                $row1 = mysqli_fetch_array($result1);
                echo "<p class='hello_name'>Xin chào, " . $row1['name'] . "&nbsp;&nbsp;<a href='../logout'><i class='ti-share-alt'></i></a></p>";
            $conn->close();
       ?>
     
        <?php 
            $tongSP=0;
            $tongTien=0;
            $errDate='';
            $email= $_SESSION['email'];
            $date=getdate();
            $dateArrive= $date['year']."-".$date['mon']."-".$date['mday'];
            $dateLeave= date('Y-m-d', strtotime($dateArrive. ' + 1 days'));
            $datemax= date('Y-m-d', strtotime($dateArrive. ' + 1 month'));
            $maUser=$row1['ID'];

            include '../config.php';
            $sql="SELECT * FROM user u INNER JOIN gio_hang gh on u.ID=gh.maUser 
            INNER JOIN ct_gio_hang ct on gh.maGH=ct.maGH 
            INNER JOIN home_stay ht on ht.maHStay =ct.maHST 
            INNER JOIN thanh_pho tp on ht.maTP = tp.maTP 
            INNER JOIN loai_home_stay lhs on lhs.maLoaiHST = ht.maLoaiHStay 
            WHERE u.email like '$email'";
            
            $result = mysqli_query($conn,$sql);
        
            $tongSP = $result->num_rows;
            for($i=0;$i<$result->num_rows;$i++){
                $row= mysqli_fetch_array($result);
                include "../payment/index.php";
                $maHStay= $row['maHStay'];
                $tongTien += $row['donGia'];    
                $donGia = 0;
              
                if (strlen($row['donGia']) >= 7) {
                    $donGia = substr($row['donGia'], -7, 1) . "," . substr($row['donGia'], -6, 3) . "," . substr($row['donGia'], -3);
                } else
                    $donGia = substr($row['donGia'], -6, 3) . "," . substr($row['donGia'], -3);
                $tenHStay = substr($row["tenHStay"], 0, 12);
                
                echo "<form action='' method='post' class='content'>";
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
                echo  "<a href='../homestay?maHStay=$maHStay' name='tenHStay' class='content__cart__name'>$tenHStay</a>";
                echo "<div class='content__cart__price'>$donGia đ/Đ</div>";
                echo " <div class='content__cart__desc'>";
                echo "<p>Địa Chỉ: ".$row['diaChi']."</p>";
                echo "<p>Nội Thất: ".$row['phuKien']."</p>";
                echo "<p>Loại: ".$row['tenLoaiHST']."</p>";
                echo "<div>";
                echo "<span class='content__cart__calendar__title'>Ngày đến ở:</span>";
                echo "<input type='date' class='content__cart__calendar' name='dateArrive'"."value='$dateArrive'". "min='$dateArrive' max='$datemax'  required />";
                echo "<span class='content__cart__calendar__title'>Ngày rời đi:</span>";
                echo "<input type='date' class='content__cart__calendar' name='dateLeave'"."value='$dateLeave'". "min='$dateArrive' name=''  required />";
                echo "<span style='color:red;'>$errDate</span>";
                echo "</div>";
               
                // echo "<p>Thời gian bắt đầu thuê: ".$row['ngayBatDau']."</p>";
                // echo "<p>Số Ngày Thuê: ".$soNgayThue." ngày</p>";
                echo "<div class='content__cart__desc__container'>";
                echo " <img src='../".$row['img_one']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_two']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_three']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_four']."'class='content__cart__desc__img'>"; 
                echo " <img src='../".$row['img_five']."'class='content__cart__desc__img'>";
                echo " <img src='../".$row['img_six']."'class='content__cart__desc__img'>"; 
                echo "<div class='btn__group'>";
                echo "<button type='submit' class='btn__pay__cart' name='pay'>Đặt ngay</button>";
                echo " <button class='btn__remove__cart'><a href='../removeItemCart?maHST=$maHStay'>Xóa khỏi giỏ hàng</a></button>";
                echo "</div></div>";
                echo "<div class='btn__group__end'>";
                echo "<button type='submit' class='btn__remove__cart--end' name='pay'>Đặt ngay</button>";
                echo "<button class='btn__remove__cart--end'><a href='../removeItemCart?maHST=$maHStay'>Xóa khỏi giỏ hàng</a></button>";
                echo " </div></div></div></form>";
            }
           
           $conn->close();
        ?>

            <!-- Tổng tiền -->
        <div class="pay__all__shortcut">
            <img src="../asset/list.png" class='pay__all_shortcut__img' />
        </div>
        <div class='pay__all'>
            <?php    
            echo "<h5>Thông tin giỏ hàng</h5>";
            echo "<p>Tổng số sản phẩm: $tongSP</p>";
            echo "<p>Tổng giá tiền: $tongTien VNĐ</p>";
            echo "<button class='pay__all__btn'><a href='../bill/index.php' >Lịch Sử Mua hàng >></a></button>";          
            ?>        
        </div>
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