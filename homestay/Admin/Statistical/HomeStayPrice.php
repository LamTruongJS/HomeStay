<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../Css/home.css">
    <title>Document</title>
</head>
<body>
     <!-- header-->
     <?php include "../header/index.php" ?> 

    <div class="col-md-8 m-0">
        <h2>Giá Thành</h2>
            <nav class="m-0">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active itemBar text-muted" id="nav-bar-tab" data-bs-toggle="tab" data-bs-target="#nav-bar" type="button" role="tab" aria-controls="nav-bar" aria-selected="true">Bar</button>
                <button class="nav-link itemLine text-muted" id="nav-line-tab" data-bs-toggle="tab" data-bs-target="#nav-line" type="button" role="tab" aria-controls="nav-line" aria-selected="false">Line</button>
                <button class="nav-link itemHorizontalBar text-muted" id="nav-horizontalBar-tab" data-bs-toggle="tab" data-bs-target="#nav-horizontalBar" type="button" role="tab" aria-controls="nav-horizontalBar" aria-selected="false">HorizontalBar</button>
                </div>
            </nav>
            <div class="tab-content p-0" id="nav-tabContent">
                <div class="tab-pane show active w-100" id="nav-bar" role="tabpanel" aria-labelledby="nav-bar-tab"> 
                    <canvas id="myChartBar" class="w-100" style="width: 100rem; height: 30rem"></canvas>
                </div>
                <div class="container tab-pane w-100 m-0 p-0" id="nav-line" role="tabpanel" aria-labelledby="nav-line-tab">
                    <canvas id="myChartLine" class="w-100 m-0" style="width: 100rem; height: 30rem"></canvas>
                </div>
                <div class="container tab-pane w-100 m-0 p-0" id="nav-horizontalBar" role="tabpanel" aria-labelledby="nav-horizontalBar-tab">
                    <canvas id="myChartHorizontalBar" class="w-100" style="width: 100rem; height: 30rem"></canvas></div>
            </div>
    </div>
  </nav>
  <!-- Book Push -->
    <nav class="d-none">
    <?php
          include('../../config.php');

           $sql = "SELECT * FROM home_stay ORDER BY donGia DESC LIMIT 10";

          $result = $conn->query("$sql");
          for ($i = 0; $i < $result->num_rows; $i++) {
           $row = mysqli_fetch_array($result);
            echo "<div class='nameCity'>".$row['tenHStay']."</div>";
            echo "<div class='amount'>".$row['donGia']."</div>";
          }
            $conn->close();
          ?>
    
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
    <script type="text/javascript" src="../JavaScript/chartPriceHomestay.js"></script> 
    <script type="text/javascript" src="../JavaScript/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>