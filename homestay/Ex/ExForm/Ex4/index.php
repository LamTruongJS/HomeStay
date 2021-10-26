<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ex4</title>
</head>

<body>

    <?php
        $toan =$_POST['toan'] ?? 0;
        $ly =$_POST['ly'] ??0;
        $hoa =$_POST['hoa'] ?? 0;
        $diemchuan =$_POST['diemchuan'] ?? 0;
      
        $KQ=$_POST['KQ']?? "Đang xét";
        $sum= $toan +$ly+$hoa ?? 0;
        if(min($toan,$ly,$hoa)!=0 && $sum >=$diemchuan){
            $KQ ="Đậu";
        }
        else $KQ="Rớt"
        
      
    ?>
    <form action="" class="container" method="POST">

        <div class="title">Kết quả thi đại học</div>
        <div class="content">
            <label class="label">Toán:</label>
            <input type="text" name="toan"
                value="<?php if(isset($_POST['toan'])) echo $_POST['toan']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Lý:</label>
            <input type="text" name="ly" value="<?php if(isset($_POST['ly'])) echo $_POST['ly']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Hóa:</label>
            <input type="text" name="hoa" value="<?php if(isset($_POST['hoa'])) echo $_POST['hoa']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Điểm Chuẩn:</label>
            <input type="text" name="diemchuan" style="color:red"
                value="<?php if(isset($_POST['diemchuan'])) echo $_POST['diemchuan']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Tổng Điểm:</label>
            <input type="text" name="sum" style="background-color:inherit" value=<?php echo $sum ?> readonly>
        </div>
        <div class="content">
            <label class="label">Kết Quả Thi:</label>
            <input type="text" name="KQ" style="background-color:inherit" value=<?php echo $KQ ?> readonly>
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Xem Kết Quả"></u>
        </div>

    </form>

</body>

</html>