<?php
 ini_set('display_errors', 1);

 // Header
 include_once 'includes/header.php';

?>

<html>
    <head>
        <title>Login</title>

        <meta charset="utf8">
    </head>
    <body>
        
        <div class="row">
            <div class="col s12 m6 push-m3">
                <h3 class="ligth">Login</h3>
                <fieldset>
                <form id="form1" action="" method="POST"> 
                    <div class="input-field col s12">
                        <legend>Login</legend>
                        <input type="text" name="login" id="login">
                    </div>

                    <div class="input-field col s12">
                        <legend>Senha</legend>
                        <input type="password" name="senha" id="senha">
                    </div>
                    
                    <input id="btn-entrar" type="submit" form="form1" name="btn-entrar" class="btn" value="Entrar" >
                    <input style="margin-left: 44px;" id="btn-cadastro" type="submit" name="btn-cadastro" class="btn orange" value="Criar Cadastro">
                </form>
                </fieldset>
            </div>
        </div>
        
        <script src="assets/jquery3.7.1.min.js"></script>
        <script src="assets/login.js"></script>
    </body>
</html>

<?
 // Footer
 include_once 'includes/footer.php';
 ?>
