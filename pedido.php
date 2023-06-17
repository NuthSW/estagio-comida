<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delixioso - Monte seu Pedido</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
    </div>
  </section>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Faça seu pedido</h2>
          <ol>
            <li><a href="index.php">Início</a></li>
            <li>Pedido</li>
          </ol>
        </div>
        <hr>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section id="pedido" class="menu">
      <div class="container">

        <div class="section-title">
          <h2><span>Monte o seu pedido</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active" id="todos">Todos</li>
              <li data-filter=".filter-aperitivos" id="aperitivos">Aperitivos</li>
              <li data-filter=".filter-pizzas" id="pizzas">Pizzas</li>
              <li data-filter=".filter-hamburgueres" id="hamburgueres">Hambúrgueres</li>
              <li data-filter=".filter-pasteis" id="pasteis">Pastéis</li>
              <li data-filter=".filter-sobremesas" id="sobremesas">Sobremesas</li>
              <li data-filter=".filter-bebidas" id="bebidas">Bebidas</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">
          
          <?php
            include('assets/php/banco.php');
            $sql="select * from tbproduto";

            $consulta=$conexao->query($sql);

            if($consulta){
              if($consulta->num_rows>0){
                while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                      echo '<div class="col-lg-6 menu-item filter-'.$linha['tipo'].'">
                      <div class="menu-content">
                      <label class="check">
                        <input type="checkbox">
                        <div class="checkmark"></div>
                      </label>
                        <a href="#">'.$linha['nome'].'</a><span>R$'.$linha['preco'].'</span>
                      </div>
                      <div class="menu-ingredients">'.$linha['descricao'].'</div>
                    </div>';
                }
              }else{
                        echo '<p>Como chegamos aqui?</p>'  ;
              }
            }
          ?>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Delicious</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/jquery3/jquery.js"></script>
  <script src="assets/js/menu.js"></script>

</body>

</html>