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
        $maHD=$_GET['maHD'];
        
        include '../config.php';
        $sql="DELETE FROM hoa_don where maHD='$maHD'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header('Location: /homeStay/bill/');
        }
    
    ?>
</body>
</html>