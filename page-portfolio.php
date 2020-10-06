<?php
/*
 * Template Name: Portfolio
 */

;?>
<?php get_header();?>

<div class="portfolio__container__main">
    <div class="portfolio__container__main__text" data-aos-duration="1000" data-aos="fade-right">
        <h3>Portfolio</h3>
        <a target="blank_" href="https://github.com/LucaArgentieri" class="github__container">
        <p>Follow me on Github</p>
        <img src="<?php echo get_template_directory_uri() . "/inc/imgs/github-brands.svg"; ?>" alt="">
        </a>
            <div class="portfolio__projects__container">
            <?php 
            if(have_posts()) {
                while(have_posts()) {
                    the_post(); 
                    get_template_part('template-parts/single/portfolio');
                }
            } else {
                get_template_part('template-parts/single/empty');
            }
         ?>
        </div>
    </div>
</div>





<?php get_footer();?>
