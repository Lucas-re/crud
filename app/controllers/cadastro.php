<?php
/**
  * sessão 
  * inicia a sessão 
  */
  require_once("../database/db_connect.php");
  header("Content-Type: application/json");
  session_start();

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
 
  
 if($_POST['login'] != " " && $_POST['senha'] != " "):

    $nome = clear($_POST['nome']);
    $login = clear($_POST['login']);
    // $email = clear($_POST['email']);
    // $idade = clear($_POST['idade']);
    $senha1 = clear($_POST['senha']);
    // $senha = pg_escape_string($connect, $_POST['senha']);


    /**
     *  $sql salva os dados do usuario no banco de dados
     */
    /**
     *  metodo md5() pega a senha que o usuario digitou e
     *  criptografa
     */
    $senha = md5($senha1);
    $sql = "INSERT INTO usuarios(nome, login, senha) VALUES ('$nome', '$login', '$senha')";

    if(!pg_query($connect, $sql)):
        echo json_encode("Erro ao cadastrar");
    else:
        echo json_encode("Cadastrado com sucesso!");
    endif;

 endif;
?>