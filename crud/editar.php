<?php
// Conexão
 include_once 'php_action/db_connect.php';

// select
 if(isset($_GET['id'])):
    $id = pg_escape_string($connect, $_GET['id']);
    $sSql = "SELECT * FROM clientes WHERE id = '$id'"; 
    $resultado = pg_query($connect, $sSql);
    $aCliente = pg_fetch_array($resultado);
    // var_dump($aCliente);
 endif;

 // Header
 include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="ligth">Editar Cliente</h3>
    <form action="php_action/update.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $aCliente['id']?>">

        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Nome</legend>
            <input name="nome" id="nome" value="<?php echo $aCliente['nome']?>">
        </div>
        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Sobrenome</legend>
            <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $aCliente['sobrenome']?>">
        </div>
        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Email</legend>
            <input type="email" name="email" id="email" value="<?php echo $aCliente['email']?>">
        </div>
        <div style="margin-top: 10px;" class="input-field col s12">
            <legend>Idade</legend>
            <input type="text" name="idade" id="idade" value="<?php echo $aCliente['idade']?>">
            <div style="margin-top: 10px;">
                <button type="submit" name="btn-editar" class="btn">Atualizar</button>
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