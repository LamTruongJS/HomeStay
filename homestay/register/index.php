<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="../asset/favicon.png" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <title>Đăng Kí</title>
</head>
<?php
if (isset($_POST['register'])) {
  $errPassword = '';
  $errEmail = '';
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  include '../config.php';
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if ($password !== $confirm_password) {
    $errPassword = 'Mật khẩu không trùng khớp !';
  }
  $sqlEmail = "SELECT * FROM user s  WHERE s.email ='$email'";
  $resultEmail = mysqli_query($conn, $sqlEmail);
  $num_rowsEmail = mysqli_num_rows($resultEmail);
  if ($num_rowsEmail != 0) {
    $errEmail = "Email đã tồn tại !";
  }
  if($num_rowsEmail == 0 && $password === $confirm_password) {
    $index='ID'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $sqlID = "SELECT ID FROM user";
    $resultID = mysqli_query($conn, $sqlID);
    $row = mysqli_fetch_array($resultID);
    while (strcmp($index, $row['ID']) == 0) {
      $index='ID'.rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    }
    $sql = "INSERT INTO user values('".$index."','".$username."','".$email."','".$password."','user')";
    $result = mysqli_query($conn, $sql);
    if($result){
      header('Location: /homestay/login/');
    }
    }
  }


?>

<body>
    <div class="container">
    <video class="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
    <source src="../asset/Luxury Travel Agency - Private Travel Designer - Bespoke Tours.mp4" type="video/mp4"/>
    </video>
        <form class="form__register" action="index.php" method="post">
            <a href="../login/" class="text__login">_Đăng Nhập_</a>
            <h4 class="form__register__title">Đăng Kí</h4>
            <div class="form__register__username">
                <p class="form__register__username--title">Tên của bạn</p>
                <input type="text" class="form__register__username--input" value='<?php if(isset($_POST['username'])) echo $_POST['username']; else echo '' ?>' name="username" required maxlength="50" />
            </div>
            <div class="form__register__email">
                <p class="form__register__email--title">Email của bạn</p>
                <input type="email" class="form__register__email--input" value='<?php if(isset($_POST['email'])) echo $_POST['email']; else echo '' ?>' name="email" required maxlength="50" />
            </div>
            <p class="mess_notifer"><?php if(isset($errEmail)) echo $errEmail; else echo '' ?></p>
            <div class="form__register__password">
                <p class="form__register__password--title">Mật khẩu</p>
                <input type="password" class="form__register__password--input" value='<?php if(isset($_POST['password'])) echo $_POST['password']; else echo '' ?>' name="password" required
                    maxlength="20" />
                <div class="form__register__password__icon">
                    <i class="far fa-eye eyes_password"></i>
                    <i class="far fa-eye-slash disable eyesHidden_password"></i>
                </div>
            </div>
            <div class="form__register__confirm__password">
                <p class="form__register__confirm__password--title">Nhập lại mật khẩu</p>
                <input type="password" class="form__register__confirm__password--input" value='<?php if(isset($_POST['confirm_password'])) echo $_POST['username']; else echo '' ?>' name="confirm_password" required
                    maxlength="20" />
                <div class="form__register__confirm__password__icon">
                    <i class="far fa-eye eyes_password_confirm"></i>
                    <i class="far fa-eye-slash disable eyesHidden_password_confirm"></i>
                </div>
            </div>
            <p class="mess_notifer"><?php if(isset($errPassword)) echo $errPassword; else echo '' ?></p>
            <button class="form__register__btn" type="submit" name='register'>Đăng Kí</button>
        </form>
    </div>

    <script src="../js/resgiterForm.js"></script>
</body>

</html>