<?php
/**
 * pagina de encerramento da sessão
 * encerra a sessão e redireciona o usuario para a pagina index.php
 */
session_start();
session_unset();
session_destroy();
header('location: index.php');