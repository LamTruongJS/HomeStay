<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài 2.8</title>
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

?>
    <style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h2 {
        color: orangered;
        background-color: antiquewhite;
        width: 800px;
        text-align: center;
        padding: 10px;
        margin-bottom: 0;
    }

    table {
        width: 800px;

    }

    tr,
    td {
        border: darkgrey 1px solid;
    }
    </style>
    <table width="500px" cellpadding="10px">
        <?php

    $row_per_page = 2;

    if (!isset($_GET['page'])) {
        $_GET['page'] = 1;
    }

    $offset = ($_GET['page'] - 1) * $row_per_page;
  
    $query0 = 'select * from sua';

    $result0 = $conn->query($query0);


$query = 'select * from sua '
    . 'inner join hang_sua on sua.Ma_hang_sua = hang_sua.Ma_hang_sua '
    . 'inner join loai_sua on sua.Ma_loai_sua = loai_sua.Ma_loai_sua '
    . "limit $offset, $row_per_page ";

$result = $conn->query($query);

$num_rows = $result0->num_rows;
$max_page_count = ceil($num_rows / $row_per_page);


if ($result->num_rows != 0) {
    $hinh_anh = array('./asset/anh_one.jfif', './asset/anh_two.jfif', './asset/anh_three.jfif', './asset/anh_four.jfif', './asset/anh_five.jfif', './asset/anh_six.jpg', './asset/anh_seven.jpg', './asset/anh_eight.jfif', './asset/anh_nine.jfif', './asset/anh_ten.png');
    for ($i = 0; $i < $result->num_rows; $i++) {
        $row = mysqli_fetch_array($result);
        echo "<tr><td colspan='2'>" . "<h2>" . $row['Ten_sua'] . "</h2>" . "</td></tr>"
            . "<tr>"
            . "<td>" . "<img style='width:100px' src=$hinh_anh[$i] alt='img'>" . "</td>"
            . "<td><b>Thành phần dinh dưỡng</b>"
            . "<p>" . $row['TP_Dinh_Duong'] . "</p>"
            . "<b>Lợi ích</b>"
            . "<p>" . $row['Loi_ich'] . "</p>"
            . "<p style='text-align: right'><b>Trọng lượng: </b>" . $row['Trong_luong'] . " gr - <b>Đơn giá: </b>" . $row['Don_gia'] . " VNĐ</p>"
            . "</td>"
            . "</tr>";
    }
}
?>
    </table>
    <?php
echo "<di>";
if ($_GET['page'] > 2)
    echo "<a href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 2) . "> << </a>";
if ($_GET['page'] != 1)
    echo "<a href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . "> < </a>";

for ($i = 1; $i <= $max_page_count; $i++) {
    if ($i == $_GET['page']) {
        echo '<b> ' . $i . ' </b>';
    }
    else
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "> " . $i . " </a>";
}

if ($_GET['page'] != $max_page_count)
    echo "<a href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . "> > </a>";
if ($_GET['page'] < $max_page_count - 2)
    echo "<a href =" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . "> >> </a>";
echo "</div>";
$result0->free();
$result->free();
$conn->close();
?>

</body>

</html>