<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  <h3><?php the_title(); ?></h3>
  <?php if(has_post_thumbnail()): ?>
    <img
      src="<?php the_post_thumbnail_url('blog-small'); ?>"
      alt="<?php the_title(); ?>"
    >
  <?php endif; ?>
  <?php the_excerpt(); ?>

  <a href="<?php the_permalink(); ?>">Read more</a>

<?php endwhile; else: endif; ?>