<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Чат</title>
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

 
</head >

<body style="background-color: #435EA8  ;">
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
          <li><a class="nav-link scrollto" href="form_post_add.php" >Написать</a></li>
          <li><a class="nav-link scrollto" href="index.php" style="color: red;">На главную</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div style="height: 50px;"></div>

    <?php 
          $get_all_posts_query = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.post_id DESC";
          $posts_results = mysqli_query($con, $get_all_posts_query); 
        ?>
        <?php 
          for($i = 0; $i < mysqli_num_rows($posts_results); $i++) {
              $post = mysqli_fetch_assoc($posts_results);
        ?>  
      <!--пост-->
      <div class="border bg-dark" style="width: 700px; margin-top: 50px; margin-left: 30px; ">
        <div class="">
          <div class="">
            <p class="" style="background-color: grey;"><?php echo $post['name']; ?></p>
            <p class="" style="color: white;"><?php echo $post['text'] ?></p>
          </div>
        </div>
        <div class="">
          <p></p>
          <img src=" <?php echo $post['image'] ?>" alt="" class="" style="width: 250px;">
        </div>

        <div class="d-flex">
          <div>
            <form action="del.php" method="POST">
                <input type="" name="id" value="<?php echo $post['post_id']; ?>" style="display: none;">
                <button style="height:50px; width:50px; background-image:url(del.png); background-size:100%;">
                  
                </button>
            </form>
          </div>
          <div>
            <form method="POST" action="UPD_form.php">
              <input type="" name="id" value="<?php echo $post['post_id']; ?>" style="display: none;">
              <button style="height:50px; width:50px; background-image:url(edit.png); background-size:100%;">
                
              </button>
            </form>
          </div>
        </div>


      </div>
<?php } ?>

</body>
</html>