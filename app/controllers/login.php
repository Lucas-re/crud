<?php
/**
  * sessão 
  * inicia a sessão 
  */
  require_once("../database/db_connect.php");
  header("Content-Type: application/json");
  session_start();
  
 if($_POST['login'] != " " && $_POST['senha'] != " "):

    $login = pg_escape_string($connect, $_POST['login']);
    $senha = pg_escape_string($connect, $_POST['senha']);


    if(empty($login) or empty($senha)):
        echo  json_encode(" O campo login/senha precisa ser preenchido");
    else:

        /**
         *  $sql armazena a string de consulta ao banco de dados,
         *  $resultado armazena o resultado da conexão e execução
         *  da consulta ao banco de dados.
         */
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = pg_query($connect, $sql); 

        if(pg_num_rows($resultado) > 0):


            
            /**
             *  metodo md5() pega a senha que o usuario digitou e
             *  criptografa
             */
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = pg_query($connect, $sql); 
            pg_close($connect);
            
            if(pg_num_rows($resultado) == 1):

                /**
                 *  se o usuario estiver logado, armazena os dados na global $_SESSION
                 *  depois o usuario e redirecionado para a pagina home.php
                 */
                $dados = pg_fetch_array($resultado);
                $_SESSION['logado'] = TRUE;
                $_SESSION['id_usuario'] = $dados['id'];
                echo json_encode("logado");
            else:
                echo json_encode("login e usuario não conferem");
            endif;
        else:
            echo json_encode("Usuario inexistente"); 
        endif;
    endif;
 endif;
?>