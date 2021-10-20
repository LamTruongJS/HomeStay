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
    <title>Thành Phố</title>
</head>
<body>
    <!-- header-->
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: ../../login');
    }
  ?>
    <?php include "../header/index.php" ?> 
    <!-- End header -->
          <nav class="col-md-8">
              <table class="table table-hover">
              <div class="d-flex justify-content-between">
                  <h2 class='d-inline'>Thành Phố</h2>
                  <a href="../insertCity" class="btn btn-outline-success d-inline-block mb-3 mt-2">Thêm Mới</a>
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
                      <th scope="col">Mã Thành Phố</th>
                      <th scope="col">Tên Thành Phố</th>
                      <th scope="col">Hình Ảnh</th>
                      <th scope="col">Tiện Ích</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                      include '../../config.php';
                     
                      $row_per_page = 2;

                      if (!isset($_GET['page'])) {
                          $_GET['page'] = 1;
                      }
                      
                      $offset = ($_GET['page'] - 1) * $row_per_page;
                    
                      $search=$_GET['search']??'';
                      if(isset($_GET['search'])){
                          if(empty($_GET['search'])){
                            $query0="SELECT * FROM thanh_pho";
                            $query = "SELECT * from thanh_pho limit $offset, $row_per_page";
                          }
                          else{
                            $query0= "SELECT * FROM thanh_pho where maTP like '%$search%' or tenTP like '%$search%'";
                            $query = "SELECT * from thanh_pho where maTP like '%$search%' or tenTP like '%$search%' limit $offset, $row_per_page";
                          }
                      }
                      else
                        {
                            $query0="SELECT * FROM thanh_pho";
                            $query = "SELECT * from thanh_pho limit $offset, $row_per_page";
                        }
                      
                      $result0 = mysqli_query($conn,$query0);

                      $result = mysqli_query($conn,$query);

                      $num_rows = $result0->num_rows;
                      $max_page_count = ceil($num_rows / $row_per_page);

                      
                    if($result->num_rows!=0){
                    
                      for($i=1;$i<=$result->num_rows;$i++){
                        $row= mysqli_fetch_array($result);
                        $maTP=$row['maTP'];
                        echo "<tr>";
                        echo "<th scope='row'>$i</th>";
                        echo "<td>".$row['maTP']."</td>";
                        echo "<td>".$row['tenTP']."</td>";
                        echo "<td>".$row['hinh_anhTP']."</td>";
                        echo "<td align='center'>
                                <a href='../editCity?maTP=$maTP'><i class='fa fa-text-width' aria-hidden='true'></i></a>
                                <a href='../removeCity?maTP=$maTP'><i class='ti-trash'></i></a>
                                </td>"; 
                        echo "</tr>";
                      }
                    }
                      
                    ?>
                   
                  </tbody>
                </table>
                <?php
                    echo "<div class='w-100 text-center'>";
                   
                    if ($_GET['page'] != 1)
                        echo "<a class='item__page border border-1 p-2 m-1 text-decoration-none' href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . "> < </a>";

                    for ($i = 1; $i <= $max_page_count; $i++) {
                        if ($i == $_GET['page']) {
                            echo '<b  class="item__page text-muted border border-1 p-2 m-1 text-decoration-none"> ' . $i . ' </b>';
                        }
                        else
                            echo "<a class='item__page border border-1 p-2 m-1 text-decoration-none' href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "> " . $i . " </a>";
                    }

                    if ($_GET['page'] != $max_page_count)
                        echo "<ae class='item__pag border border-1 p-2 m-1 text-decoration-none' href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . "> > </ae>";
                   
                    echo "</div>";
                    
                    $result->free();
                    $conn->close();
                  ?>
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