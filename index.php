<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FGSlame</title>
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

<body>
  
  <?php
    session_start();
    $con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
          
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color: #31345A  ;">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 style="font-weight:700;  font-family: 'Montserrat', sans-serif; text-transform: capitalize;"><a href="index.php" style="color: Black;">FGSlame</a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul >

             <?php
            if(isset($_SESSION['user_id'])) {
                $select = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
                $query = mysqli_query($con, $select);
                $select_user = mysqli_fetch_assoc($query);
                echo '<li><a class="nav-link scrollto" href="events.php" style="color: #7c77b9;">Мероприятия</a></li>';
                echo '<li><a class="nav-link scrollto" href="peoples.php" style="color: #7c77b9;">Волонтёры</a></li>';
                echo '<li><a class="nav-link scrollto" href="chat.php" style="color: #7c77b9;">Чат</a></li>';
                echo '<li><a class="nav-link scrollto" href="logout.php" style="color: #7c77b9;">Выйти</a></li>';
                
                } else {
          ?>
              <li><a style="color: #7c77b9;"  class="nav-link scrollto" href="loginstr.php">Войти</a></li>
              <li><a  style="color: #7c77b9;" class="nav-link scrollto" href="signUPstr.php">Регистрация</a></li>

              <?php 
                } 
              ?>
              
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center" style="background-image: url('asd.png'); height: 800px; padding-top: 0px;">
    <div class="container  text-md-left" data-aos="fade-up">
      <?php 
         if(isset($_SESSION['user_id'])) {
      ?>
      <h1><?php echo "Привет, " . $select_user['name'] . "!";?></h1>
      <h2></h2>
      <?php 
                }else{
      ?>
      <h1>FGSlame</h1>
      <h2>рекомендуют 9,5/10 человек</h2>
      <?php 
                }
      ?>
      
      
    </div>
  </section><!-- End Hero -->

  <main id="main" class="" style="background-color: #435EA8;">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="abdg.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0" style="">
            <h3 data-aos="fade-up" class="" style="font-family: 'Montserrat', sans-serif; font-weight: 700;" >Help Squad - это сайт</h3>
            <p data-aos="fade-up" class="mns-bold">
              здесь вы найдёте:
            </p>

            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4 class="" style="font-family: 'Montserrat', sans-serif; font-weight: 400;">Рейтинг</h4>
              <p></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4 class="" style="font-family: 'Montserrat', sans-serif; font-weight: 400;">Мероприятия</h4>
              <p></p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <h4 class="" style="font-family: 'Montserrat', sans-serif; font-weight: 400;">форму с подачей резюме</h4>
              <p></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     

    

    

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Help Squad</h3>
              <p>
                
                <strong>Телефон:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Разделы Сайта</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Главная</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">О нас</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signUP.php">Стать волонтёром</a></li>
              
            </ul>
          </div>

          

          

        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js">
    let menuC = document.querySelector('.menuC');
    let menuS = document.querySelector('.menuS');
    let mainMenu = document.querySelector('.mainmenu');

    menuC.onclick = function(){
      alert('DDDDDDDDDDDDDDDDD')
    }
  </script>

  

</body>

</html>