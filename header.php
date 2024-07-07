<?php
/**
 * Template name: Header 
 * @package BrandsDev
 * @source brandsdeveloper
 * 
**/

$protocol = $_SERVER["REQUEST_SCHEME"].'://';
$domain = $_SERVER["HTTP_HOST"];
// $paste = $_SERVER["SCRIPT_URL"];
// $paste = $_SERVER["REQUEST_URI"];
// $url_complete = $_SERVER["SCRIPT_URI"];

$url = $protocol.$domain; 
$face = 'https://www.facebook.com/lucas.brandao.7927/';
$insta = 'https://www.instagram.com/brandao_lucas__/';
$git = 'https://github.com/BrandsDeveloper';
$linkedin = 'https://www.linkedin.com/in/lucas-brand%C3%A3o-8a002b175/';

?>

<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> BrandsDev - Developer Fron-End</title>
    
    <!-- Favicon & CSS-->
    <link rel="shortcut icon" href="<?= $url; ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= $url; ?>/css/style.min.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/498943cfa9.js" crossorigin="anonymous"></script>

  </head>

  <body>

    <!-- Inico Cabeçalho -->
    <header id="header" class="d-flex flex-column justify-content-center">
      
      <label for="bars"> <i class="fa-solid fa-align-right h2"></i> </label>
      <input type="checkbox" name="" id="bars">

      <nav class="navbar nav-menu">

        <!-- Inicio Menu -->
        <ul class="m-0">

          <li class="nav-item h-50 mb-3"> 
            <a class="actived nav-link mx-auto mx-md-0" href="#home"> 
              <i class="mx-3 fas fa-home fa-lg"></i> 
              <span class="me-4">Home</span> 
            </a> 
          </li>

          <li class="nav-item h-50 mb-3"> 
            <a class="nav-link mx-auto mx-md-0" href="#sobre"> 
              <i class="mx-3 fas fa-user fa-lg p-style1"></i> 
              <span class="me-4">Sobre</span> 
            </a> 
          </li>

          <li class="nav-item h-50 mb-3"> 
            <a class="nav-link mx-auto mx-md-0" href="#skills"> 
              <i class="mx-3 fa-solid fa-screwdriver-wrench fa-lg p-style1"></i>
              <span class="me-4">Habilidades</span> 
            </a> 
          </li>

          <li class="nav-item h-50 mb-3"> 
            <a class="nav-link mx-auto mx-md-0" href="#projeto"> 
              <i class="mx-3 far fa-window-restore fa-lg p-style"></i> 
              <span class="me-4">Portfólio</span> 
            </a> 
          </li>

          <li class="nav-item h-50"> 
            <a class="nav-link mx-auto mx-md-0" href="#contato"> 
              <i class="mx-3 fas fa-envelope fa-lg p-style"></i> 
              <span class="me-4">Contato</span> 
            </a> 
          </li>

        </ul>
        <!-- Fim Menu -->

      </nav>

      <p class="text-center"> &copy; Lucas Brandão </p>
      
    </header>
    <!-- Fim Cabeçalho -->