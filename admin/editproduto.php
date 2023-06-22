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
              <form class="pt-3" action="../assets/php/produtos/editar.php" method="post">
                <?php
                  include ('../assets/php/banco.php');

                  $id = $_GET['id'];

                  $sql="select * from tbproduto where idpro='$id'";
                  $consulta=$conexao->query($sql);
                  $linha=$consulta->fetch_array(MYSQLI_ASSOC);

                  if($consulta){
                    if($consulta->num_rows>0){
                      echo '<div class="form-group">
                        <label for="usuario">ID</label>
                        <input type="text" class="form-control form-control-lg" name="idpro" id="idpro" readonly placeholder="Id do Usuário" value="'.$linha['idpro'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="nome" id="nome" required placeholder="Nome do Produto" value="'.$linha['nome'].'">
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="tipo" id="tipo">
                          <option value="hamburgueres">Hamburgueres</option>
                          <option value="pizzas">Pizzas</option>
                          <option value="pasteis">Pasteis</option>
                          <option value="aperitivos">Aperitivos</option>
                          <option value="sobremesas">Sobremesas</option>
                          <option value="bebidas">Bebidas</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="descricao" id="descricao" rows="5" data-ls-module="charCounter" required maxlength="300">'.$linha['descricao'].'</textarea>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="preco" id="preco" required placeholder="Nome de Usuário" value="'.$linha['preco'].'">
                      </div>
                      <div class="mt-3">
                        <a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn col-5" href="produto.php" style="margin-left: 1vw;">Voltar</a>
                        <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn col-5" id="btnAtt" style="margin-left: 2vw;">Atualizar</button>
                      </div>';
                    }
                  }
                ?>
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
      

    })
        
  </script>
</body>

</html>
