<?php
/**
 * Template Name: Standard page (default)
 * Description: The template for displaying standard pages
 */

get_header();

$page_id = get_option('page_for_posts');
?>
    <main id="main" class="container">
        <div class="row">
            <div class="col-md-12">
                <?= apply_filters('the_content', get_post_field('post_content', $page_id)) ?>
                <?php edit_post_link(__('Edit', 'wr-theme'), '<span class="edit-link">', '</span>', $page_id); ?>
            </div>
        </div>
    </main>
<?php
get_footer();
