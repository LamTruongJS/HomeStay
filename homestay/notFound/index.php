<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />

    <link rel="stylesheet" href="../grid.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link rel="stylesheet" href="../font/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <title>404-Not Found</title>
   
</head>
<body>
        <?php

        include "../header/index.php";
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: /homestay/login');
        }
        ?>
        <h1 style="color:'rgb(118, 118, 118)'; margin-top:100px; width:100%; text-align:center">404-NOT FOUND</h1>
</body>
</html>