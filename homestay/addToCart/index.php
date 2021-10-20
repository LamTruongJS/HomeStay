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
    $maHST=$_GET["maHStay"];
    echo $maHST;
    echo $email;
    
    $sql1="SELECT * FROM user where email like '$email'";
    $result1=mysqli_query($conn,$sql1);
    $row1 = mysqli_fetch_array($result1);
    $maUser=$row1['ID'];

    $sql2="SELECT * FROM gio_hang where maUser ='$maUser'";
    $result2=mysqli_query($conn,$sql2);
    
    if($result2->num_rows ==0){
        $sql3="SELECT * FROM gio_hang";
        $result3=mysqli_query($conn,$sql3);
        $row3=mysqli_fetch_array($result3);

        $index='GH'.rand(0,9).rand(0,9).rand(0,9);
        while (strcmp($index, $row3['maGH']) == 0) {
            $index='GH'.rand(0,9).rand(0,9).rand(0,9);
        }
        $sql4="INSERT INTO FROM gio_hang values('$index','$maUser')";
        $result4=mysqli_query($conn,$sql4);
        
        $sql5="INSERT INTO ct_gio_hang values('$index','$maHST','$ngayBatDau','$soNgayThue')";
        $result5=mysqli_query($conn,$sql5);
    }
    else{
        $row2=mysqli_fetch_array($result2);
        $maGH=$row2['maGH'];
        $sql6="SELECT * FROM ct_gio_hang WHERE maHST='$maHST'";
        $result6=mysqli_query($conn,$sql6);
        if($result6->num_rows !=0){
            $sql7="INSERT INTO FROM ct_gio_hang values('$maGH','$maHST','$ngayBatDau','$soNgayThue')";
        }
    }

    $conn->close();
    ?>
</body>
</html>