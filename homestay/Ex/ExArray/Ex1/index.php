<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
       $N =$_POST['SoN'] ?? 0;
       $testN ="";
       $evenNumber=0;
       $number =0;
       $numberSmallerHundered =0;
       $negative=0;
       $arrayIncrement ='';
       $localtionZero='';
       $randomArray=array();
        //chuyển từ chuỗi sang số
        if(is_numeric($N)){
            $number = $N +0;
        }
        else {
            $number =0;
        }
        if (!is_numeric($number) || $number < 1 || $number != round($number)) {
           $testN = $N.' không là số nguyên dương';
           $str = $N.' không là số nguyên dương';
           $evenNumber= $N.' không là số nguyên dương';
           $numberSmallerHundered = $N.' không là số nguyên dương';
           $negative= $N.' không là số nguyên dương';
           $arrayIncrement = $N.' không là số nguyên dương';
           $localtionZero= $N.' không là số nguyên dương';
        }
       else {
            $testN= $N.' là số nguyên dương';
           
            for($i=0;$i<$number; $i++){
                $randomArray[$i] = rand(-200,200);
                $evenNumber = $randomArray[$i] % 2===0 ? $evenNumber+=1 : $evenNumber;
                $numberSmallerHundered = $randomArray[$i] <100 ? $numberSmallerHundered+=1 : $numberSmallerHundered; 
                $negative +=$randomArray[$i] < 0 ? +$randomArray[$i] : 0;
                $localtionZero .= $randomArray[$i]===0 ? "$i, ":''; // thực hiện bỏ dấy phẩy thôi
            }
            $str = implode(",", $randomArray);
            sort($randomArray);
            $arrayIncrement = implode(",",$randomArray);

       }
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Array</div>
        <div class="content">
            <label class="label">Nhập N:</label>
            <input type="text" name="SoN" value="<?php if(isset($_POST['SoN'])) echo $_POST['SoN'];?>" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Thực Hiện"></u>
        </div>
        <div class="content">
            <label class="label"><?php echo $N ?> là: </label>
            <input type="text" name="testN" class="disabled" value="<?php echo $testN ?>" readonly />
        </div>
        <div class="content">
            <label class="label">Mảng ngẫu nhiên <?php echo $N ?> phần tử:</label>
            <input type="text" name="mangNgauNhien" class="disabled" readonly value="<?php echo $str?>" />
        </div>
        <div class="content">
            <label class="label">Số phần từ chẳn:</label>
            <input type="text" name="phanTuChan" class="disabled" readonly value="<?php echo $evenNumber?>" />
        </div>
        <div class="content">
            <label class="label">Số phần từ nhỏ hơn 100:</label>
            <input type="text" name="phanTu100" class="disabled" readonly value="<?php echo $numberSmallerHundered?>" />
        </div>
        <div class="content">
            <label class="label">Tổng số âm:</label>
            <input type="text" name="soAm" class="disabled" readonly value="<?php echo  $negative?>" />
        </div>
        <div class="content">
            <label class="label">Vị trí phẩn từ 0:</label>
            <input type="text" name="viTriPhanTu0" class="disabled" readonly value="<?php echo  $localtionZero?>" />
        </div>
        <div class="content">
            <label class="label">Sắp xếp mảng tăng dần:</label>
            <input type="text" name="mangTangDan" class="disabled" readonly value="<?php echo  $arrayIncrement?>" />
        </div>



    </form>

</body>

</html>