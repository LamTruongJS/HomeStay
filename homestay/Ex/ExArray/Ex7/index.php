<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ex7</title>
</head>

<body>
    <?php 
    $mang_can=array('Quý', 'Giáp','Ất', 'Bích','Đinh','Mẫu',"Kỷ",'Canh','Tân','Nhâm');
    $mang_chi=array('Hợi','Tý','Sửu','Dần','Mão','Thìn','Tỵ','Ngọ','Mùi','Thân','Dậu','Tuất');
    $mang_hinh=array('hoi.PNG','ty.PNG','suu.PNG','dan.PNG','meo.PNG','thin.PNG','ty_ty.PNG','ngo.PNG','mui.PNG','than.PNG','dau.PNG','tuat.PNG');
    $calendar_year = $_POST['calendar_year'] ?? 0;
    $notifer="";
    if(is_numeric($calendar_year)){
        $notifer ="";
        $calendar_year = $calendar_year -3;
        $can=$calendar_year%10;
        $chi =$calendar_year%12;
        $lunar_year="$mang_can[$can] "."$mang_chi[$chi]";
        $hinh=$mang_hinh[$chi];
    }
    else{
        $notifer="Không đúng định dạng năm";
        $lunar_year ='';
        $hinh='';
    }
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Tính năm âm lịch</div>
        <div class="content_form">
            <div class="content">
                <label class="label">Năm dương lịch:</label>
                <input type="text" name="calendar_year"
                    value="<?php if(isset($_POST['calendar_year'])) echo $_POST['calendar_year'];?>" />
            </div>
            <div class="content">
                <input type="submit" class="btn" value="Thực Hiện"></u>
            </div>
            <div class="content">
                <label class="label">Năm âm lịch:</label>
                <input type="text" name="lunar_year" value="<?php echo $lunar_year; ?>" readonly />
            </div>
        </div>
        <div class="content_img">
            <h4><?php echo $notifer ?></h4>
            <img src="./img/<?php echo $hinh?>" alt="hình ảnh">
        </div>
    </form>
</body>

</html>