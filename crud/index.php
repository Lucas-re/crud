<?php

  // conexão
  include 'php_action/db_connect.php';

  // Mensagem
 include_once 'includes/mensagem.php';

 // Header
 include_once 'includes/header.php';

?>

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
          echo "Erro na consulta";
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

            <!-- Modal Structure 
            <div id="modal" class="modal">
              <div class="modal-content">
                <h4>Atenção</h4>
                <p>Deseja realmente excluir esse registro?</p>
              </div>
              <div class="modal-footer">
                <form action="php_action/delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $aCliente['id']?>"">
                  <button type="submit" name="btn-deletar" class="btn red">Sim, quero excluir</button>
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </form>
              </div>
            </div>-->
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
    <a href="adicionar.php" class="btn">Adicionar cliente</a>
  </div>

</div>

<?
 // Footer
 include_once 'includes/footer.php';
 ?>