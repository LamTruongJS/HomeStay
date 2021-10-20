<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../../asset/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../Css/home.css">
    <link rel="stylesheet" href="../Css/admin.css">
    <title>Chỉnh sửa thông tin</title>
</head>
<body>
   <!-- header-->
   <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: ../../login');
    }
  ?>
   <?php 
    $maTP=$_GET['maTP']??$maTP;
    $id=$maTP;
    $errImg='';
    $errName='';
    include '../../config.php';
    $sql1="SELECT * FROM thanh_pho where maTP ='$maTP'";
    $result1= mysqli_query($conn,$sql1);
    $row1= mysqli_fetch_array($result1);
    $GETcityName = $row1['tenTP'];
    $POSTcityName =$_POST['cityName']??"";
    if(isset($_POST['edit'])){
    $flat = false;
      //lấy ra danh sách thành phố khác thành phó hiện tại
    $sql2="SELECT tenTP FROM thanh_pho where tenTP <> '$GETcityName'"; 
     
    $result2 =mysqli_query($conn,$sql2);

    //lặp qua danh sách để đảm bảo ko bị trùng thành phố
    for($i=0;$i<$result2->num_rows;$i++){
      $row2=mysqli_fetch_array($result2);
     
      if($POSTcityName==$row2['tenTP']){
        $errName='Thành phố đã tồn tại';
        $flat=true;
      }
    }
    
    if($flat==false){
       //  thực hiện lấy ảnh
      if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
          if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
              
              // Nếu là ảnh tiến hành code upload
              $path = "../../images/"; // Ảnh sẽ lưu vào thư mục images
              $path2="images/"; // path để hiện trong csdl
              $tmp_name = $_FILES['uploadFile']['tmp_name'];
              $name = $_FILES['uploadFile']['name'];
              // Upload ảnh vào thư mục images
              move_uploaded_file($tmp_name, $path . $name);
              $hinh_anh = $path2 . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                        // Insert ảnh vào cơ sở dữ liệu
              $sql = "UPDATE thanh_pho tp SET tp.tenTP='$POSTcityName', tp.hinh_anhTP='$hinh_anh' WHERE tp.maTP='$maTP'";
              echo $sql;
              $result = mysqli_query($conn, $sql);
              if($result){
                header('Location: /homestay/Admin/ad_city/');
               
              }
          } else {
              // Không phải file ảnh
              $errImg ="Kiểu file không phải là ảnh";
          }
        } else {
          $errImg= "Bạn chưa chọn ảnh upload";
        }
    }
 
  } 
   ?>
    <?php
    include '../header/index.php';
     ?>
        <form class=" col-md-8 border border-1 p-3" action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" class="form-control" value="<?php echo $maTP ?>" id="exampleFormControlInput1" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Tên Thành Phố</label>
                <input type="text" class="form-control" name="cityName" value="<?php if(isset($_POST['cityName'])) echo $_POST['cityName']; else echo $GETcityName?>" id="exampleFormControlInput2" required>
              </div>
              <?php if(isset($errName)) echo "<p class='text-danger'>$errName</p>"; else echo ''?>
              <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Hình Ảnh</label>
                <input type="file" class="form-control" name="uploadFile" value="<?php echo $_FILES['uploadFile']['name'] ?>" id="exampleFormControlInput3" required>
              </div>
              <?php if(isset($errImg)) echo "<p class='text-danger'>$errImg</p>"; else echo ''?>
              
              <input type="submit" class="btn btn-outline-success" name="edit" value="Hoàn tác"/>
        </form>
      <div class="clock">  
        <div class="today text-center text-muted"></div>
        <div class="time text-center">       
          <div><span class="hour">00</span><span>Hours</span></div>
          <div><span class="minute">00</span><span>Minutes</span></div>
          <div><span class="second">00</span><span>Seconds</span></div>
          <div><span class="ampm">AM</span></div>
        </div>
      </div>
      
      <script type="text/javascript" src="../JavaScript/clock.js"></script>
      <script type="text/javascript" src="../JavaScript/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>