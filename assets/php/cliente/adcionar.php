<?php
    include('../banco.php');

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

    $sql = "insert into tbcliente values(null,'$nome','$cpf','$fone','$email','$cep','$estado','$cidade','$endereco',$numero,'$bairro','$senha','$comp1','$comp2','C')";

    $consulta=$conexao->query($sql);
    if($consulta==true){
        header('Location: ../../../login.php');    
    }else{
        header('Location: ../../../cadastro.php');     
    }
?>