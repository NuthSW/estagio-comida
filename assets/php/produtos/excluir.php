<?php
include('../banco.php');
$id=$_POST['id'];

$sql = "delete from tbproduto where idpro = $id";

$consulta=$conexao->query($sql);
?>