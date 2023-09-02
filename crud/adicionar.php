<?php
/**
 * 
 */

 // Header
 include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="ligth">Novo Cliente</h3>
    <form action="php_action/create.php" method="POST">
        <div class="input-field col s12">
            <legend>Nome</legend>
            <input type="text" name="nome" id="nome">
        </div>

        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Sobrenome</legend>
            <input type="text" name="sobrenome" id="sobrenome">
        </div>
        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Email</legend>
            <input type="email" name="email" id="email">
        </div>
        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Idade</legend>
            <input type="text" name="idade" id="idade">
            <div style="margin-top: 10px;">
                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a style="margin-left: 355px;" href="index.php" class="btn green">Lista de Clientes</a>
            </div>

        </div>

    
    </form>
  </div>

</div>

<?
 // Footer
 include_once 'includes/footer.php';
 ?>