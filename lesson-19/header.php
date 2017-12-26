<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="description" content="<?php bloginfo('description')?>">

    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
      <header class="header">
        <h1><?php bloginfo('name')?></h1>
        <p><?php bloginfo('description')?></p>
        <h1>HEADER.PHP</h1>
        <?php wp_nav_menu( array(
          'theme_location' => 'primary'
        ) ); ?>
      </header>
