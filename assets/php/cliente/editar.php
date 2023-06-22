<?php
    include('../banco.php');

    $id=$_POST['idcli'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $fone=$_POST['fone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $cep=$_POST['cep'];
    $estado=$_POST['estado'];
    $cidade=$_POST['cidade'];
    $endereco=$_POST['endereco'];
    $numero=$_POST['numero'];
    $bairro=$_POST['bairro'];
    $comp1=$_POST['comp1'];
    $comp2=$_POST['comp2'];

    $sql = "update tbcliente set nome='$nome', cpf='$cpf', fone='$fone', email='$email',senha='$senha', cep='$cep', 
    estado='$estado', cidade='$cidade', endereco='$endereco', numero='$numero', bairro='$bairro', comp1='$comp1', comp2='$comp2'
    where idcli='$id'";

    $insert = $conexao->query($sql);
    if($insert){
        header('location: ../../../admin/index.php?edit=ok');
    }else{
        header('location: editcliente.php?edit=erro');     
    }
?>