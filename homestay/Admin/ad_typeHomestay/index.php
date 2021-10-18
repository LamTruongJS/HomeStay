<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../font/themify-icons/themify-icons.css" />
    <link rel="shortcut icon" type="image/png" href="../../asset/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../Css/admin.css">
    <link rel="stylesheet" href="../Css/home.css">
    <title>Loại HomeStay</title>
</head>
<body>
    <!-- header-->
    <?php include "../header/index.php" ?>  
          <nav class="col-md-8">
              <table class="table table-hover">
               
                  <div class="d-flex justify-content-between">
                    <h2 class='d-inline'>Loại HomeStay</h2>
                    <a href="../insertType" class="btn btn-outline-success d-inline-block mb-3 mt-2">Thêm Mới</a>
                  </div>
                  <form action="index.php" method="GET">
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
                      <th scope="col">Mã Loại HomeStay</th>
                      <th scope="col">Tên Loại HomeStay</th>
                      <th scope="col">Tiện Ích</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      include '../../config.php';
                      $search=$_GET['search']??'';
                      if(isset($_GET['search'])){
                          if(empty($_GET['search'])){
                            $sql="SELECT * FROM loai_home_stay";
                          }
                          else{
                            $sql= "SELECT * FROM loai_home_stay where maLoaiHST like '%$search%' or tenLoaiHST like '%$search%'";
                          }
                      }
                      else{
                        $sql="SELECT * FROM loai_home_stay";
                      }
                      $result =mysqli_query($conn,$sql);
                      for($i=1;$i<=$result->num_rows;$i++){
                        $row=mysqli_fetch_array($result);
                        $maLoaiHST= $row['maLoaiHST'];
                        echo "<tr>";
                        echo "<th scope='row'>$i</th>";
                        echo "<td>".$row['maLoaiHST']."</td>";
                        echo "<td>".$row['tenLoaiHST']."</td>";
                        echo "<td align='center'>
                              <a href='../editType?maLHST=$maLoaiHST'><i class='fa fa-text-width' aria-hidden='true'></i></a>
                              <a href='../removeType?maLHST=$maLoaiHST'><i class='ti-trash'></i></a>
                              </td>";
                        echo"</tr>";
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