<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
    <div class="swiper homepage">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if (get_field('homepage_slider', 218, true)) : ?>
                <?php foreach (get_field('homepage_slider', 218, true) as $item) : ?>
                    <div class="swiper-slide">
                        <img src="<?= $item["image"] ?>" alt="Slider image">
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container content">
        <h3> <?php _e('OUR ETHICAL VALUES', 'theme-4swiss') ?> </h3>
        <div class="schema">
            <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo ICL_LANGUAGE_CODE ?>_4swiss_large.png"
                 alt="4swiss relocation" class="large">
            <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo ICL_LANGUAGE_CODE ?>_4swiss_haut.png"
                 alt="4swiss relocation" class="haut">
        </div>
        <div class="span12 hi">
            <?php the_content(); ?>
            <hr>
        </div>
    </div>


<?php get_footer();

