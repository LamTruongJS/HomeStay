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
        function max_array($arrayNumber,$maxArray){
            return $maxArray = max($arrayNumber);
        }
        function min_array($arrayNumber,$minArray){
            return $minArray = min($arrayNumber);
        }
        $countNumber =$_POST['countNumber'] ?? 0;
        $arrayNumber = array();
        $strArray ='';
        $maxArray=0;
        $minArray =0;
        $arrayNumber= create_array($arrayNumber,$countNumber);
        $strArray = print_array($arrayNumber,$strArray);  
        $maxArray = max_array($arrayNumber,$maxArray);
        $minArray = min_array($arrayNumber,$minArray);
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Phát sinh mảng và tính toán</div>
        <div class="content">
            <label class="label">Nhập số phần tử:</label>
            <input type="text" name="countNumber" value="<?php if(isset($_POST['countNumber'])) echo $_POST['countNumber'];?>" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Phát sinh và tính toán"></u>
        </div>
        <div class="content">
            <label class="label">Mảng: </label>
            <input type="text"  class="disabled" value="<?php echo $strArray?>" readonly />
        </div>
        <div class="content">
            <label class="label">GTLN(Max) trong mảng: </label>
            <input type="text" name="maxArray" class="disabled" value="<?php echo $maxArray ?>" readonly />
        </div>
        <div class="content">
            <label class="label">GTNN(min) trong mảng: </label>
            <input type="text" name="minArray" class="disabled" value="<?php echo $minArray ?>" readonly />
        </div>



    </form>

</body>

</html>