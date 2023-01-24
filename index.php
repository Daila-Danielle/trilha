<?php
  // configuracoes
  ini_set('default_charset','UTF-8');
  ini_set ( 'display_errors' , 0);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  error_reporting(E_ALL);

  // includes
  include __DIR__ . '/views/container-inicio.php'; 
  require __DIR__ . '/routes/rotas.php';
   
  include("./config/conexao.php");
  include("./consultas_bd.php");

  #caso escolha uma das opções manda pra pagina especifica.
  getRotas(@$_REQUEST["pagina"]);

  include __DIR__ . '/views/container-fim.php'; 

  ?>