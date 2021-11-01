<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ex1</title>
</head>

<body>

    <?php
        $chieudai =$_POST['chieudai'] ?? 0;
        $chieurong =$_POST['chieurong']??0;
        $dientich=$_POST['dientich']??'';
       if(isset($_POST['tinh'])){
            if(min($chieudai, $chieurong) >0 && $chieudai!=$chieurong){
                $dientich= ($chieudai * $chieurong);
            }
            else {
                $dientich="Errol"; 
            } 
       }  
    ?>
    <form action="" class="container" method="POST">

        <div class="title">Diện tích hình chữ nhật</div>
        <div class="content">
            <label class="label">Chiều dài:</label>
            <input type="text" name="chieudai"
                value="<?php if(isset($_POST['chieudai'])) echo $_POST['chieudai']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Chiều Rộng:</label>
            <input type="text" name="chieurong"
                value="<?php if(isset($_POST['chieurong'])) echo $_POST['chieurong']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Diện Tích:</label>
            <input type="text" name="dientich" class="disabled"
                value="<?php if(isset($dientich)) echo $dientich; else echo "" ?>" readonly>
        </div>
        <div class="content">
            <input type="submit" name='tinh' class="btn" value="Tính"></u>
        </div>

    </form>
</body>

</html>