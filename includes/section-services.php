
<?php
$args = array(
    'post_type' => 'services',
    'posts_per_page' => 4
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>


<div class="section no-pad-bot"> 
  <!--   Services Section   -->
  <div class="row no-marg-bot">
    <div class="col s10 l12 push-s1 no-padding">
      
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col s12 m6 l3">
        <a href="<?php the_permalink(); ?>">
          <div class="service-box theme-bg theme-border">
            <?php if ( get_the_post_thumbnail() ) : ?>									 
              <img src="<?php the_post_thumbnail_url('box'); ?>" width="100%" alt="<?php the_title(); ?>">
            <?php endif; ?>
            
            <div style="text-align:right">
              <i class="material-icons">subdirectory_arrow_right</i>
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
        </a>
      </div>

    <?php endwhile; ?>


      </div>
    </div><br><p class="short-line theme-bg3"></p>
  </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
