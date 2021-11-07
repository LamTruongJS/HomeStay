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
     <!-- fixed item -->
     <div class='fixed__item'>
          <img src='../asset/plus-sign.png' class='fixed__plus'>
      </div>
      <div class='fixed__item__profile'>
      <a href='../profile/index.php'>
        <img src='../asset/user.png' class='fixed__cart__img' />
      </div>
      <div class='fixed__item__cart'>
          <a href='../cart/index.php'>
       
        <img src='../asset/shopping-cart.png' class='fixed__cart__img' />
        </a>
      </div>
      <div class='fixed__item__search'>
        <img src='../asset/searching.png' class='fixed__search__img' />
      </div>
      <form class='fixed__item__inputSearch' action='' method='post'>
        <input type="text" name='tenTP' placeholder="Tìm kiếm" class='fixed__inputSearch__item'/>
        <input type="submit" class='fixed__inputSearch__btn'value='Tìm Kiếm'/>
      </form>
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
            <li class="header__item"><a href='../Ex/'>Bài Tập</a></li>
            <li class="header__item"><a href='../profile/index.php'>Cá Nhân</a></li>
        </ul>
    </div>
    <!-- End Header -->
</body>

</html>