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
    ?>
    <form action="./SecondPage.php" class="container" method="POST">
        <div class="title">Phép Tính Trên Hai Số</div>
        <div class="content">
            <label class="label">Phép Toán:</label>
            <label>Cộng</label>
            <input type="radio" name="calculation" value="Cộng" />
            <label>Trừ</label>
            <input type="radio" name="calculation" value="Trừ" />
            <label>Nhân</label>
            <input type="radio" name="calculation" value="Nhân" />
            <label>Chia</label>
            <input type="radio" name="calculation" value="Chia" />
        </div>
        <div class="content">
            <label class="label">Số Thứ Nhất:</label>
            <input type="text" name="NumberFirst" />
        </div>
        <div class="content">
            <label class="label">Số Thứ Hai:</label>
            <input type="text" name="NumberSecond" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Tính"></u>
        </div>

    </form>

</body>

</html>