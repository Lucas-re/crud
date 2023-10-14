<?php

ini_set('display_erros',1);
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
    $email = clear($_POST['email']);
    $senha1 = clear($_POST['senha']);
    $idade = clear($_POST['idade']);

    // var_dump($_POST);
    // die;

    /**
     *  metodo md5() pega a senha que o usuario digitou e
     *  criptografa
     */
    $senha1 = md5($senha1);
    $result = array();


    // verifica se o usuario ja existe
    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND login = '$login' AND senha = '$senha1' AND email = '$email' AND idade = $idade";
    
    $usuario_existe = pg_query($connect, $sql);

    if(pg_num_rows($usuario_existe) > 0):
        $result['result'] = true;
        $result['status'] = 1;
        $result['message'] = "Usuario já existente";
        echo json_encode($result);
    else:
        /**
         *  $sql salva os dados do usuario no banco de dados
         */
        $sql = "INSERT INTO usuarios(nome, login, senha, email, idade) VALUES ('$nome', '$login', '$senha1', '$email', $idade)";
        

        if(!pg_query($connect, $sql)):
            $result['result'] = false;
            $result['message'] = "Erro ao cadastrar"; 
            echo json_encode($result);
        else:
            $result['result'] = true;
            $result['message'] = "Cadastrado com sucesso!"; 
            echo json_encode($result);
        endif;
    endif;

 endif;
?>