<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa Đơn</title>
</head>
<body>
    <?php 
    
    //   if(isset($_POST["pay"])){
    //     echo $_POST["pay"];

       
    //     $ngayBatDau='';
    //     $ngayKetThuc='';
    //     $thanhTien=0;
        
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');
    //     $thoiGian = date("Y-m-d H:i:s");
        

    //      $maHD='HD'.rand(0,9).rand(0,9).rand(0,9);
    //      $maGH=$row['maGH'];
    //      $maHStay=$row['maHStay'];
    //      $ngayBatDau=$_POST["dateArrive"] ?? '';
    //      $ngayKetThuc=$_POST["dateLeave"] ?? '';
         

    //      $dateAmount= floor(abs(strtotime($ngayKetThuc) - strtotime($ngayBatDau)) / (60*60*24));
    //      $thanhTien =$dateAmount * $row['donGia'];
                    
    //      $slq2="SELECT * FROM hoa_don";
    //      $result2=mysqli_query($conn,$slq2);
    //      $row2=mysqli_fetch_array($result2);

    //     //truy van hoa_don de ktra xem homstay con khong
    //      $sql3="SELECT * FROM hoa_don where maHST = '$maHStay'";
    //      $result3=mysqli_query($conn,$sql3);
        
    //     for($j=0;$j<$result3->num_rows;$j++){
    //         $row3=mysqli_fetch_array($result3);
    //         if(strtotime($ngayBatDau) <= strtotime($row3['ngayBatDau']) && strtotime($ngayKetThuc) >= strtotime($row3['ngayKetThuc'])){
    //            $errDate ='HomeStay đã hết  ! <br /> Liên hệ: 0905172802 để biết thêm chi tiết'; 
    //          }
    //          if(strtotime($ngayBatDau) >= strtotime($row3['ngayBatDau']) && strtotime($ngayBatDau) <= strtotime($row3['ngayKetThuc'])){
    //            $errDate ='HomeStay đã hết  ! <br /> Liên hệ: 0905172802 để biết thêm chi tiết';  
    //          }
    //          if(strtotime($ngayKetThuc)>= strtotime($row3['ngayBatDau'])  && strtotime($ngayKetThuc) <= strtotime($row3['ngayKetThuc'])){
    //              $errDate ='HomeStay đã hết  ! <br /> Liên hệ: 0905172802 để biết thêm chi tiết'; 
    //          }
    //     }

    //      if(strtotime($ngayBatDau) > strtotime($ngayKetThuc)){
    //        $errDate ='Thời gian chưa hợp lệ !';
    //      }
        
    //      if($errDate=''){
    //         while (strcmp($maHD, $row2['maHD']) == 0) {
    //             $maHD='HD'.rand(0,9).rand(0,9).rand(0,9);
    //         }
    //          $sql3="INSERT INTO hoa_don values('$maHD','$maUser','$maHStay','$ngayBatDau','$ngayKetThuc','$thanhTien','$thoiGian')";
    //          $result3=mysqli_query($conn,$sql3);
    //          if($result3){
    //              $sql4="DELETE FROM ct_gio_hang where maHST='$maHStay' and maGH='$maGH'";
                
    //              $result4=mysqli_query($conn,$sql4);
                
    //                  header('Location: /homestay/bill/');
    //                  exit();
    //              }
    //          } 
    //      }
    ?>
</body>
</html>