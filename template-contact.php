<?php 
/*
  Template Name: Contact Us
*/
?>


<?php get_header() ?>

<div class="content">

  
  <?php get_template_part('includes/form', 'enquiry'); ?>

  <h1><?php the_title(); ?></h1>

  <?php get_template_part('includes/section', 'content'); ?>
    
</div>

<?php get_footer() ?>

