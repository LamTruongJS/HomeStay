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

$sql = "SELECT * from hang_sua hs JOIN sua s on hs.Ma_hang_sua =s.Ma_hang_sua JOIN loai_sua ls on s.Ma_loai_sua= ls.Ma_loai_sua";
$result = $conn->query("$sql");

echo "<table border='1' align='center' style='border-color:#ccc;'>";
echo "<tr align='center' color='red'><td colspan='2' style=' background-color:pink; color:orange'>THÔNG TIN CÁC SẢN PHẨM</td></tr>";
for ($i = 0; $i < 3; $i++) {
    $hinh_anh = array('./asset/anh_one.jfif', './asset/anh_two.jfif', './asset/anh_three.jfif');
    $row = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td><img src=$hinh_anh[$i] style='width:100px'></td>";
    echo "<td>";
    echo $row['Ten_sua'] . "<br>";
    echo "Nhà sản xuất: " . $row['Ten_hang_sua'] . "<br>";
    echo $row['Ten_loai'] . " - " . $row['Trong_luong'] . " - " . $row['Don_gia'] . " VNĐ";
    echo "</td>";
    echo "</tr>";


}
echo "</table>";
?>
</body>

</html>