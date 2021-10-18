<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../../config.php';
        $maTP=$_GET['maTP'];
      

        // thực hiện xóa
        $sql="DELETE FROM thanh_pho where maTP='$maTP'";
        $result = mysqli_query($conn,$sql);

        if($result){
            header('Location: /homestay/Admin/ad_city/');
        }
    ?>
</body>
</html>