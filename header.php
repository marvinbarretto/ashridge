<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ashridge</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>

  <header>
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary-nav',
          'menu_class' => 'nav--header',
        )
      );  
    ?>
  </header>
  