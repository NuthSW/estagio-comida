<?php
    include('../banco.php');

    $nome=$_POST['nome'];
    $tipo=$_POST['tipo'];
    $descricao=$_POST['descricao'];
    $preco=$_POST['preco'];

    $sql = "insert into tbproduto values(null,'$nome','$tipo','$descricao',$preco)";

    $consulta=$conexao->query($sql);
    if($consulta==true){
        header('Location: ../../../admin/produto.php?passou=addpro');    
    }else{
        header('Location: ../../../admin/addpro.php');     
    }
?>