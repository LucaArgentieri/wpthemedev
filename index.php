<?php get_header();?>
<div class="blog__container__main">
    <div class="blog__container__main__text" data-aos-duration="1000" data-aos="fade-right">
        <h3>Blog</h3>
        </div>
        <div class="blog__card__container" data-aos-duration="1000" data-aos="fade-right">  
            <?php 
                if(have_posts()) {
                    while(have_posts()) {
                        the_post(); 
                        get_template_part('template-parts/archive/content');
                    }
                } else {
                    get_template_part('template-parts/archive/empty');
                }
            ?>
        </div>  
    </div>   
</div>

<?php get_footer();?>