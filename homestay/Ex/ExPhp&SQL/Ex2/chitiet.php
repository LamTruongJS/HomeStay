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

$Ma_sua = $_GET["Ma_sua"];
$index = $_GET["index"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan_ly_ban_sua";
$conn = new mysqli($servername, $username, $password, $dbname);
//for vietnamese
mysqli_set_charset($conn, 'utf8'); //dùng để đổi định dạng
// 1. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from hang_sua hs JOIN sua s on hs.Ma_hang_sua =s.Ma_hang_sua JOIN loai_sua ls on s.Ma_loai_sua= ls.Ma_loai_sua WHERE s.Ma_sua like '$Ma_sua'";
$result = $conn->query("$sql");
$row = mysqli_fetch_array($result);
echo "<table border='1' align='center' style='border-color:#ccc; max-width:600px'>";
echo "<tr align='center' color='red'><td colspan='2' style=' background-color:pink; color:orange'>" . $row['Ten_hang_sua'] . " " . $row['Ten_sua'] . "</td></tr>";
$hinh_anh = array('./asset/anh_one.jfif', './asset/anh_two.jfif', './asset/anh_three.jfif', './asset/anh_four.jfif', './asset/anh_five.jfif', './asset/anh_six.jpg', './asset/anh_seven.jpg', './asset/anh_eight.jfif', './asset/anh_nine.jfif', './asset/anh_ten.png');

echo "<tr>";
echo "<td align='center'>";
echo "<img src=$hinh_anh[$index] style='width:100px'>";
echo "</td>";
echo "<td>";
echo "<b>Thành Phần Dinh Dưỡng</b><br>";
echo $row['TP_Dinh_Duong'] . "<br>";
echo "<b>Lợi ích</b><br>";
echo $row['Loi_ich'];
echo "<p style='float:right;'><b>Trọng Lượng:</b> " . $row['Trong_luong'] . " - <b>Đơn giá:</b> " . $row['Don_gia'] . " VNĐ</p>";
echo "</td>";
echo "</tr>";
echo "<tr><td><a href=" . $_SERVER['HTTP_REFERER'] . ">Quay lại</a></td></tr>";
echo "</table>";
?>
</body>

</html>