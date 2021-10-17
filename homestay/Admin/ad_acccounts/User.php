<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font/themify-icons/themify-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../../asset/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> 
    <link rel="stylesheet" href="../Css/admin.css">
    <link rel="stylesheet" href="../Css/home.css">
    <title>User Account</title>
</head>
<body>
   <!-- header-->
   <?php include "../header/index.php" ?> 
   <!-- end header -->
          <nav class="col-md-8">
              <table class="table table-hover">
                <div class="d-flex justify-content-between">
                  <h2 class='d-inline'>Account User</h2>
                  <a href="../insertAccount?maQuyen=user" class="btn btn-outline-success d-inline-block mb-3 mt-2">Thêm Mới</a>
                  </div>
                  <form action="User.php" method="GET">
                    <div class="input-group w-100">
                      <input type="search" name="search" placeholder="Search"
                      class="form-control border-1"
                      value="<?php if(isset($_GET['search'])) echo $_GET['search']; else echo ''?>" />                   
                        <button id="button-addon1" type="submit" class="btn btn-link border border-1 btn-light text-dark"><i class="fas fa-search"></i></button>                       
                    </div>
                </from>
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">ID</th>
                      <th scope="col">Tên</th>
                      <th scope="col">Email</th>
                      <th scope="col">Password</th>   
                      <th scope="col">Tiện ích</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include '../../config.php';
                    $search=$_GET['search']??'';
                    if(isset($_GET['search'])){
                        if(empty($_GET['search'])){
                          $sql="SELECT * FROM user WHERE maQuyen='user'";
                        }
                        else{
                          $sql= "SELECT * FROM user WHERE maQuyen='user' and (email like '%$search%' or name like '%$search%')";
                        }
                    }
                    else{
                      $sql="SELECT * FROM user WHERE maQuyen='user'";
                    }
                  
                    $result= mysqli_query($conn,$sql);
                    if($result){
                      for($i=1;$i<=$result->num_rows;$i++){
                        $row = mysqli_fetch_array($result);
                        $id=$row['ID'];
                          echo "<tr>";
                          echo "<th scope='row'>$i</th>";
                          echo "<td>".$row['ID']."</td>";
                          echo "<td>".$row['name']."</td>";
                          echo "<td>".$row['email']."</td>";
                          echo "<td>".$row['password']."</td>";
                          echo "<td align='center'>
                                <a href='../editAccountData?maUser=$id'><i class='fa fa-text-width' aria-hidden='true'></i></a>
                                <a href='../removeAccount?maUser=$id'><i class='ti-trash'></i></a>
                                </td>"; 
                      }  
                    }
                    ?>

                  </tbody>
                </table>
          </nav>
      </nav>
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