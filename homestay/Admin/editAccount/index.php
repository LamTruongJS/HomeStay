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
   
    $id= $_GET['maUser']??'';
    $sql= "SELECT * FROM user where ID= '$id'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    if(isset($_POST['edit'])){
      $name= $_POST['name'];
      $password= $_POST['password'];
      if($name!="" && $password!=""){
      $sql2= "UPDATE user u SET u.name='$name', u.password='$password' where ID='$id'";
      $result2= mysqli_query($conn,$sql2); 
      if($result2){
        if($row['maQuyen']=='admin'){
          header('Location: /homestay/Admin/ad_acccounts/Admins.php');
        }
        else header('Location: /homestay/Admin/ad_acccounts/User.php');
      }
     }
    }
   ?>
    <?php
    include '../header/index.php';
     ?>
        <form class=" col-md-8 border border-1 p-3" action="" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" class="form-control" value="<?php echo $id ?>" id="exampleFormControlInput1" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Tên</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>" id="exampleFormControlInput2">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="exampleFormControlInput3" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $password ?>" id="exampleFormControlInput4">
              </div>
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