<?php 
  
  error_reporting(error_reporting() & ~E_NOTICE);
  date_default_timezone_set('America/Sao_Paulo');

   
   require_once "bd/banco.php";
   require_once "classes/livros.php";
   require_once "classes/funcionario.php";
   require_once "classes/cliente.php";
   require_once "classes/emprestimos.php";
   require_once "classes/devolucao.php";

?>