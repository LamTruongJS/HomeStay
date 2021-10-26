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
echo "<tr align='center' color='red'><td colspan='5' style=' background-color:pink; color:orange'>THÔNG TIN CÁC SẢN PHẨM</td></tr>";
for ($i = 1; $i <= 2; $i++) {
    $hinh_anh = array('./asset/anh_one.jfif', './asset/anh_two.jfif', './asset/anh_three.jfif', './asset/anh_four.jfif', './asset/anh_five.jfif', './asset/anh_six.jpg', './asset/anh_seven.jpg', './asset/anh_eight.jfif', './asset/anh_nine.jfif', './asset/anh_ten.png');
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $index = $i * $j - 1;
        $row = mysqli_fetch_array($result);
        $Ma_sua = $row['Ma_sua'];
        echo "<td align='center'>";
        echo "<a href='./chitiet.php?Ma_sua=$Ma_sua&index=$index'>" . $row['Ten_hang_sua'] . " " . $row['Ten_sua'] . "</a><br>";
        echo $row['Trong_luong'] . " - " . $row['Don_gia'] . " VNĐ <br>";
        echo "<img src=$hinh_anh[$index] style='width:100px'>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>

</html>