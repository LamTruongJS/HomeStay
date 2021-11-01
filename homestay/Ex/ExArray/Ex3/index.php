<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php 
         
    ?>
    <?php
        function create_array($arrayNumber,$countNumber){
            for($i =0;$i<$countNumber;$i++){
                $arrayNumber[$i]=rand(-100,100);
            }
            return $arrayNumber;
        }
        function print_array($arrayNumber,$strArray){
            return $strArray = implode("  ", $arrayNumber);
        }
        function max_array($arrayNumber){
           $maxNumber =0;
           for($i=0;$i<count($arrayNumber);$i++){
              $maxNumber = $arrayNumber[$i] > $maxNumber ? $arrayNumber[$i] : $maxNumber;
           }
           return $maxNumber;
        }
        function min_array($arrayNumber){
            $minNumber =0;
            for($i=0;$i<count($arrayNumber);$i++){
               $minNumber = $arrayNumber[$i] > $minNumber ? $arrayNumber[$i] : $minNumber;
            }
            return $minNumber;
        }
      if(isset($_POST['tinh'])){
        $countNumber =$_POST['countNumber'] ?? 0;
        $arrayNumber = array();
        $strArray ='';
        $arrayNumber= create_array($arrayNumber,$countNumber);
        $strArray = print_array($arrayNumber,$strArray);  
        $maxArray = max_array($arrayNumber) ?? '';
        $minArray = min_array($arrayNumber)?? '';
      }
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Phát sinh mảng và tính toán</div>
        <div class="content">
            <label class="label">Nhập số phần tử:</label>
            <input type="text" name="countNumber"
                value="<?php if(isset($_POST['countNumber'])) echo $_POST['countNumber'];?>" />
        </div>
        <div class="content">
            <input type="submit" name='tinh' class="btn" value="Phát sinh và tính toán"></u>
        </div>
        <div class="content">
            <label class="label">Mảng: </label>
            <input type="text" class="disabled" value="<?php echo $strArray??'' ?>" readonly />
        </div>
        <div class="content">
            <label class="label">GTLN(Max) trong mảng: </label>
            <input type="text" name="maxArray" class="disabled" value="<?php echo $maxArray??'' ?>" readonly />
        </div>
        <div class="content">
            <label class="label">GTNN(min) trong mảng: </label>
            <input type="text" name="minArray" class="disabled" value="<?php echo $minArray??'' ?>" readonly />
        </div>
        <div style="background-color: pink; text-align: center;"><span style='color:red'>Chú ý: </span>Các phần tử có
            giá trị từ 0->20</div>


    </form>

</body>

</html>