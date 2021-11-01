<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Ex3</title>
</head>

<body>

    <?php
        $bankinh =$_POST['bankinh'] ?? "0";
        $PI=3.14;
        $chuvi=$_POST['chuvi'] ?? "";
        $dientich=$_POST['dientich']?? "";
        if(isset($_POST['tinh'])){
                if(isset($_POST['bankinh']) && $_POST['bankinh'] >0){
                    $dientich= $PI * $bankinh *$bankinh;
                    $chuvi =2 *$PI * $bankinh;
                }
                else {
                    $dientich="errol";
                    $chuvi="errol"; 
                }
        }   
    ?>
    <form action="" class="container" method="POST">

        <div class="title">Diện Tích Và Chu Vi Hình Tròn</div>
        <div class="content">
            <label class="label">Bán Kính:</label>
            <input type="text" name="bankinh"
                value="<?php if(isset($_POST['bankinh'])) echo $_POST['bankinh']; else echo ""?>" />
        </div>
        <div class="content">
            <label class="label">Diện Tích:</label>
            <input type="text" name="dientich" class="disabled" value="<?php echo $dientich ?>" readonly>
        </div>
        <div class=" content">
            <label class="label">Chu Vi:</label>
            <input type="text" name="chuvi" class="disabled" value="<?php echo $chuvi ?>" readonly>
        </div>
        <div class="content">
            <input type="submit" name='tinh' class="btn" value="Tính"></u>
        </div>

    </form>

</body>

</html>