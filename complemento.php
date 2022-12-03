<?php
/*
  Plugin Name: Formulario Bluecell
 */
include 'config/activar.php';
include 'config/desactivar.php';
include 'template/formulario.php';
include 'template/showUser.php';
register_activation_hook(__FILE__,'activar');
register_deactivation_hook(__FILE__, 'Desactivar');
add_action('the_content', 'formulario');

?>