<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Delixioso - Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left">
            <h1>Ficou na vontade? Com água na boca?</h1>
            <img src="assets/img/animation.svg" class="left-image" alt="animation">
            <h1>Faça login.<br>E aproveite uma refeição quentinha em casa.</h1>            
        </div>
        <div class="right">
            <div class="card-login">
                <h1>Cadastro</h1>
                <form name="formcad" id="formcad" action="assets/php/formcad.php" method="post" role="form">
                    <div class="registo" id="fase1">
                        <div class="textfield">
                            <label for="usuario">Nome de Usuário</label>
                            <input type="text" name="nome" id="nome" placeholder="Seu nome completo">
                        </div>
                        <div class="textfield">
                            <label for="usuario">CPF</label>
                            <input type="text" name="cpf" id="cpf" placeholder="999.999.999-00">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Número</label>
                            <input type="text" name="fone" id="fone" placeholder="(88) 99999-9999">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Email</label>
                            <input type="email" name="email" id="email" placeholder="Seu email">
                        </div>
                        <div class="password-eye">
                            <label for="usuario">Senha</label>
                            <input type="password" name="senha" id="senha" placeholder="***********">
                            <i class="fa-solid fa-eye" id="eye"></i>
                        </div>
                        <a href="login.php">
                            <button type="button" class="btn-login" id="btnVolta">Voltar</button>
                        </a>
                        <button type="button" class="btn-login" id="btnProx">Próximo</button>
                    </div>
                    <div class="registro" id="fase2">
                        <div class="textfield">
                            <label for="usuario">CEP</label>
                            <input type="text" name="cep" id="cep" placeholder="99999-999">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Estado</label>
                            <input type="text" name="estado" id="estado" placeholder="-------">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Cidade</label>
                            <input type="text" name="cidade" id="cidade" placeholder="-------">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Endereço</label>
                            <input type="text" name="endereco" id="endereco" placeholder="-------">
                        </div>
                        <div class="textfield" style="float: left; width: 20%;">
                            <label for="usuario">Número</label>
                            <input type="text" name="numero" id="numero" placeholder="-------">
                        </div>
                        <div class="textfield" style="float: right; width: 75%;">
                            <label for="usuario">Bairro</label>
                            <input type="text" name="bairro" id="bairro" placeholder="-------">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Complemento 1</label>
                            <input type="text" name="comp1" id="comp1" placeholder="-------">
                        </div>
                        <div class="textfield">
                            <label for="usuario">Complemento 2<sub>(opcional)</sub></label>
                            <input type="text" name="comp2" id="comp2" placeholder="-------">
                        </div>
                        <button type="button" class="btn-login" id="btnAnt">Voltar</button>
                        <button class="btn-login" id="btnEnvia">Concluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Template Main JS File -->
    <script src="assets/jquery3/jquery.js"></script>
    <script src="assets/js/masks/jquery.inputmask.js" type="text/javascript"></script>
    
    <script src="assets/js/geral.js"></script>

    <script>
        $("#fone").inputmask("(99) 99999-9999");
        $("#cpf").inputmask("999.999.999-99");
        $("#cep").inputmask("99999-999");

        $('#fase2').hide();

        $('#btnProx').click(function(){
            $('#fase1').fadeOut().hide();
            $('#fase2').fadeIn();

        })//end btnProx click

        $('#btnAnt').click(function(){
            $('#fase2').fadeOut().hide();
            $('#fase1').fadeIn();

        })//end btnAnt click

        $('#eye').click(function(){
            let tipo = $('#senha').attr('type')

            if(tipo == 'password'){
                $('#senha').attr('type','text')
            }else{
                $('#senha').attr('type','password')
            }

        })
    </script>

</body>

</html>