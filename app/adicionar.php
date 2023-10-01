<?php
/**
 * 
 */
 //modal sair
 require_once("includes/modal-logout.phtml");

 // Header
 include_once 'includes/header.phtml';
?>
<body>
    <div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth">Novo Cliente</h3>
        <form action="controllers/create.php" method="POST">
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
                    <button type="submit" name="btn-cadastrar-cliente" class="btn">Cadastrar</button>
                    <a style="margin-left: 10px;" href="clientes.php" class="btn green">Lista de Clientes</a>
                    <input  style="margin-left: 189px;" id="btn-sair" type="button" name="btn-sair" class="btn red" value="Sair do sistema">
                </div>

            </div>

        
        </form>
    </div>

    </div>
    <script src="assets/jquery3.7.1.min.js"></script>
    <script src="assets/logout.js"></script>
    <script src="assets/modal-logout.js"></script>
</body>

<?
 // Footer
 include_once 'includes/footer.phtml';
 ?>