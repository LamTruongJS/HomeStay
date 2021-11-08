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
    <title>Cá Nhân</title>
</head>

</head>

<body>
    <?php

        include "../header/index.php";
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: /homestay/login');
        }
    ?>
    <div id='container'> 
        <?php
                $email = $_SESSION['email'];
                include "../config.php";
                $sql1 = "SELECT * FROM user where email='$email'";
                $result1 = $conn->query($sql1);
                $row1 = mysqli_fetch_array($result1);
                echo "<p class='hello_name'>Xin chào, " . $row1['name'] . "&nbsp;&nbsp;<a href='../logout'><i class='ti-share-alt'></i></a></p>";
            $conn->close();
       ?>
          <div class='content'>
           <div class='content__first'>
                <img src='../asset/avatar.jpg' class='content__first__img' alt=''>
                <div class='content__first__name'>
                    <h1>Lê Lâm Trường</h1>
                    <span>Lớp 60.CNTT-2</span>
                    <p>Email: truongle.281000@gmail.com</p>
                </div>
            </div>
            <div class='content__second'>
                <h2 class='content__second__title'>
                    <img src='../asset/contact-book.png' class='content__second__title__img' />
                    Thông tin liên lạc
                </h2>
                <div class='content__second__content'>
                    <p>Email: truongle.281000@gmail.com</p>
                    <p>Phone: 0905-172-802</p>
                </div>
            </div>
            <div class='content__third'>
                <h2 class='content__third__title'>
                    <img src='../asset/mortarboard.png' class='content__third__title__img' />
                    Trình độ học vấn
                </h2>
                <div class='content__third__content'>
                    <p>2018- Tốt nghiệp trung học phổ thông</p>
                    <p>2021- Đang là sinh viên năm 4 Đại học Nha Trang</p>
                    <p>2022- Dự kiến tốt nghiệp đại học</p>
                </div>
            </div>

            <div class='content__four'>
                <h2 class='content__four__title'>
                    <img src='../asset/logical-thinking.png' class='content__four__title__img' />
                    Kỹ năng
                </h2>
                <div class='content__four__content'>
                    <p>JavaScript</p>
                    <p>ReactJS</p>
                    <p>Php Basic</p>
                </div>
            </div>
            <div class='content__five'>
                <h2 class='content__five__title'>
                    <img src='../asset/dashboard.png' class='content__five__title__img' />
                    Tóm tắt
                </h2>
                <div class='content__five__content'>
                    <p>Tên: Lê Lâm Trường</p>
                    <p>Sinh ngày: 28-10-2000</p>
                    <p>Tuổi: 21</p>
                    <p>Địa chỉ: 173,Quốc Lộ 1A, Vĩnh Lương, Nha Trang, Khánh Hòa</p>
                    <p>Ngôn ngữ lập trình ưu thích: JavaScript và ReactJS</p>
                    
                </div>
            </div>
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
</body>

</html>