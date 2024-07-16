<?php

/**
 * Template name: Footer 
 * @package BrandsDev
 * @source brandsdeveloper
 * 
 **/

?>

<!-- Inicio Rodapé -->
<footer>

  <div class="container px-5">

    <h1 class="text-center text-dark mt-5 pt-5 font-modify"> Lucas Brandão</h1>

    <p class="mt-4 text-center">Não permita que aquilo que você não pode fazer interfira naquilo que você pode fazer. Afinal não há atalhos para nenhum destino onde se vale a pena chegar.</p>

    <div class="d-flex justify-content-center align-items-center my-4 gap-2">

      <a href="<?= $face; ?>" target="_blank">
        <i class="fa-brands fa-facebook-f fa-lg fa-size"></i>
      </a>

      <a href="<?= $insta; ?>" target="_blank">
        <i class="fa-brands fa-instagram fa-lg"></i>
      </a>

      <a href="<?= $git; ?>" target="_blank">
        <i class="fa-brands fa-github fa-lg"></i>
      </a>

      <a href="<?= $linkedin; ?>" target="_blank">
        <i class="fa-brands fa-linkedin-in fa-lg"></i>
      </a>

    </div>

    <p class="text-center pb-4"> &copy; Copyright <?= date('Y'); ?> - Lucas Brandão - Todos os direitos Reservados. </p>

  </div>

</footer>
<!-- Fim Rodapé -->


<!-- JavaScript -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- JavaScript External Utilizado Bibliotecas -->
<script src="<?= $url; ?>/js/theme.js"></script>
<script src="<?= $url; ?>/js/plugins.js"></script>

</body>

</html>