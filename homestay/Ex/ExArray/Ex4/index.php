<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex4</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
       function search($numberSearch, $array){
            $key = array_search($numberSearch,$array);
            if($key || $key===0){
                $location = array_search($numberSearch,$array) +1;
            return  $result= "Tìm thấy $numberSearch tại vị trí $location của mảng";
            }   
            else{
                return $result ="Không tìm thấy $numberSearch trong mảng";
        
            }
       }
       $arrayInput =$_POST['arrayInput'] ?? ' ';
       $numberSearch = $_POST['numberSearch']?? '';
       $array= explode(',',$arrayInput);
       $result ='';
       $result = search($numberSearch,$array);
       
    ?>
    <form action="index.php" class="container" method="POST">
        <div class="title">Tìm kiếm</div>
        <div class="content">
            <label class="label">Nhập mảng:</label>
            <input type="text" name="arrayInput"
                value="<?php if(isset($_POST['arrayInput'])) echo $_POST['arrayInput'];?>" />
        </div>
        <div class="content">
            <label class="label">Nhập số cần tìm </label>
            <input type="text" name="numberSearch"
                value="<?php if(isset($_POST['numberSearch'])) echo $_POST['numberSearch'];?>" />
        </div>
        <div class="content">
            <input type="submit" class="btn" value="Tìm kiếm"></u>
        </div>
        <div class="content">
            <label class="label">Mảng: </label>
            <input type="text" name="arrayOuput" class="disabled" value="<?php echo $arrayInput ?>" readonly />
        </div>
        <div class="content">
            <label class="label">Kết quả tìm kiếm:</label>
            <input type="text" name="result" class="disabled" readonly value="<?php echo $result?>" />
        </div>
        <div style='background-color: pink; text-align: center;'>(Các phần tử trong mảng phải cách nhau bằng dấu ",")
        </div>
    </form>

</body>

</html>