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
   $errImg='';
   $errName='';
   $cityName=$_POST['cityName']?? '';
    $id='TP'.rand(0,9).rand(0,9).rand(0,9);
  
   if(isset($_POST['insert'])){
      include '../../config.php';
     $sqlName="SELECT * FROM thanh_pho WHERE tenTP like '%$cityName%'"; 
     $resultName= mysqli_query($conn,$sqlName);
     $num_rowsName= mysqli_num_rows($resultName);
   
     if($num_rowsName!=0){
       $errName ="Tên thành phố đã tồn tại";
     }
     if($num_rowsName==0){
      $sqlID = "SELECT * FROM thanh_pho";
      $resultID = mysqli_query($conn, $sqlID);
      $row = mysqli_fetch_array($resultID);
      //random id
     if(isset($row['ID'])){
      while (strcmp($id, $row['ID']) == 0) {
        $id='TP'.rand(0,9).rand(0,9).rand(0,9);
      }
     }
      //thực hiện lấy ảnh
      if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
          if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
              
              // Nếu là ảnh tiến hành code upload
              $path = "../../images/"; // Ảnh sẽ lưu vào thư mục images
              $path2="images"; // path để hiện trong csdl
              $tmp_name = $_FILES['uploadFile']['tmp_name'];
              $name = $_FILES['uploadFile']['name'];
              // Upload ảnh vào thư mục images
              move_uploaded_file($tmp_name, $path . $name);
              $hinh_anh = $path2 . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                        // Insert ảnh vào cơ sở dữ liệu
              $sql = "INSERT INTO thanh_pho VALUES ('$id','$cityName','$hinh_anh')";
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
        <form class=" col-md-8 border border-1 p-3" action="index.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" class="form-control" value="<?php echo $id ?>" id="exampleFormControlInput1" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Tên Thành Phố</label>
                <input type="text" class="form-control" name="cityName" value="<?php if(isset($_POST['cityName'])) echo $_POST['cityName']; else echo '' ?>" id="exampleFormControlInput2" required>
              </div>
              <?php if(isset($errName)) echo "<p class='text-danger'>$errName</p>"; else echo ''?>
              <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Hình Ảnh</label>
                <input type="file" class="form-control" name="uploadFile"  id="exampleFormControlInput3" required>
              </div>
              <?php if(isset($errImg)) echo "<p class='text-danger'>$errImg</p>"; else echo ''?>
              
              <input type="submit" class="btn btn-outline-success" name="insert" value="Hoàn tác"/>
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