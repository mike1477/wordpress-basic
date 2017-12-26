<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="description" content="<?php bloginfo('description')?>">

    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <h1><?php bloginfo('name')?></h1>
    <p><?php bloginfo('description')?></p>
    <?php wp_footer(); ?> 
  </body>
</html>
