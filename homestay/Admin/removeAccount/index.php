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
        $id=$_GET['maUser'];
        // truy vấn đế lấy ra maQuyen để quay về
        $sql1= "SELECT * FROM user where ID='$id'";
        $result1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_array($result1);

        // thực hiện xóa
        $sql="DELETE FROM user WHERE ID='$id'";
        $result = mysqli_query($conn,$sql);

        if($result){
            if($row['maQuyen']=='admin'){
                header('Location: /homestay/Admin/ad_acccounts/Admins.php');
              }
              else header('Location: /homestay/Admin/ad_acccounts/User.php');
        }
    ?>
</body>
</html>