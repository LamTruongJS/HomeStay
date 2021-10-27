<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
       $number_list =$_POST['number_list'] ?? 0;
       $numberToReplace=$_POST['numberToReplace'] ?? '';
       $numberReplace =$_POST['numberReplace']??'';
       $array_temp = explode(",", $number_list);
       $notFound='';
       $oldArray= array();
       $newArray=array();
       function print_old_array($array_temp){
            $res ='';
            for($i=0;$i<count($array_temp);$i++){
                $res .="$array_temp[$i] ";
            }
            return $res;
        }
        function replace_array($number_list, $numberToReplace, $numberReplace){
            return str_replace($numberToReplace, $numberReplace,$number_list);
        }
        
        function print_new_array($new_temp){
           
            $res ='';
            for($i=0;$i<count($new_temp);$i++){
                $res .="$new_temp[$i] ";
            }
            return $res;
        }
       $oldArray= print_old_array($array_temp);
       $replace =replace_array($number_list, $numberToReplace, $numberReplace)?? ' ';
       $new_temp=explode(",",$replace);
       $newArray= print_new_array($new_temp);
        $res= array_diff($array_temp,$new_temp);
        if($numberToReplace==""||$res){
            $notFound ="";
        }
        else{
            $notFound ="Không tìm thấy $numberToReplace trong mảng";
        }
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Thay Thế</div>
        <div class="content">
            <label class="label">Nhập các phần tử:</label>
            <input type="text" name="number_list" value="<?php if(isset($_POST['number_list'])) echo $_POST['number_list'];?>" />
        </div>
        <div class="content">
            <label class="label">Giá trị cần thay thế:</label>
            <input type="text" name="numberToReplace" value="<?php if(isset($_POST['numberToReplace'])) echo $_POST['numberToReplace'];?>" />
        </div>
        <h4><?php echo $notFound; ?></h4>
        <div class="content">
            <label class="label">Giá trị thay thế:</label>
            <input type="text" name="numberReplace" value="<?php if(isset($_POST['numberReplace'])) echo $_POST['numberReplace'];?>" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Thực Hiện"></u>
        </div>
        <div class="content">
            <label class="label">Mảng cũ: </label>
            <input type="text" name="oldArray" class="disabled" readonly value="<?php echo $oldArray?>" />
        </div>
        <div class="content">
            <label class="label">Mảng mới:</label>
            <input type="text" name="newArray" class="disabled" readonly value="<?php echo $newArray?>" />
        </div>

    </form>

</body>

</html>