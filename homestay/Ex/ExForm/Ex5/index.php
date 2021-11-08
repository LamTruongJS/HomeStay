<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ex5</title>
</head>

<body>

    <?php
        $StartTime =$_POST['StartTime'] ?? 0;    
        $EndTime =$_POST['EndTime']??0;
        $notice =" ";
        $sum=0;
       if(isset($_POST['tinh'])){
        if($EndTime > $StartTime){
            if($StartTime >=10 && $StartTime<=24 && $EndTime<=24){
                $hour = $EndTime-$StartTime;
                if($EndTime < 17){
                    $sum=$hour *20000;
                }
                else if(17<= $StartTime && $EndTime<= 24){
                    $sum = $hour *45000;
                }
                else{
                    $sum = (17-$StartTime)*20000 + ($EndTime - 17)*45000;
                }
            }
            else $notice ="Khung Giờ Không Hợp Lệ!";
         }
           else $notice ="Khung Giờ Không Hợp Lệ!";
       }
    ?>
    <form action="" class="container" method="POST">

        <div class="title">Tính Tiền Karaoke</div>
        <div class="content">
            <label class="label">Giờ Bắt Đầu:</label>
            <input type="text" name="StartTime"
                value="<?php if(isset($_POST['StartTime'])) echo $_POST['StartTime']; else echo ""?>" />
            <span class="unit">(h)</span>
        </div>
        <div class="content">
            <label class="label">Giờ Kết Thúc:</label>
            <input type="text" name="EndTime"
                value="<?php if(isset($_POST['EndTime'])) echo $_POST['EndTime']; else echo ""?>" />
            <span class="unit">(h)</span>
        </div>
        <div class="content">
            <label class="label">Tiền Cần Thanh Toán:</label>
            <input type="text" name="sum" class="disabled" value=<?php echo $sum ?> readonly>
            <span class="unit">(VNĐ)</span>
        </div>

        <div class="content">
            <span style="margin-right: 90px; color:red"><?php echo $notice ?></span>
            <input type="submit" name='tinh' class="btn" value="Tính Tiền"></u>
        </div>

    </form>
</body>

</html>