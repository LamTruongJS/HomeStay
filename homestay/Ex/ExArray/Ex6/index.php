<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex6</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
       $array_input =$_POST['array_input'] ?? 0;
        $array_temp = explode(",", $array_input);
        function increaseArray($array_temp){
            sort($array_temp);
            $res=implode(",", $array_temp);
            return $res;
          
        }
        function decreaseArray($array_temp){
            rsort($array_temp);
            $res=implode(",", $array_temp);
            return $res;
        }
        $array_increase = increaseArray($array_temp)??"";
        $array_decrease= decreaseArray($array_temp)??"";
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Sắp xếp mảng</div>
        <div class="content">
            <label class="label">Nhập Mảng:</label>
            <input type="text" name="array_input"
                value="<?php if(isset($_POST['array_input'])) echo $_POST['array_input'];?>" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Thực Hiện"></u>
        </div>
        <div class="content">
            <label class="label">Tăng dần: </label>
            <input type="text" name="array_increase" class="disabled" value="<?php echo $array_increase ?>" readonly />
        </div>

        <div class="content">
            <label class="label">Giảm dần:</label>
            <input type="text" name="array_decrease" class="disabled" readonly value="<?php echo $array_decrease?>" />
        </div>

    </form>

</body>

</html>