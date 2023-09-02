<?php
/**
 *  Sessão
 */
 session_start();

 
/**
 * Conexão
 */
 require 'db_connect.php';

/**
 * clear
 * função criada para fazer escape string de código malicioso que pode ser passado 
 * em algun campo do formulario
 */
 function clear($input){
    global $connect;
    //sql
    $var = pg_escape_string($input);

    //xss 
    $var = htmlspecialchars($var);

    return $var;
 }

 if(isset($_POST['btn-cadastrar'])):
    $nome      = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email     = clear($_POST['email']);
    $idade     = clear($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(empty($nome) or empty($sobrenome) or empty($email) or empty($idade)): 
        $_SESSION['mensagem'] = "Erro ao Cadastrar. Todos os campos devem ser preenchidos";
        header('location: ../index.php?');
    elseif(!pg_query($connect, $sql)):
        $_SESSION['mensagem'] = "Erro ao Cadastrar";
        header('location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('location: ../index.php');
    endif;
    
        
 endif;