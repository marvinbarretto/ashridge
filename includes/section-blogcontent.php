<?php if( have_posts() ): while( have_posts() ): the_post(); ?>


  <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
  ?>

  Posted by <?php echo $fname; ?> <?php echo $lname; ?>

  <?php echo get_the_date('d/m/Y') ?>

  <?php
    $tags = get_the_tags();
    foreach($tags as $tag): ?>
    <a href="<?php echo get_tag_link($tag->term_id) ?>">
      <?php echo $tag->name; ?>
    </a>
  <?php endforeach; ?>

  Category: 
  <?php
    $cats = get_the_category();
    foreach($cats as $cat): ?>
    <a href="<?php echo get_category_link($cat->term_id);?>">
      <?php echo $cat->name; ?>
    </a>
  <?php endforeach; ?>


  <?php the_content(); ?>

  <?php comments_template(); ?>

<?php endwhile; else: endif; ?>