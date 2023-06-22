<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Delixioso Admin</title>
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
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Gestão</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Usuários</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="produto.php">
            <i class="mdi mdi-basket menu-icon"></i>
            <span class="menu-title">Produtos</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo2.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          </div>
          <?php
            $nome=explode(" ", $_SESSION['nome']);
            echo '<h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Bem vindo, '.$nome[0].' '.$nome[1].'</h4>';
          ?>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        
          <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
              <form name="busca" id="busca" action="javascript:func()" method="post">
                <div class="input-group">
                  <input type="text" class="form-control" name="texto" id="texto" placeholder="Pesquisa..." aria-label="search" aria-describedby="search">
                </div>
              </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                  <?php
                    echo '<span class="nav-profile-name">'.$_SESSION['nome'].'</span>';
                  ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="../assets/php/sair.php">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </div>
        
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <a href="addpro.php" class="m-4 float-end" style="width: 8%;">
                  <button type="submit" class="btn btn-success" title="Adcionar" id="adcionar" style="color:white;font-weight:600;font-size:14pt;"><i class="mdi mdi-hospital m-1" style="color: #fff;"></i>Novo</button>
                </a>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table">
                      <thead class="text-center">
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Produto
                          </th>
                          <th>
                            Tipo
                          </th>
                          <th>
                            Descricao
                          </th>
                          <th>
                            Preco
                          </th>
                          <th>
                            Ações
                          </th>
                        </tr>
                      </thead>
                      <tbody id="tabela">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="../assets/sweetalert/sweetalert.min.js" ></script>
  <script src="../assets/jquery3/jquery.js"></script>
  <!-- End own json files-->

  <!-- Inicio do modal -->
  <div class="modal fade" id="modal" > 
    <div class="modal-dialog"> 
      <div class="modal-content"> 
  <!-- ************ MONTA CABEÇALHO ******************--> 
        <div class="modal-header" style="display: flex;justify-content: flex-end;"> 
          <button type="button" class="close" id="fecharModal" data-dismiss="modal"> 
          <span>X</span></button> 
        </div> 
 <!--********** MONTA CORPO***********--> 
        <div class="modal-body" id="corpoModal">
        </div> 
 <!--********** MONTA RODAPE ***********--> 
      </div> 
    </div> 
  </div> 
  <!-- Fim do modal -->

  <script>
    $(document).ready(function(){
      let texto = $('#texto').val();
      

      $.post("../assets/php/produtos/busca.php", {texto:texto}, function(retorno){
        if(retorno != "erro"){
         $('#tabela').html(retorno);

        }
      })//fim busca primaria


      $('#busca').submit(function(){
        texto = $('#texto').val();
        $.post("../assets/php/produtos/busca.php", {texto:texto}, function(retorno2){
          if(retorno2 != "erro"){
           $('#tabela').html(retorno2);

          }

        })

      })//fim busca submit


      $('#tabela').on('click','button',function(){
        let acao = $(this).attr('id');

        if(acao == 'mostrar'){
          $("#modal").modal('show')

          //Início do fechar modal
          $("#fecharModal").click(function(){
            $("#modal").modal('hide')
          })//Fim do fechar modal

          let id = $(this).val();
          $.post("../assets/php/produtos/mostrar.php", {id:id}, function(retorno3){
            if(retorno3 != "erro"){
              $('#corpoModal').html(retorno3);

            }

          })

        }//fim do mostrar

        if(acao == 'excluir'){
          swal({
            title: "Excluir?",
            text: "Essa ação não poderá ser desfeita.",
            icon: "warning",
            buttons: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              let id = $(this).val();
              $.post("../assets/php/produtos/excluir.php", {id:id}, function(retorno4){
               if(retorno4 != "erro"){
                swal({icon: 'success',
                    title: 'Sucesso!',
                    text: 'Perfil excluído com sucesso',
                    buttons: false,
                });
                setTimeout(function(){
                    window.location.reload();
                 }, 1300);
               }

              })

            }

          });

        }//fim do excluir


      })//fim #tabela

      <?php
          if(isset($_GET['passou'])){
            if($_GET['passou']=='edit'){
              echo "swal({icon: 'success',
                title: 'Sucesso!',
                text: 'Produto alterado com sucesso',
                buttons: true,
                });";
                $_GET['passou']=='';
            }else if($_GET['passou']=='addpro'){
              echo "swal({icon: 'success',
                title: 'Sucesso!',
                text: 'Produto adcionado com sucesso',
                buttons: true,
                });";
                $_GET['passou']=='';
            }
          }else{
            echo '';
          }
      ?>
      


    })
  </script>
</body>

</html>