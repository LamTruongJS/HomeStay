<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <title>Document</title>
</head>

<body>
    <?php   
      
        include '../config.php';
        $tenTP=$_POST['tenTP']??'';
        if(isset($_POST['tenTP'])){
            $sql= "SELECT * FROM thanh_pho where tenTP like '%$tenTP%'";
            $result = mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result);
            $maTP=$row['maTP'];
            if($result && $result->num_rows >0){
                header("Location: /homestay/city?maTP=$maTP");
            }
            else{
                header("Location: /homestay/notFound/");
            }
        }      
    ?>
    <!-- Header -->
    <div id="header ">
        <ul class="header__menu">
            <li class="header__item">
                <img class="header__item__img" src="../asset/logo.PNG" />
            </li>

            <li class="header__item">
                
                   <form action='' class='header__item__search' method='POST'>
                    <i class='ti-search'></i>    
                    <input type='text' name='tenTP' placeholder='Tìm kiếm' /> 
                   </form>
                
            </li>
            <li class="header__item">
                <a href="../home/index.php">Trang Chủ</a>
            </li>
            <li class="header__item">
                <a>HomeStay</a>
                <ul class="navbar">
                    <?php
                        include('../config.php');
                        $sql = "SELECT * FROM thanh_pho";
                        $result = $conn->query("$sql");
                        for ($i = 0; $i < $result->num_rows; $i++) {
                            $row = mysqli_fetch_array($result);
                            echo "<li><a href=../city?maTP=" . $row['maTP'] . ">" . $row['tenTP'] . "</a></li>";
                        }
                        $conn->close();
                    ?>
                </ul>
            </li>
            <li class="header__item"><a href="../type_homestay/index.php">Dịch Vụ</a></li>
            <li class="header__item"><a href="../cart/index.php">Giỏ Hàng</a></li>
            <li class="header__item"><a>Bài Tập</a></li>
            <li class="header__item"><a>Cá Nhân</a></li>
        </ul>
    </div>
    <!-- End Header -->
</body>

</html>