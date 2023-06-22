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
              <h2>Atualizar Usuário</h2>
              <form class="pt-3" action="../assets/php/cliente/editar.php" method="post">
                <?php
                  include ('../assets/php/banco.php');

                  $id = $_GET['id'];

                  $sql="select * from tbcliente where idcli='$id'";
                  $consulta=$conexao->query($sql);
                  $linha=$consulta->fetch_array(MYSQLI_ASSOC);

                  if($consulta){
                    if($consulta->num_rows>0){
                      echo '<div id="fase1">
                      <div class="form-group">
                        <label for="usuario">ID</label>
                        <input type="text" class="form-control form-control-lg" name="idcli" id="idcli" readonly placeholder="Id do Usuário" value="'.$linha['idcli'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="nome" id="nome" placeholder="Nome de Usuário" value="'.$linha['nome'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="cpf" id="cpf" placeholder="999.999.999-99" value="'.$linha['cpf'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="fone" id="fone" placeholder="(99) 99999-9999" value="'.$linha['fone'].'">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" value="'.$linha['email'].'">
                      </div>
                      <div class="form-group">
                      <label for="usuario">Senha</label>
                        <input type="text" class="form-control form-control-lg" name="senha" id="senha" placeholder="**********" value="'.$linha['senha'].'">
                      </div>
                      <div class="mt-3">
                        <a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn col-5" href="index.php" style="margin-left: 1vw;">Voltar</a>
                        <button type="button" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn col-5" href="index.html" id="btnProx" style="margin-left: 2vw;">Próximo</button>
                      </div>
                    </div>
                    <div id="fase2">
                      <div class="form-group">
                      <label for="usuario">CEP</label>
                        <input type="text" class="form-control form-control-lg" name="cep" id="cep" placeholder="99999-999" value="'.$linha['cep'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="estado" id="estado" placeholder="Estado" value="'.$linha['estado'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="cidade" id="cidade" placeholder="Cidade" value="'.$linha['cidade'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="endereco" id="endereco" placeholder="Endereço" value="'.$linha['endereco'].'">
                      </div>
                      <div class="form-group col-3" style="float: left;">
                        <input type="text" class="form-control form-control-lg" name="numero" id="numero" placeholder="Nº" value="'.$linha['numero'].'">
                      </div>
                      <div class="form-group col-8" style="float: left;margin-left: 8%;">
                        <input type="text" class="form-control form-control-lg" name="bairro" id="bairro" placeholder="Bairro" value="'.$linha['bairro'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="comp1" id="comp1" placeholder="Complemento 1" value="'.$linha['comp1'].'">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="comp2" id="comp2" placeholder="Complemento 2" value="'.$linha['comp2'].'">
                      </div>
                      <div class="mt-3">
                        <a class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn col-5" id="btnAnt" style="margin-left: 1vw;">Anterior</a>
                        <button type="submit" class="btn btn-block btn-warning btn-lg font-weight-medium auth-form-btn col-5" id="btnAtt" style="margin-left: 2vw;">Atualizar</button>
                      </div>
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
  <!--end own inserts-->

  <script>
    $(document).ready(function(){
      $("#fone").inputmask("(99) 99999-9999");
      $("#cpf").inputmask("999.999.999-99");
      $("#cep").inputmask("99999-999");

      $('#fase2').hide();

      $('#btnProx').click(function(){
          $('#fase1').fadeOut().hide();
          $('#fase2').fadeIn();
      })//end btnProx click

      $('#btnAnt').click(function(){
          $('#fase2').fadeOut().hide();
          $('#fase1').fadeIn();
      })//end btnAnt click

      /*$('#btnAtt').click(function(){
        let id = $('#id').val();
        $.post('../php/cliente/editar.php',{id: id,nome: nome,cpf: cpf,fone: fone,email: email,senha: senha,cep: cep,estado: estado,cidade: cidade,endereco: endereco,
        numero: numero,bairro: bairro,comp1: comp1,comp2: comp2},
        function(retorno){
            if(retorno != 'erro'){
              alert(retorno)
            
            }//fim if
        
        })//fim post
      })*/
      

    })
        
  </script>
</body>

</html>
