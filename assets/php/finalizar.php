<?php
  include('banco.php');
  session_start();

  $dia = date('d-m-Y');
  $horario = date('H:i:s');
  $id = $_SESSION['idcli'];

  $sql = "insert into tbvenda values(null,'convert($dia, GETDATE() ,101)','$horario',$id)";

  $consulta=$conexao->query($sql);

  $pedido = null;

  if(isset($_POST['produto'])){
    $pedido = $_POST['produto'];

  }
  if($pedido != null){
    for($i= 0; $i < count($pedido); $i++){
      $sql2 = "insert into tbvenda values(null,'1','$pedido[$i]','2')<br>";

      echo $sql2;

    }
  }
?>
