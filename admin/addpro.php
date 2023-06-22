<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h2>Atualizar Produto</h2>
              <form class="pt-3" action="../assets/php/produtos/adcionar.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nome" id="nome" required placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                  <select class="form-control" name="tipo" id="tipo">
                    <option value="hamburgueres">Hamburguer</option>
                    <option value="pizzas">Pizza</option>
                    <option value="pasteis">Pastel</option>
                    <option value="aperitivos">Aperitivo</option>
                    <option value="sobremesas">Sobremesa</option>
                    <option value="bebidas">Bebida</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="descricao" id="descricao" rows="5" placeholder="Descrição do Produto" data-ls-module="charCounter" required maxlength="300"></textarea>
                  <div class="row">
                  <div class="form-group mt-1 ls-prefix-group" id="divCont">Caracteres restantes: <span class="cont">300</span></div>
                </div> 
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="preco" id="preco" required placeholder="Preço">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn col-5" href="produto.php" style="margin-left: 1vw;">Voltar</a>
                  <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn col-5" id="btnAtt" style="margin-left: 2vw;">Adcionar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <script src="../assets/sweetalert/sweetalert.min.js" ></script>
  <script src="../assets/jquery3/jquery.js"></script>
  <script src="../assets/js/geral.js"></script>
  <script src="../assets/js/masks/jquery.inputmask.js" type="text/javascript"></script>
  <script src="../assets/js/masks/jquery.maskMoney.js" type="text/javascript"></script>
  <!--end own inserts-->

  <script>
    $(document).ready(function(){
      $("#preco").maskMoney({affixesStay: false});

      $('#descricao').keyup(function(){
        let max = 300;
        let disponivel = max - $(this).val().length;

        if(disponivel<0){
          let textoDelimit = $(this).val().substr(0,max);
          $(this).val(textoDelimit);
          let disponivel = 0;
        }
        $('.cont').text(disponivel);
      })
      

    })
        
  </script>
</body>

</html>
