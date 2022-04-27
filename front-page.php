<?php get_header() ?>

<div class="content">
  <?php if(has_post_thumbnail()): ?>
    <img
      src="<?php the_post_thumbnail_url('banner'); ?>"
      alt="<?php the_title(); ?>"
      class=""
    >
  <?php endif; ?>
  <?php get_template_part('includes/section', 'content'); ?>

  <?php get_search_form() ?>
</div>

<?php get_footer() ?>