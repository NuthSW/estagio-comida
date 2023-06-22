<?php
    include('../banco.php');

    $texto = $_POST['texto'];

    $sql = "select * from tbproduto where nome like '%$texto%'";
    $consulta = $conexao->query($sql);
    if($consulta){
      if($consulta -> num_rows > 0 ){
        while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
              
              echo '<tr>
                  <td>'.$linha['idpro'].'</td>
                  <td>'.$linha['nome'].'</td> 
                  <td>'.$linha['tipo'].'</td>
                  <td>'.$linha['descricao'].'</td>
                  <td>'.$linha['preco'].'</td> 
                  <td class="col-2 text-center">
                    <button type="submit" class="btn btn-info m-1" title="Visualizar" id="mostrar" value="'.$linha['idpro'].'"><i class="mdi mdi-account-card-details m-1" style="color: #fff;"></i></button>
                    <a href="editproduto.php?id='.$linha['idpro'].'"><button type="submit" class="btn btn-primary m-1" title="Editar" id="editar" value="'.$linha['idpro'].'"><i class="mdi mdi-border-color m-1 style="color: #fff;"></i></button></a>
                    <button type="submit" class="btn btn-danger m-1" title="Deletar" id="excluir" value="'.$linha['idpro'].'"><i class="mdi mdi-delete m-1 style="color: #fff;"></i></button>
                  </td>
                </tr>';

        }
      } else {
        echo '<tr style="text-align: center;"><td colspan="6">Sem resultado</td></tr>';
      }
    }
?>