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

  $idvenda = $dados['idvenda'];
  
  $pedido = null;
  $quant = null;

  if(isset($_POST['produto'])){
    $pedido = $_POST['produto'];

  }
  if(isset($_POST['qtd'])){
    $quant = $_POST['qtd'];

  }
  if($pedido != null){
    for($i= 0; $i < count($pedido); $i++){
      $sql3 = "insert into tbitemvenda values(null,$idvenda,'$pedido[$i]',$quant[$i])";

      $consulta3=$conexao->query($sql3);

    }
  }
  if($consulta3==true){
    session_start();
    $_SESSION['idvenda'] = $idvenda;
    header('location: ../../pedido.php?click=ok');
  }else{
    header('location: ../../index.php?click=erro');
  }
?>
