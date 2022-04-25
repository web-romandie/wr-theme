<?php
/**
 * Template Name: News
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
    <div class="begin ">
        <h3 class="white left">
            <?php while (have_posts()) :
                the_post();
                the_title();
            endwhile; ?>
        </h3>
    </div>

    <div class="container contenu mb ">
        <div class="row-fluid">
            <div class="span12 mb"></div>
            <?php the_content(); ?>
        </div>
    </div>

<?php get_footer();

