<?php

$servernameDB = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbnameDB = "quan_li_home_stay";
$conn = new mysqli($servernameDB, $usernameDB, $passwordDB, $dbnameDB);
mysqli_set_charset($conn, 'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
;
?>