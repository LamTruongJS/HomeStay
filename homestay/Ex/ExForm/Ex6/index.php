<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <?php 
    $calculation=$_POST['calculation'];
    $NumberFirst=$_POST['NumberFirst'];
    $NumberSecond=$_POST['NumberSecond'];
    $Result= 0;
    switch($calculation){
        case "Cộng":$Result = $NumberFirst + $NumberSecond;
        break;
        case "Trừ": $Result = $NumberFirst - $NumberSecond;
        break;
        case "Nhân": $Result = $NumberFirst * $NumberSecond;
        break;
        case "Chia": $Result = $NumberFirst / $NumberSecond;
        break;
        default: return $Result;
    }
    ?>
    <div class="container">
        <div class="title">Phép Tính Trên Hai Số</div>
        <div class="content">
            <label class="label">Phép Toán:</label>
            <span><?php echo $calculation ?></span>
        </div>
        <div class="content">
            <label class="label">Số Thứ Nhất:</label>
            <input type="text" class="disabled" value="<?php echo $NumberFirst; ?>" />
        </div>
        <div class="content">
            <label class="label">Số Thứ Hai:</label>
            <input type="text" class="disabled" value="<?php echo $NumberSecond; ?>" />
        </div>
        <div class="content">
            <label class="label">Kết Quả:</label>
            <input type="text" class="disabled" value="<?php echo $Result; ?>" />
        </div>
        <div class="content">
            <a a href="javascript:window.history.back(-1);" class="btn">Quay lại trang trước</a>
        </div>

    </div>
</body>

</html>