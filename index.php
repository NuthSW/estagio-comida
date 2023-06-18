<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Delixioso - Início</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/loader.css" rel="stylesheet">

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
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>(88) 98936 4809</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Seg-Sex: 11:00 - 22:00</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.php">Delixioso</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Especial do dia</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Mais pedidos</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


      <?php
        if(isset($_SESSION['login'])){
          echo '<a href="assets/php/sair.php" class="book-a-table-btn">Sair&nbsp<i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>';
        }else{
          echo '<a href="assets/php/testasessao.php" class="book-a-table-btn">Entrar</a>';
        }
      ?>

      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content col-12">
                <h2 class="animate__animated animate__fadeInDown"> Restaurante <span>Delixioso</span></h2>
                <p class="animate__animated animate__fadeInUp">Tão gostoso que tira até a sua dicção</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Confira o Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content col-12">
                <h2 class="animate__animated animate__fadeInDown">Seja no restaurante</h2>
                <p class="animate__animated animate__fadeInUp">"O cliente é rei", essa é a nossa política.</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Confira o Menu</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content col-12">
                <h2 class="animate__animated animate__fadeInDown">Seja na sua casa</h2>
                <p class="animate__animated animate__fadeInUp">Temos a mesma política, afinal um Rei não comeria uma comida fria, concorda?</p>
                <div>
                  <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Confira o Menu</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3><strong>Conheça a Delixioso! </strong>Comida tão gostosa que tira até a sua dicção.</h3>
              <p>
                Começando pequena como qualquer outra empresa da rede de comidas, mas de grão em grão a galinha enche o papo, não é mesmo?
              </p>
              <p class="fst-italic">
                Com suor, dedicação e, claro, muito amor, a Delixioso consegue uma larga quantidade de clientes diariamente, mesmo funcionando só nos dias da semana!
                Já ficou com aquele pensamento de que Sobral só tem dois lugares para sair com a galera? Não mais!<br> Com um ambiente agradável e confortável, a Delixioso
                cria uma atmosfera incrível para todo tipo de ocasião.<br> Para celebrar a abertura do nosso site, reparamos um vídeo especial para que se familiarizem
                com o local e a nossa equipe nota 10. 
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ambiente externo e interno.</li>
                <li><i class="bx bx-check-double"></i> Apresentação da equipe.</li>
                <li><i class="bx bx-check-double"></i> Guia do nosso novo site.</li>
              </ul>
              <p>
                Esperamos que aproveite o site o tanto quanto aproveitamos entregar os seus pedidos, afinal, o site é para isso😉
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2><span>Nosso Incrível Menu</span></h2>
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
        <div class="text-center">
          <a href="assets/php/testasessao.php">
            <button id="menu-btn" type="submit">Fazer Pedido?</button>
          </a>
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Todo dia um <span>Especial</span></h2>
          <p>Todo dia você ganha um desconto em algum pedido.</p>
        </div>

        <div class="row g-0" id="Especial">

          <div class="card-especial">
            <div class="content-especial">
              <div class="back">
                <div class="back-content" id="imagem">
                  <img src="assets/img/specials/gift2.png" id="segunda" style="width:100px;">
                  <strong>Segunda-feira</strong>
                </div>
              </div>
              <div class="front">
                
                <div class="img">
                  <img src="assets/img/specials/especial-1.jpg" style="width:300px;">
                </div>
          
                <div class="front-content">
                  <small class="badge">Corbucci</small>
                  <div class="description-especial">
                    <div class="title-especial">
                      <p class="title-especial">
                        <strong>DESAFIO</strong>
                      </p>
                    </div>
                    <p class="card-footer-especial">
                      Se terminar em 20 min NÃO PAGA.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-especial">
            <div class="content-especial">
              <div class="back">
                <div class="back-content">
                  <img src="assets/img/specials/gift2.png" id="terca" style="width:100px;">
                  <strong>Terça-feira</strong>
                </div>
              </div>
              <div class="front">
                
                <div class="img">
                <img src="assets/img/specials/especial-2.jpg" style="width:300px;">
                </div>
          
                <div class="front-content">
                  <small class="badge">Pizzas</small>
                  <div class="description-especial">
                    <div class="title-especial">
                      <p class="title-especial">
                        <strong>DESCONTO</strong>
                      </p>
                    </div>
                    <p class="card-footer-especial">
                      5% em todas as pizzas. Exceto doces.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-especial">
            <div class="content-especial">
              <div class="back">
                <div class="back-content">
                  <img src="assets/img/specials/gift2.png" id="quarta" style="width:100px;">
                  <strong>Quarta-feira</strong>
                </div>
              </div>
              <div class="front">
                
                <div class="img">
                <img src="assets/img/specials/especial-3.jpg" style="width:300px;">
                </div>
          
                <div class="front-content">
                  <small class="badge">X-Tudão</small>
                  <div class="description-especial">
                    <div class="title-especial">
                      <p class="title-especial">
                        <strong>BÔNUS</strong>
                      </p>
                    </div>
                    <p class="card-footer-especial">
                      Acompanha batata e refri lata
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-especial">
            <div class="content-especial">
              <div class="back">
                <div class="back-content">
                  <img src="assets/img/specials/gift2.png" id="quinta" style="width:100px;">
                  <strong>Quinta-feira</strong>
                </div>
              </div>
              <div class="front">
                
                <div class="img">
                <img src="assets/img/specials/especial-4.jpg" style="width:300px;">
                </div>
          
                <div class="front-content">
                  <small class="badge">Pizzas doces</small>
                  <div class="description-especial">
                    <div class="title-especial">
                      <p class="title-especial">
                        <strong>DESCONTO</strong>
                      </p>
                    </div>
                    <p class="card-footer-especial">
                      Todas as pizzas com 5% de desconto.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card-especial">
            <div class="content-especial">
              <div class="back">
                <div class="back-content">
                  <img src="assets/img/specials/gift2.png" id="sexta" style="width:100px;">
                  <strong>Sexta-feira</strong>
                </div>
              </div>
              <div class="front">
                
                <div class="img">
                <img src="assets/img/specials/especial-5.jpg" style="width:300px;">
                </div>
          
                <div class="front-content">
                  <small class="badge">Tortas</small>
                  <div class="description-especial">
                    <div class="title-especial">
                      <p class="title-especial">
                        <strong>ESPECIAL</strong>
                      </p>
                    </div>
                    <p class="card-footer-especial">
                      Todas as tortas com 7% de desconto.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/specials/especial-1.jpg" class="testimonial-img" alt="">
                <h3>Corbucci</h3>
                <h4>O Monstro é preparado na cozinha</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Um hambúrguer com três carnes bovinas grelhadas de 113g, pão com gergelim, queijo derretido, fatias de bacon crocante e o exclusivo molho Delixioso.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <br>
                  Tudo isso para ver se VOCÊ tem estômago o suficiente pra uma belezura dessas.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/specials/especial-6.avif" class="testimonial-img" alt="">
                <h3>Gostosão</h3>
                <h4>Já viu nome combinar com a aparência?</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Copo feito com nosso delicioso mousse de Ninho, massa de brownie, brigadeiro cremoso, morangos selecionados e creme quatro leites
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <br>
                  Uma sobremesa imperdível, não experimentar deveria ser considerado crime.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/specials/especial-3.jpg" class="testimonial-img" alt="">
                <h3>X-Tudão</h3>
                <h4>Perfeitamente balanceado, como tudo deveria ser...</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Um hambúrguer com uma carne bovina grelhada de 113g, pão com gergelim, queijo derretido, onion rings , fatias de bacon crocante, pimenta-jalapeño, salada fresca (alface e tomate), o exclusivo molho furioso e maionese
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <br>
                  Para você que quer de tudo um pouco.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/specials/especial-4.jpg" class="testimonial-img" alt="">
                <h3>Pizza de Nutella</h3>
                <h4>Não colocando abacaxi ta tudo bem...</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nutella com leite ninho, confeito e morangos(opcional)
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <br>
                  Fica ótimo com alguns morangos.
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/specials/especial-5.jpg" class="testimonial-img" alt="">
                <h3>Torta de Brownie</h3>
                <h4>Bolo? Isso é muito padrão</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Torta feita com massa de Brownie com cobertura de creme quatro leites, brigadeiro gourmet e morangos selecionados
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  <br>
                  Quer comer um bolo, mas quer algo diferente? Nesse caso, essa torta é perfeita pra você.
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nossa <span>Localização</span></h2>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?width=100%25&amp;height=350&amp;hl=en&amp;q=Rua%20Humberto%20Lopes,%20526+(Delixioso)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
      </div>

      
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Delixioso</h3>
              <p>
                Rua dos bobos <br>
                Ceará, Brasil<br><br>
                <strong>Contato:</strong> (88) 98936 4809<br>
                <strong>Email:</strong> delixioso@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-tiktok"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Eventos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aniversários</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Delivery</a><img src="assets/img/new.png" alt="" style="width: 40px; margin: 0px 5px;"></li>
            </ul> 
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Vire membro</h4>
            <p>Ao virar membro, você recebe informações sobre promoções, eventos e entre outros benefícios</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Confirmar">
            </form>

          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Delixioso</span></strong>. All Rights Reserved
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

   <!-- Inicio do modal -->

   <div class="modal fade" id="modal" > 
    <div class="modal-dialog"> 
      <div class="modal-content"> 
 <!--**********MONTA CORPO***********--> 
        <div class="modal-body" id="corpoModal">
          <div class="loader1">
          </div>
          <div class="spinnerContainer">
            <div class="loader">
              <p>carregando</p>
              <div class="words">
                <span class="word">comidas</span>
                <span class="word">imagens</span>
                <span class="word">texto</span>
                <span class="word">pedido</span>
                <span class="word">página</span>
              </div>
            </div>
          </div>

          <div class="finalizar">
            
          </div>
        </div> 
 <!--**********MONTA RODAPE ***********--> 
      </div> 
    </div> 
  </div> 
  <!-- Fim do modal -->

  <script>
    $('document').ready(function(){
      let data = new Date();
      let weekday = data.getDay()+1; // 1

      $('#menu-btn').click(function(){
        $("#modal").modal('show')
      })

      if(weekday==2){
        $('#segunda').attr('src','assets/img/specials/gift1.png')
      }
      if(weekday==3){
        $('#terca').attr('src','assets/img/specials/gift1.png')
      }
      if(weekday==4){
        $('#quarta').attr('src','assets/img/specials/gift1.png')
      }
      if(weekday==5){
        $('#quinta').attr('src','assets/img/specials/gift1.png')
      }
      if(weekday==6){
        $('#sexta').attr('src','assets/img/specials/gift1.png')
      }
    })
  </script>
</body>

</html>