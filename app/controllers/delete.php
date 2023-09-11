<?php
/**
 *  Sessão
 */
 session_start();

 
/**
 * Conexão
 */
 require 'db_connect.php';

 if(isset($_GET['id'])):
    $id      = pg_escape_string($connect, $_GET['id']);
    // $nome      = pg_escape_string($connect, $_POST['nome']);
    // $sobrenome = pg_escape_string($connect, $_POST['sobrenome']);
    // $email     = pg_escape_string($connect, $_POST['email']);
    // $idade     = pg_escape_string($connect, $_POST['idade']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(pg_query($connect, $sql)):
        $_SESSION['mensagem'] = "Excluido com sucesso";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Excluir";
        header('location: ../index.php?');
    endif;
 endif;