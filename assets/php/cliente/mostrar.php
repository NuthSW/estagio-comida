<?php 
  include('../banco.php');   

  $id = $_POST['id'];
  $sql = "SELECT * FROM tbcliente WHERE idcli = '$id'";

  //executa o comando sql
  $consulta = $conexao->query($sql);
  //testar se deu certo o comando
  if($consulta){
  //verificando se existe o usuario
    if($consulta->num_rows > 0){
      //convertendo a consulta num array
      $linha=$consulta->fetch_array(MYSQLI_ASSOC);
        $sql = "SELECT * FROM tbcliente WHERE idcli = '$id'";
    
        $consulta = $conexao->query($sql);
        $linha=$consulta->fetch_array(MYSQLI_ASSOC);

        echo '<div class="textfield">
                  <label for="usuario">Nome de Usuário</label>
                  <input type="text" name="nome" id="nome" placeholder="Seu nome completo" disabled value="'.$linha['nome'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">CPF</label>
                  <input type="text" name="cpf" id="cpf" placeholder="999.999.999-00" disabled value="'.$linha['cpf'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Número</label>
                  <input type="text" name="fone" id="fone" placeholder="(88) 99999-9999" disabled value="'.$linha['fone'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Email</label>
                  <input type="text" name="email" id="email" placeholder="Seu email" disabled value="'.$linha['email'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">CEP</label>
                  <input type="text" name="senha" id="senha" placeholder="***********" disabled value="'.$linha['cep'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Estado</label>
                  <input type="text" name="cep" id="cep" placeholder="99999-999" disabled value="'.$linha['estado'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Cidade</label>
                  <input type="text" name="estado" id="estado" placeholder="-------" disabled value="'.$linha['cidade'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Endereço</label>
                  <input type="text" name="cidade" id="cidade" placeholder="-------" disabled value="'.$linha['endereco'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Bairro</label>
                  <input type="text" name="endereco" id="endereco" placeholder="-------" disabled value="'.$linha['bairro'].'">
              </div>
              <div class="textfield" style="float: left; width: 20%;">
                  <label for="usuario">Nº</label>
                  <input type="text" name="numero" id="numero" placeholder="-------" disabled value="'.$linha['numero'].'">
              </div>
              <div class="textfield" style="float: right; width: 75%;">
                  <label for="usuario">Senha</label>
                  <input type="text" name="bairro" id="bairro" placeholder="-------" disabled value="'.$linha['senha'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Complemento 1</label>
                  <input type="text" name="comp1" id="comp1" placeholder="-------" disabled value="'.$linha['comp1'].'">
              </div>
              <div class="textfield">
                  <label for="usuario">Complemento 2<sub>(opcional)</sub></label>
                  <input type="text" name="comp2" id="comp2" placeholder="-------" disabled value="'.$linha['comp2'].'">
              </div>';
    } else {
      echo "erro";
    }
  }
?>