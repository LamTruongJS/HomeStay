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
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location: ../../login');
    }
  ?>
    <?php
        include '../../config.php';
        $maLHST=$_GET['maLHST'];
        // thực hiện xóa
        $sql="DELETE FROM loai_home_stay where maLoaiHST='$maLHST'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('Location: /homestay/Admin/ad_typeHomestay/');
        }
    ?>
</body>
</html>