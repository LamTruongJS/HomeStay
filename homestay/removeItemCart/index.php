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
        include '../config.php';
        $email = $_SESSION['email'];
        $maHST= $_GET['maHST'];
       
        //truy vấn lấy ra mã user
        $sql1= "SELECT * FROM user where email ='$email'";
        $result1=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_array($result1);
        $maUser = $row1['ID'];

        //truy vấn lấy ra mã giỏ hàng
        $sql2="SELECT * FROM gio_hang WHERE maUser like'$maUser'";
        $result2=mysqli_query($conn,$sql2);
        $row2=mysqli_fetch_array($result2);
        $maGH=$row2['maGH'];

        $sql3="DELETE FROM ct_gio_hang WHERE maGH='$maGH' and maHST='$maHST'";
        $result3= mysqli_query($conn,$sql3);
        if($result3){
            header('location: /homestay/cart/');
        }
       
        $conn->close();
    ?>
</body>
</html>