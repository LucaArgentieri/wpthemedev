<?php 
        $reviewArgs = array( 
            'category' => '5', 
            'posts_per_page' => 10
        );
        $reviews = get_posts( $reviewArgs );
        foreach ($reviews as $post) :  setup_postdata($post); 
        ;?>
        <a class="mini__post__container" href="<?php the_permalink() ;?>">
            <div class="title_post">
                <h3><?php the_title(); ?></h3>
                <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
                <p class="content"><?php the_excerpt(); ?></p>
            </div>
        </a>

    <?php
        endforeach; 
?>