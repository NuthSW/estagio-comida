<?php
  session_start();
?>

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
  <section id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>(88) 98936 4809</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Seg-Sex: 11:00 - 22:00</span></i>
    </div>
  </section>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Monte o seu pedido</h2>
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

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center mt-3">
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

        <form action="assets/php/finalizar.php" method="post"> 
          <div class="row menu-container">

            <?php
              include('assets/php/banco.php');
              $sql="select * from tbproduto";

              $consulta=$conexao->query($sql);

              if($consulta){
                if($consulta->num_rows>0){
                  while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                        echo '<div class="col-lg-6 menu-item filter-'.$linha['tipo'].'">
                        <input type="hidden" class="'.$linha['idpro'].'" value="'.$linha['nome'].'">
                        <div class="menu-content">
                        <label class="check">
                          <input type="checkbox" class="valor" name="produto[]" id="'.$linha['preco'].'" value="'.$linha['idpro'].'">
                          <div class="checkmark"></div>
                        </label>
                          <a href="#">'.$linha['nome'].'</a><span>R$'.$linha['preco'].'</span>
                        </div>
                        <div class="menu-ingredients">'.$linha['descricao'].'</div>
                        <div class="qty-input">
                        	<button class="qty-count qty-count--minus" data-action="minus" id="menos|'.$linha['idpro'].'" type="button">-</button>
                        	<input class="product-qty" type="number" name="qtd[]" id="'.$linha['idpro'].'" min="1" max="10" value="1">
                        	<button class="qty-count qty-count--add" data-action="add" id="mais|'.$linha['idpro'].'" type="button">+</button>
                        </div>  
                      </div>';
                  }
                }else{
                          echo '<p>Como chegamos aqui?</p>'  ;
                }
              }
            ?>
          </div>
          

        </div>
          <section class="inner-page">
            <div class="container">
              <h1 class="col-6 float-start" style="font-family: 'Poppins', sans-serif;">
                Total a pagar:
              </h1>
              <h1 class="float-end">R$<span id="resultado">0,00</span></h1>
            </div>
          </section>
          <hr>
          <div class="text-center m-4">
            <button type="button" class="button" id="btnFinalizar">
              <span class="button__text">
                Finalizar Compra
              </span>
              <svg class="button__svg" role="presentational" viewBox="0 0 600 600">
                <defs>
                  <clipPath id="myClip">
                    <rect x="0" y="0" width="100%" height="50%" />
                  </clipPath>
                </defs>
                <g clip-path="url(#myClip)">
                  <g id="money">
                    <path d="M441.9,116.54h-162c-4.66,0-8.49,4.34-8.62,9.83l.85,278.17,178.37,2V126.37C450.38,120.89,446.56,116.52,441.9,116.54Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                    <path d="M424.73,165.49c-10-2.53-17.38-12-17.68-24H316.44c-.09,11.58-7,21.53-16.62,23.94-3.24.92-5.54,4.29-5.62,8.21V376.54H430.1V173.71C430.15,169.83,427.93,166.43,424.73,165.49Z" fill="#699e64" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                  </g>
                  <g id="creditcard">
                    <path d="M372.12,181.59H210.9c-4.64,0-8.45,4.34-8.58,9.83l.85,278.17,177.49,2V191.42C380.55,185.94,376.75,181.57,372.12,181.59Z" fill="#a76fe2" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                    <path d="M347.55,261.85H332.22c-3.73,0-6.76-3.58-6.76-8v-35.2c0-4.42,3-8,6.76-8h15.33c3.73,0,6.76,3.58,6.76,8v35.2C354.31,258.27,351.28,261.85,347.55,261.85Z" fill="#ffdc67" />
                    <path d="M249.73,183.76h28.85v274.8H249.73Z" fill="#323c44" />
                  </g>
                </g>
                <g id="wallet">
                  <path d="M478,288.23h-337A28.93,28.93,0,0,0,112,317.14V546.2a29,29,0,0,0,28.94,28.95H478a29,29,0,0,0,28.95-28.94h0v-229A29,29,0,0,0,478,288.23Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                  <path d="M512.83,382.71H416.71a28.93,28.93,0,0,0-28.95,28.94h0V467.8a29,29,0,0,0,28.95,28.95h96.12a19.31,19.31,0,0,0,19.3-19.3V402a19.3,19.3,0,0,0-19.3-19.3Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                  <path d="M451.46,435.79v7.88a14.48,14.48,0,1,1-29,0v-7.9a14.48,14.48,0,0,1,29,0Z" fill="#a4bdc1" stroke="#323c44" stroke-miterlimit="10" stroke-width="14" />
                  <path d="M147.87,541.93V320.84c-.05-13.2,8.25-21.51,21.62-24.27a42.71,42.71,0,0,1,7.14-1.32l-29.36-.63a67.77,67.77,0,0,0-9.13.45c-13.37,2.75-20.32,12.57-20.27,25.77l.38,221.24c-1.57,15.44,8.15,27.08,25.34,26.1l33-.19c-15.9,0-28.78-10.58-28.76-25.93Z" fill="#7b8f91" />
                  <path d="M148.16,343.22a6,6,0,0,0-6,6v92a6,6,0,0,0,12,0v-92A6,6,0,0,0,148.16,343.22Z" fill="#323c44" />
                </g>
              </svg>
            </button>
          </div>
        </form>
    </section><!-- End Menu Section -->

    

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
  <script src="assets/js/qtyinput.js"></script>
  <script src="assets/sweetalert/sweetalert.min.js" ></script>

  <!-- Inicio do modal -->

  <div class="modal fade modal-lg" id="modal" > 
    <div class="modal-dialog modal-xl"> 
      <div class="modal-content"> 
          <div class="section-title text-center">
            <h2>Verifique o seu <span>pedido</span></h2>
          </div>
 <!--**********MONTA CORPO***********--> 
        <div class="modal-body" id="corpoModal">
          <!-- ======= Gallery Section ======= -->
          <div class="table-responsive text-nowrap col-12" style="transform: scale(1.1)">
            <table class="table">
              <thead>
                <tr>
                  <th colspan="3">Produto</th>
                  <th>Preço</th>
                  <th>Qtd.</th>
                </tr>
              </thead>
               <tbody class="table-border-bottom-0" id="tabelaMostrar">
               </tbody>
              </thead>
                  
            </table>
          </div>
              
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
        </div> 
        <div class="text-center"  >
            <button id="menu-btn" class="concluir" style="width: 50%; margin: 10px 0px">Concluir</button>
        </div>
 <!--**********MONTA RODAPE ***********--> 
      </div> 
      
      
    </div> 
  </div> 
  <!-- Fim do modal -->

  

  <script>
    $(document).ready(function() {
      let qtd = $('.product-qty').val();
      var mostrar = '';
        
      $(".valor").change(function() {
        var total = $('input[class="valor"]:checked').get().reduce(function(tot, al) {return tot + Number(al.id);}, 0)
        $('#resultado').html(total.toFixed(2))
      })//fim calculo de valor

      $('#btnFinalizar').click(function(){
        
        swal({
                title: "Deseja prosseguir?",
                text: "Você não poderá voltar pra essa tela novamente.",
                icon: "warning",
                buttons: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  $.post("assets/php/venda.php", function(retorno){
                    if(retorno != "erro"){
                    }else{
                      alert('erro');
                    }
                  })  

                  $("input:checked").each(function(){
                    let id = $(this).val();
                    let preco = $(this).attr('id');
                    let produto = $('.'+id).val();
                    let quantidade = $('#'+id).val();

                    mostrar += '<tr><td colspan="3">'+produto+'</td><td>'+preco+'</td><td>'+quantidade+'</td></tr>'
                    $("#tabelaMostrar").html(mostrar)

                    $('#modal').on('hide.bs.modal', function (event) {
                      mostrar = '';
                      $("#tabelaMostrar").html(mostrar)

                    })
                    $('.concluir').click(function(){
                      $.post("assets/php/finalizar.php", {id:id, quantidade: quantidade}, function(retorno){
                        if(retorno != "erro"){
                         swal({icon: 'success',
                             title: 'Sucesso! Compra autorizada.',
                             text: 'Já estamos preparando o seu pedido!',
                             buttons: false,
                         });
                        }else{
                          alert('erro');
                        }
                        setTimeout(function(){
                        window.location.assign("index.php");
                        }, 2000);
                      })  
                    })
                    
                    
                  });//fim each
                  
                  

                  $("#modal").modal('show')
                  $(".loader1").hide()
                  $(".spinnerContainer").hide()
                }
              });
              
        
        
        
        
      })
      
      
    })

  </script>

</body>

</html>