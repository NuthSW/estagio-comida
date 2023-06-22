<?php
    include('../banco.php');

    $id=$_POST['idpro'];
    $nome=$_POST['nome'];
    $tipo=$_POST['tipo'];
    $descricao=$_POST['descricao'];
    $preco=$_POST['preco'];

    $sql = "update tbproduto set nome='$nome', tipo='$tipo', descricao='$descricao', preco='$preco' where idpro='$id'";

    $insert = $conexao->query($sql);
    if($insert){
        header('location: ../../../admin/produto.php?passou=edit');
    }else{
        header('location: editproduto.php?edit=erro');     
    }
?>