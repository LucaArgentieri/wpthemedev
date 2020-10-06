<a class="mini__post__container" href="<?php the_permalink() ;?>">
    <div class="title_post">
        <h3><?php the_title(); ?></h3>
        <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
        <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
        <p class="content"><?php the_excerpt(); ?></p>
    </div>
</a>