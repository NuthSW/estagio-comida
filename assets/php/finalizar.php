  <?php
  include('banco.php');
  session_start();

  $dia = date('Y-m-d');
  $horario = date('H:i:s');
  $produto = $_POST['id'];
  $qtd = $_POST['quantidade'];
  $idvenda = $_SESSION['idvenda'];
  
  $sql3 = "insert into tbitemvenda values(null,$idvenda,$produto,$qtd)";
  $consulta3=$conexao->query($sql3);

  if($consulta3=true){
    echo 'ok';
  }else{
    echo 'erro';
  }
    
  
    
?>
