<div class="post__container">
    <div class="post__thumbnail__container">
        <?php the_post_thumbnail(); ?>
    </div>
<div style="background-color:<?php the_field('background_color'); ?>">

    <h2><?php the_title();?></h2>

    <p><?php the_content();?></p>
</div>
</div>
<div class="sidebar__container">
<?php 
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif; ?>
</div>
<h2 class="last__posts__title">Last posts</h2>
<div class="last__posts__container">
<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php get_template_part('template-parts/archive/content');?>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php get_template_part('template-parts/archive/empty');?></p>
<?php endif; ?>
            
</div>
