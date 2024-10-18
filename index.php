<?php
/**
 * Template name: Index
 * @package BrandsDev
 * @source brandsdeveloper
 * 
**/

include ('header.php');

echo '<main>';
include ('projetos/templates/sc-apresentacao.php');
include ('projetos/templates/sc-sobre.php');
include ('projetos/templates/sc-skills.php');
include ('projetos/templates/sc-portfolio.php');
include ('projetos/templates/sc-contato.php');
echo '</main>';

include ('footer.php'); 

?>