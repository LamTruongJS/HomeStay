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
        $name =$_POST['name'] ?? "";
        $chisocu=$_POST['chisocu'] ?? "0";
        $chisomoi=$_POST['chisomoi'] ?? "0";
        $dongia=$POST['dongia'] ?? "20000";
        $price = ($chisomoi - $chisocu)*$dongia;
    ?>
    <form action="" class="container" method="POST">

        <div class="title">Thanh Toán Tiền Điện</div>
        <div class="content">
            <label class="label">Tên Chủ Hộ:</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" />
            <span class="unit"></span>
        </div>
        <div class="content">
            <label class="label">Chỉ Số Cũ:</label>
            <input type="text" name="chisocu"
                value="<?php if(isset($_POST['chisocu'])) echo $_POST['chisocu']; else echo "0"?>" />
            <span class="unit">(KW)</span>
        </div>
        <div class="content">
            <label class="label">Chỉ Số Mới:</label>
            <input type="text" name="chisomoi"
                value="<?php if(isset($_POST['chisomoi'])) echo $_POST['chisomoi'];else echo "0"?>" />
            <span class="unit">(KW)</span>
        </div>
        <div class="content">
            <label class="label">Đơn Giá:</label>
            <input type="text" name="dongia"
                value="<?php if(isset($_POST['dongia'])) echo $_POST['dongia']; else echo "2000"?>" />
            <span class="unit">(VNĐ)</span>
        </div>
        <div class="content">
            <label class="label">Số Tiền Thanh Toán:</label>
            <input type="text" name="price" class="disabled" value=<?php echo $price ?> readonly />
            <span class="unit">(VNĐ)</span>
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Tính"></u>
        </div>

    </form>

</body>

</html>