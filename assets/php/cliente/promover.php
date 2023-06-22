<?php
    include('../banco.php');

    $id=$_POST['id'];

    $sql = "update tbcliente set tipo='A' where idcli='$id'";

    $insert = $conexao->query($sql);
    if($insert){
        header('location: ../../../admin/index.php?promo=ok');
    }else{
        header('location: editcliente.php?edit=erro');     
    }
?>