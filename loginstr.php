<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HelpSquad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

 
</head>

<body style="background-color: #435EA8; ">
  
  <?php
    session_start();
    $con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
          
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color: #31345A;">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 style="font-weight:700;  font-family: 'Montserrat', sans-serif; text-transform: capitalize;"><a href="index.php" style="color: black">HelpSquad</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul >
          <li><a class="nav-link scrollto" href="index.php" style="color: #7c77b9;">На главную</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!--   form   --><!--   form   --><!--   form   --><!--   form   --><!--   form   -->
  <div class="col-12 d-flex" style="background-color: #c7d66d63;">
  
      <div style="height: 830px;" class="col-4">
           
    </div>
    <div style="height: 830px; padding-top: 300px;" class="col-4">
      <h1 style="color: #7c77b9; margin-left: 170px;">Вход</h1>
      <form  method="POST" action="loginbd.php">
              <input class="from-control w-100 mt-2 inpts mns-regular" placeholder="    Введите Email" type="email" name="email">
              <input class="from-control w-100 mt-2 inpts mns-regular" placeholder="    Введите Пароль" type="password" name="password">
              <!-- <select name="status">
                <option>Статус</option>
                <option value="1">Доброволец</option>
                <option value="2">Службы</option>
                <option value="3">Клиент</option>
              </select> -->
              <div class="row">
              <div class="col-4"></div>
              <div class="col-4">
                <button class="btn mns-bold bg-warning inpts mt-4">Войти</button>
              </div>
              <div class="col-4"></div>
            </div>
            </form>
    </div>
    <div style="height: 830px;" class="col-4"></div>
    
  </div>



</body>
</html>