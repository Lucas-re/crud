<?php
/**
 *  conexão com banco de dados
 */
 /**
  * arquivo criado para fazer a conexão com o banco de dados
  * utilizando o metodo pg_ para se conectar ao banco postgres
  */
 $servername = "server_name";   // preencher com o endereço do servidor
 $port = "db_port";             // preencher com a porta do servidor
 $username = "user_name";       // preencher com o nome do usuario do banco
 $password = "password";        // preencher com a senha do usuario do banco
 $db_name = "db_name";          // preencher com o nome do banco de dados
 
 $connect = pg_connect("host={$servername} port={$port} dbname={$db_name} user={$username} password={$password}");
 pg_set_client_encoding($connect, "utf8");


