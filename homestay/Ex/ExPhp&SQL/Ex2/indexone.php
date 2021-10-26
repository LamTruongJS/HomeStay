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

$sql = "SELECT * FROM hang_sua";
$result = $conn->query("$sql");
echo "<h1 align='center'>Thông Tin Hãng Sửa </h1>";
echo "<table border='1' align='center'>";
echo "<tr align='center'><td>Mã HS</td><td>Tên hãng sữa</td><td>Địa chỉ</td><td>Điện thoại</td><td>Email</td></tr>";
for ($i = 0; $i < $result->num_rows; $i++) {
    $row = mysqli_fetch_array($result);
    echo "<tr>";
    echo "<td>" . $row['Ma_hang_sua'] . "</td>";
    echo "<td>" . $row['Ten_hang_sua'] . "</td>";
    echo "<td>" . $row['Dia_chi'] . "</td>";
    echo "<td>" . $row['Dien_thoai'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>

</html>