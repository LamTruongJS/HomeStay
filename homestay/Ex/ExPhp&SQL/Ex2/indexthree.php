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

$sql = "SELECT * FROM khach_hang";
$result = $conn->query("$sql");
echo "<h1 align='center'>Thông Tin Khách Hàng </h1>";
echo "<table border='1' align='center' style='border-color:#ccc'>";
echo "<tr align='center' color='red'><td>Mã KH</td><td>Tên Khách Hàng</td><td>Giới Tính</td><td>Địa Chỉ</td><td>Số Điện Thoại</td></tr>";
for ($i = 0; $i < $result->num_rows; $i++) {
    $row = mysqli_fetch_array($result);
    $hinh_anh = $row['Phai'] == 0 ? './asset/nam.jpg' : './asset/nu.jfif';
    echo $i % 2 == 0 ? "<tr style='background-color:pink; text-align:center'>" : "<tr style='text-align:center'>";
    echo "<td>" . $row['Ma_khach_hang'] . "</td>";
    echo "<td>" . $row['Ten_khach_hang'] . "</td>";
    echo "<td><img src=$hinh_anh  style='width:50px'/></td>";
    echo "<td>" . $row['Dia_chi'] . "</td>";
    echo "<td>" . $row['Dien_thoai'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>

</html>