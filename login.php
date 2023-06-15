<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>DeliciOVO - Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left">
            <h1>Ficou na vontade né?<br>Faça login e acabe com essa vontade!</h1>            
        </div>
        <div class="right">
            <div class="card-login">
                <h1>Login</h1>
                <form name="formlogin" id="formlogin" action="assets/php/formlogin.php" method="post" role="form">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="email" name="email" id="email" placeholder="Seu email">
                    </div>
                    <div class="textfield">
                        <label for="usuario">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Sua senha">
                        <a href="recuperar.html"><p>Esqueceu a sua senha?</p></a>
                    </div>
                    <button id="btnLogin" class="btn-login">Login</button>
                </form>
                <a href="cadastro.php" style="width: 100%;">
                    <button class="btn-login" style="background: #afaeae;">Cadastro</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Template Main JS File -->
    <script src="assets/jquery3/jquery.js"></script>

    <script>
        $('document').ready(function(){
            let email = $('#email').val();
            let senha = $('#senha').val();

            $('#btnLogin').click(function(){
                $.post('assets/php/formlogin.php',{email: email,senha: senha},function(retorno){
                    if(retorno != 'erro'){
                        $("load").hide();
                        $('#corpoTabela').html(retorno);
            
                    }//fim if
          
                })//fim post
            })
            
        })
    </script>
</body>
</html>