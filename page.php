<?php get_header() ?>

<div class="content">
  <?php if(has_post_thumbnail()): ?>
    <img
      src="<?php the_post_thumbnail_url('blog-large'); ?>"
      alt="<?php the_title(); ?>"
      class=""
    >
  <?php endif; ?>
  <h1><?php the_title(); ?></h1>
  <?php get_template_part('includes/section', 'content'); ?>
</div>

<?php get_footer() ?>