<?php
 ini_set('display_errors', 1);

  // conexão
  include 'database/db_connect.php';

  // Mensagem
 include_once 'includes/mensagem.phtml';

 // Header
 include_once 'includes/header.phtml';

 // modal sair
 require_once("includes/modal-logout.phtml")

?>
<body>
<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="ligth">Clientes</h3>
      <table class="striped">
        <thead>
          <tr>
            <th>Nome:</th>
            <th>Sobrenome:</th>
            <th>Email:</th>
            <th>Idade:</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM clientes";
  
        if(pg_query($connect, $sql)):
           $dados = pg_query($connect, $sql);
           $aClientes = pg_fetch_all($dados);
        else:
          echo json_encode("Erro na consulta");
        endif;

        if(!empty($aClientes)){
          foreach($aClientes as $aCliente){?>
            <tr>
              <td><?php echo $aCliente['nome']?></td>
              <td><?php echo $aCliente['sobrenome']?></td>
              <td><?php echo $aCliente['email']?></td>
              <td><?php echo $aCliente['idade']?></td>
          
            <td><a href="editar.php?id=<?php echo $aCliente['id']?>" class="btn-floating orange " name="btn-editar"><i class="material-icons">edit</i></a></td>
            <td><a href="php_action/delete.php?id=<?php echo $aCliente['id']?>" class="btn-floating red modal-trigger" name="btn-excluir" ><i class="material-icons">delete</i></a></td>

          <?php
           }
          }else {
          ?>

            <tr>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>

          <?php 
          }
          ?>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="cadastrar_cliente.php" class="btn">Cadastrar cliente</a>
    <input  style="margin-left: 320px;" id="btn-sair" type="button" name="btn-sair" class="btn red" value="Sair do sistema">
  </div>
</div>
<script src="assets/jquery3.7.1.min.js"></script>
<script src="assets/login.js"></script>
<script src="assets/logout.js"></script>
<script src="assets/modal-logout.js"></script>
</body>
<?
 // Footer
 include_once 'includes/footer.phtml';
 ?>