<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
       $numberString =$_POST['numberString'] ?? '';
       $arrayNumber = explode(",",$numberString);
       $sumNumber =0;
       $notNumber =0;
       if(isset($_POST['tinh'])){
            for($i=0; $i<count($arrayNumber);$i++){
                if(is_numeric($arrayNumber[$i])){
                $sumNumber +=$arrayNumber[$i];
                }
                else{
                    $notNumber++;
                }
            }
       }
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Nhập và tính trên dãy số</div>
        <div class="content">
            <label class="label">Nhập dãy số:</label>
            <input type="text" name="numberString"
                value="<?php if(isset($_POST['numberString'])) echo $_POST['numberString'];?>" />
            <span style='color:red'>(*)</span>
        </div>
        <h4><?php if($notNumber>0)  echo "Có $notNumber phần tử không phải số"; else echo ''; ?></h4>
        <div class="content">
            <input type="submit" name='tinh' class="btn" value="Thực Hiện"></u>
        </div>
        <div class="content">
            <label class="label">Tổng dãy số: </label>
            <input style='margin-right: 20px;' type="text" name="sumNumber" class="disabled"
                value="<?php echo $sumNumber ?>" readonly />
        </div>
        <div style="background-color: pink; text-align: center; width:100%">
            <span style='color:red'>(*)</span>Các số được nhập cách nhau bằng dấy phẩy
        </div>
    </form>

</body>

</html>