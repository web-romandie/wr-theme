<?php
/**
 * Template Name: Standard page (default)
 * Description: The template for displaying standard pages
 */

get_header();

$page_id = get_option('page_for_posts');
?>
    <div class="row">
        <div class="col-md-12">
            <?php
            echo apply_filters('the_content', get_post_field('post_content', $page_id));

            edit_post_link(__('Edit', 'wr-theme'), '<span class="edit-link">', '</span>', $page_id);
            ?>
        </div>
        <div class="col-md-12">
            <?php
            get_template_part('archive', 'loop');
            ?>
        </div>
    </div>
<?php
get_footer();
