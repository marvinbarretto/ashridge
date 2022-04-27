<?php wp_footer(); ?>

<footer>
  <?php
    wp_nav_menu(
      array(
        'theme_location' => 'footer-nav',
        'menu_class' => 'nav--footer',
      )
    );  
  ?>
</footer>

</body>
</html>