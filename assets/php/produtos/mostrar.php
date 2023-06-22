<?php 
  include('../banco.php');   

  $id = $_POST['id'];
  $sql = "SELECT * FROM tbproduto WHERE idpro = '$id'";

  //executa o comando sql
  $consulta = $conexao->query($sql);
  //testar se deu certo o comando
  if($consulta){
  //verificando se existe o usuario
    if($consulta->num_rows > 0){
      //convertendo a consulta num array
      $linha=$consulta->fetch_array(MYSQLI_ASSOC);
        $sql = "SELECT * FROM tbproduto WHERE idpro = '$id'";
    
        $consulta = $conexao->query($sql);
        $linha=$consulta->fetch_array(MYSQLI_ASSOC);

        echo '<div class="textfield">
                  <label for="usuario">Nome do Produto</label>
                  <input type="text" name="nome" id="nome" disabled value="'.$linha['nome'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Tipo</label>
                  <input type="text" name="tipo" id="tipo" disabled value="'.$linha['tipo'].'">
              </div>
              <div class="textfield">
                <label for="usuario">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" rows="5" data-ls-module="charCounter" maxlength="300">'.$linha['descricao'].'</textarea>
              </div>
              <div class="textfield">
                  <label for="usuario">Preço</label>
                  <input type="text" name="preco" id="preco" disabled value="'.$linha['preco'].'">
              </div>';
    } else {
      echo "erro";
    }
  }
?>