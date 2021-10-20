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
   $errEmail='';
   $maQuyen=$_GET['maQuyen']??'';
   $email=$_POST['email']??'';
   $password=$_POST['password']??'';
   $name=$_POST['name']??'';
   $id='ID'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
   include '../../config.php';
   if(isset($_POST['insert'])){
    $sqlEmail = "SELECT * FROM user s  WHERE s.email ='$email'";
    $resultEmail = mysqli_query($conn, $sqlEmail);
    $num_rowsEmail = mysqli_num_rows($resultEmail);
    if ($num_rowsEmail != 0) {
      $errEmail = "Email đã tồn tại !";
    }
    if($num_rowsEmail == 0 && $password !='') {
      $sqlID = "SELECT ID FROM user";
      $resultID = mysqli_query($conn, $sqlID);
      $row = mysqli_fetch_array($resultID);
      while (strcmp($id, $row['ID']) == 0) {
        $id='ID'.rand(0,9).rand(0,9).rand(0,9);
      }
      $sql = "INSERT INTO user values('".$id."','".$name."','".$email."','".$password."','".$maQuyen."')";
      $result = mysqli_query($conn, $sql);
      if($result){
        if($maQuyen=='admin'){
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
                <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="exampleFormControlInput3">
              </div>
              <?php if(!empty($errEmail)) echo "<p class='text-danger'>$errEmail</p>"; else echo ''?>
              <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $password ?>" required id="exampleFormControlInput4">
              </div>
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