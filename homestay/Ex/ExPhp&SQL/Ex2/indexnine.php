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
$namequery = $_GET['name']??"";
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
if (isset($_GET['name'])) {
    if (empty($_GET['name'])) {
        $query = "SELECT * from sua inner join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua inner join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua ";
    }
    else {
        $query = "SELECT * from sua inner join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua inner join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua where sua.Ten_sua like '%$namequery%'";
    }
}
else {
    $query = "SELECT * from sua inner join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua inner join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua ";
}

$result = $conn->query($query);
if (!$result)
    die('Câu truy vấ sai');

?>
    <style>
    .w-800 {
        width: 800px;
    }



    h2 {
        text-transform: uppercase;
        padding: 10px;
        text-align: center;
        background-color: #e2c1da;
        margin-bottom: 5px;
        color: orangered;
    }

    form {
        background-color: #e2c1da;
        text-align: center;
        padding: 10px;
    }

    table {
        margin: 0 auto;
        width: 700px;
    }

    table,
    td {
        border: darkgrey 1px solid;
    }

    div {
        background-color: beige;
    }

    .title {
        background-color: antiquewhite;
        color: orangered;
    }
    </style>

    <div class="w-800">
        <h2>tìm kiếm thông tin sữa</h2>
        <form action="indexnine.php" method="get">
            <span>Tên sữa</span>
            <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; else echo '' ?>">
            <button type="submit">Tìm kiếm</button>
        </form>
        <table>
            <?php
if ($result->num_rows != 0) {
    echo "<p style='text-align: center'>" . "Có " . $result->num_rows . " sản phẩm được tìm thấy" . "</p>";
    while ($item = $result->fetch_array()) {
        echo "<tr><td colspan='2'>" . "<h2 class='title'>" . $item['Ten_sua'] . "</h2>" . "</td></tr>"
            . "<tr>"
            . "<td>" . "<img src='../../Hinh_sua/" . $item['Hinh'] . "' alt='img'>" . "</td>"
            . "<td><b>Thành phần dinh dưỡng</b>"
            . "<p>" . $item['TP_Dinh_Duong'] . "</p>"
            . "<b>Lợi ích</b>"
            . "<p>" . $item['Loi_ich'] . "</p>"
            . "<p style='text-align: right'><b>Trọng lượng: </b>" . $item['Trong_luong'] . " gr - <b>Đơn giá: </b>" . $item['Don_gia'] . " VNĐ</p>"
            . "</td>"
            . "</tr>";
    }
}
?>
</body>

</html>