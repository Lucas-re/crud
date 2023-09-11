<?php
 ini_set('display_errors', 1);

 // Header
 include_once 'includes/header.php';

?>

<html>
    <head>
        <title>Cadastrar</title>

        <meta charset="utf8">
    </head>
    <body>
        
    <div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="ligth">Cadastro</h3>
    <fieldset>
        <form action="" method="POST">
            <div class="input-field col s12">
                <legend>Nome</legend>
                <input type="text" name="nome" id="nome">
            </div>

            <div style="margin-top: 10px;" class="input-field col s12">
                <legend>Login</legend>
                <input type="text" name="login" id="login">
            </div>
            <div style="margin-top: 10px;" class="input-field col s12">
                <legend>Email</legend>
                <input type="email" name="email" id="email">
            </div>
            <div style="margin-top: 10px;" class="input-field col s12">
                <legend>Senha</legend>
                <input type="text" name="senha1" id="senha1">
            </div>
            <div style="margin-top: 10px;" class="input-field col s12">
                <legend>Confirmação da senha</legend>
                <input type="text" name="senha2" id="senha2">
            </div>
            <div style="margin-top: 10px;" class="input-field col s12">
                <legend>Idade</legend>
                <input type="text" name="idade" id="idade">
                <div style="margin-top: 10px;">
                    <button id="btn-cadastrar" type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                    <a style="margin-left: 44px;" href="index.php" class="btn green">Voltar a pagina de login</a>
                </div>

            </div>
        
        </form>
    </fieldset>
  </div>
        <script src="assets/jquery3.7.1.min.js"></script>
        <script src="assets/cadastrar.js"></script>
    </body>
</html>

<?
 // Footer
 include_once 'includes/footer.php';
 ?>
