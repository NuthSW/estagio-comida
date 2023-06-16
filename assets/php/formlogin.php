<?php
    include('banco.php');

    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql = "select * from tbcliente where email='$email' and senha='$senha'";

    $consulta=$conexao->query($sql);
    if($consulta->num_rows > 0){
        session_start();
        $_SESSION['login'] ='ok';
        header('location: ../../index.php?login=ok');
    }else{
        header('location: ../../login.php?login=erro');
    }
?>