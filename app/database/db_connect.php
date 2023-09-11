<?php
/**
 *  conexão com banco de dados
 */
 /**
  * arquivo criado para fazer a conexão com o banco de dados
  * utilizando o metodo pg_ para se conectar ao banco postgres
  */
 $servername = "localhost";   // preencher com o endereço do servidor
 $port = "5432";             // preencher com a porta do servidor
 $username = "postgres";       // preencher com o nome do usuario do banco
 $password = "1234";        // preencher com a senha do usuario do banco
 $db_name = "curso_php";          // preencher com o nome do banco de dados
 
 $connect = pg_connect("host={$servername} port={$port} dbname={$db_name} user={$username} password={$password}");
 pg_set_client_encoding($connect, "utf8");

//  if(!$connect){
//     echo "Erro ao conectar";
//  }else {
//     echo "conectado com sucesso!";
//  }

