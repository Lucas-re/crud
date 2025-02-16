<?php
/**
 *  Sessão
 */

 session_start();

/**
 * Conexão
 */
 require '../database/db_connect.php';

$result = array();

 if(isset($_POST['id'])):
    $id      = pg_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(pg_query($connect, $sql)):

        $result['result'] = false;
        $result['status'] = 1;
        $result['message'] = "Excluido com sucesso";
        echo json_encode($result);

    else:

        $result['result'] = false;
        $result['status'] = 0;
        $result['message'] = "Erro ao Excluir";
        echo json_encode($result);

    endif;
 endif;