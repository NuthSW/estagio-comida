<?php
    session_start();
    if(!isset($_SESSION['login'])){
      header('location: ../../login.php?login=semsessao');
    }else{
      header('location: ../../pedido.php');
    }
?>