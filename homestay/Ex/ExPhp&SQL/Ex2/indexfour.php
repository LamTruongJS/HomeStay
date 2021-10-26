<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="./style/four.css">
    <title>Thông tin khách hàng</title>
</head>

<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quan_ly_ban_sua";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die ('Không thể kết nối tới database'. mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
//phan trang
$rowsPerPage=5;
if ( ! isset($_GET['page']))
{
    $_GET['page'] = 1;
}
$offset =($_GET['page']-1)*$rowsPerPage;

$query="SELECT * from hang_sua hs JOIN sua s on hs.Ma_hang_sua =s.Ma_hang_sua JOIN loai_sua ls on s.Ma_loai_sua= ls.Ma_loai_sua LIMIT $offset, $rowsPerPage";
$result = mysqli_query($conn,$query);
$numRows= mysqli_num_rows($result);
$maxPage = ceil($numRows / $rowsPerPage);

//print_r(mysqli_fetch_array($result));
if($numRows<>0)
{
    echo "<p align='center'><font size='5' color='orangered'> THÔNG TIN SỮA</font></P>";
    echo "<table align='center' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
    echo "<tr>
	    	<th>SO TT</th>
	     	<th>Tên Sua</th>
	    	<th>Hang Sua</th>
	    	<th>Loai Sua</th>
			<th>Trong Luong</th>
			<th>Don gia</th>
		
		</tr>";
    
    $index=1;
    for($i=0; $i< $result->num_rows; $i++){
        
        $row = mysqli_fetch_array($result);
        echo $i % 2 == 0 ? "<tr style='background-color:pink'>" : "<tr style='color:#e74c3c'>";
        echo "<td>".$index."</td>";
        echo "<td>" . $row['Ten_sua'] . "</td>";
        echo "<td>" . $row['Ten_hang_sua'] . "</td>";
        echo "<td>" . $row['Ten_loai'] . "</td>";
        echo "<td>" . $row['Trong_luong'] . "</td>";
        echo "<td>" . $row['Don_gia'] . "</td>";
        echo "</tr>";
        $index++;
    }
    echo"</table>";
    $re = mysqli_query($conn, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    echo "<div>";
    if ($_GET['page'] > 2){
        echo "<a  href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-2)."> << </a> "; //gắn thêm nút Back
    }
    if ($_GET['page'] > 1){
        echo "<a  href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> < </a> "; //gắn thêm nút Back
    }
    for ($i=1 ; $i<=$maxPage ; $i++)
    {
        if ($i == $_GET['page'])
        {
            echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
        }
        else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i."> ".$i."</a> ";
    }
    if ($_GET['page'] < $maxPage) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . "> > </a>";  //gắn thêm nút Next
    }
    if ($_GET['page'] < $maxPage-1) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 2) . "> >> </a>";  //gắn thêm nút Next
    }
    echo "</div>";
//    echo 'Tong so trang la: '.$maxPage;

}
mysqli_close($conn);
?>
</body>

</html>