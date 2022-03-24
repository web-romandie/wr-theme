<?php
/**
 * Template Name: News detail
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

    <div class="container content single-post-wrapper">
        <?php if (have_posts()) : ?>
            <!--  todo reformat with foreach and update wr-theme "source" -->
            <?php while (have_posts()) :
                the_post(); ?>
                <div class="date">
                    <?php the_time('d.m.y'); ?>
                </div>
                <h6> <?php the_title(); ?> </h6>
                <?php the_post_thumbnail('medium'); ?>
                <div class="justify">
                    <?php the_content(); ?>
                </div>
                <div class="back-to-news mb-4">
                    <a class="red" href="<?= get_page_link(18); ?>">
                        <?php _e('retour à toutes les actualités') ?>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>


<?php get_footer();
