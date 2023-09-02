<?php
/**
 *  Sessão
 */
 session_start();

 
/**
 * Conexão
 */
 require 'db_connect.php';

 if(isset($_POST['btn-editar'])):
    $id      = pg_escape_string($connect, $_POST['id']);
    $nome      = pg_escape_string($connect, $_POST['nome']);
    $sobrenome = pg_escape_string($connect, $_POST['sobrenome']);
    $email     = pg_escape_string($connect, $_POST['email']);
    $idade     = pg_escape_string($connect, $_POST['idade']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email ='$email', idade = '$idade' WHERE id = '$id '";

    if(pg_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('location: ../index.php?');
    endif;
 endif;