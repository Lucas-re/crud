<?php

ini_set('display_erros', 1);
/**
 *  Sessão
 */
 session_start();

 
/**
 * Conexão
 */
 require '../database/db_connect.php';

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

$nome      = clear($_POST['nome']);
$sobrenome = clear($_POST['sobrenome']);
$email     = clear($_POST['email']);
$idade     = clear($_POST['idade']);

$result = array();

$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

if(empty($nome) or empty($sobrenome) or empty($email) or empty($idade)): 
    $result['result'] = false;
    $result['message'] = "Erro ao Cadastrar. Todos os campos devem ser preenchidos";
    echo json_encode($result);
    
elseif(!pg_query($connect, $sql)):

    $result['result'] = false;
    $result['message'] = "Erro ao Cadastrar";
    echo json_encode($result);
    
else:
    $result['result'] = true;
    $result['message'] = "Cadastrado com sucesso";
    echo json_encode($result);
endif;
