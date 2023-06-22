<?php
include('../banco.php');
$id=$_POST['id'];

$sql = "delete from tbcliente where idcli = $id";

$consulta=$conexao->query($sql);
?>