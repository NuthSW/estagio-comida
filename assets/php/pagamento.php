<?php
  include('banco.php');
  

  <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                      </tr>
                    </thead>
                    <?php
                      include('banco.php');
                        
                      $texto=$_POST['texto'];

                      $sql="select tbitemvenda.idvenda, tbproduto.nome as produto, tbproduto.preco from tbitemvenda
                            inner join tbproduto on(tbproduto.idpro = tbitemvenda.idpro)
                            where idvenda='$_SESSION['idvenda']'";
                      $consulta=$conexao->query($sql);

                      if($consulta){
                        if($consulta->num_rows>0){
                          while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                            echo '<tbody class="table-border-bottom-0">
                                    <tr>
                                      <td>'.$dados['produto'].'</td>
                                      <td>'.$dados['preco'].'</td>
                                      <td class="col-2">
                                        <a href="editaluno.php?id='.$linha['codaluno'].'">
                                          <button type="submit" class="btn btn-info"><i class="bx bx-edit-alt me-1"></i>Editar</button>
                                        </a>
                                        <a href="deletealuno.php?id='.$linha['codaluno'].'">
                                          <button type="submit" class="btn btn-danger"><i class="bx bx-trash me-1"></i>Delete</button>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>';
                          }
                        }else{
                        
                        }
                      }
              
                  ?>
                </table>
              </div>



              
?>
