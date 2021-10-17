<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="../Css/admin.css">
    <link rel="stylesheet" href="../Css/home.css">
    <title>Author</title>
</head>
<body>
    <!-- header-->
  <nav class="sb-topnav navbar navbar-expand navbar-light bg-light sticky-top">
    <!-- logo Book-->
    <a class="navbar-brand ps-3" href="#">
      <img src="../../asset/logo.PNG" class="img_logo" alt="logoBook">
    </a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
 
    
    </form>
    <!-- Navbar Dropdown-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown justify-content">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
      <nav class="row container m-0 mt-4"> 
          <nav class="col-md-3">
          <div class="list_item_2" id="B">
                <a href="#B" class="list-group-item list-group-item-action active list_2 bg-white text-muted">Accounts</a>
                <div class="item_2">
                  <a href="../ad_acccounts/User.php" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Users</a>
                  <a href="../ad_acccounts/Admins.php" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Admins</a>
                  
                </div>
              </div>
            <div class="list-group bg-light">
              <div class="list_item_1" id="A">
                <a href="#A" class="list-group-item list-group-item-action active list_1 bg-white text-muted" aria-current="true">HomeStay</a>
                <div class="item_1">
                  <a href="../ad_homestay/" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;HomeStay</a> 
                  <a href="../ad_city/" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Thành Phố</a>
                  <a href="../ad_typeHomestay/" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Loại HomeStay</a>
                </div>
              </div>
            
              <!-- <div class="list_item_3" id="C">
                <a href="#C" class="list-group-item list-group-item-action active list_3 bg-white text-muted" aria-current="true">
                  Statistical
              </a>
                <div class="item_3">
                  <a href="../Statistical/Views.html" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Views</a>        
                  <a href="../Statistical/Books.html" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Books</a>
                  <a href="../Statistical/Turnover.html" class="list-group-item list-group-item-action text-muted">&emsp;&emsp;Turnover</a>
                 
                </div>
              </div> -->
          </div>
        </div>
      </nav>
    
</body>
</html>