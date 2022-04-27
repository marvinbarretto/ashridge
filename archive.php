<?php get_header() ?>

<div class="content">
  <h1>
    <?php echo single_cat_title(); ?>
  </h1>
  <?php get_template_part('includes/section', 'archive'); ?>
</div>

<nav>
  <?php
    global $wp_query;
    $big = 99999999;
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages
    ) );
  ?>
</nav>

<?php get_footer() ?>