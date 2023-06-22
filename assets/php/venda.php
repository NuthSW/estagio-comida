  <?php
  include('banco.php');
  session_start();

  $dia = date('Y-m-d');
  $horario = date('H:i:s');
  $idcliente = $_SESSION['idcli'];

  $sql = "insert into tbvenda values(null,'$dia','$horario',$idcliente)";
  $consulta1=$conexao->query($sql);

  $sql2 = "select * from tbvenda where vendadata='$dia' and vendahora='$horario'";
  $consulta2=$conexao->query($sql2);
  $dados=$consulta2->fetch_array(MYSQLI_ASSOC);

  if($consulta1=true){
    $_SESSION['idvenda'] = $dados['idvenda'];
    echo 'ok';
  }else{
    echo 'erro';
  }
    
  
    
?>
