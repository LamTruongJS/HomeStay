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
  
   include '../../config.php';
   
    $maLHST= $_GET['maLHST']??'';
    $sql= "SELECT * FROM loai_home_stay where maLoaiHST= '$maLHST'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $name=$row['tenLoaiHST'];
    $errName='';
    if(isset($_POST['edit'])){
      $name= $_POST['name'];
      $sql2="SELECT* FROM loai_home_stay where maLoaiHST<>'$maLHST'";
      $result2= mysqli_query($conn,$sql2);
      $flat= false;
      for($i=0;$i<$result2->num_rows;$i++){
        $row2= mysqli_fetch_array($result2);
        if($name==$row2['tenLoaiHST']){
          $errName="Loại HomeStay này đã tồn tại";
         $flat= true;
        }
      }
      if($flat==false && $name!=""){
      $sql3= "UPDATE loai_home_stay SET tenLoaiHST='$name' where maLoaiHST='$maLHST'";
      $result3= mysqli_query($conn,$sql3); 
      if($result3){
        header('Location: /homestay/Admin/ad_typeHomestay/');
      }
     }
    }
   ?>
    <?php
    include '../header/index.php';
     ?>
        <form class=" col-md-8 border border-1 p-3" action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mã Loại HomeStay</label>
                <input type="text" class="form-control" value="<?php echo $maLHST ?>" id="exampleFormControlInput1" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Tên</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="exampleFormControlInput2">
              </div>
              <?php if(isset($errName)) echo "<p class='text-danger'>$errName</p>"; else echo ''?>
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