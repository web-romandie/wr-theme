<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'wr-theme'); ?></a>

<header>
    <nav id="header"
         class="navbar navbar-expand-md navbar-light bg-light <?= is_home() || is_front_page() ? 'home' : '' ?>">
        <div class="container">
            <a class="navbar-brand"
               href="<?php echo esc_url(home_url()); ?>"
               title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
               rel="home">
                <?php
                $header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

                if (!empty($header_logo)): ?>
                    <img src="<?php echo esc_url($header_logo); ?>"
                         alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"/>
                <?php else:echo esc_attr(get_bloginfo('name', 'display'));endif;
                ?>
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbar"
                    aria-controls="navbar"
                    aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'wr-theme'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbar" class="collapse navbar-collapse">
                <?php wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'container' => '',
                    'menu_class' => 'navbar-nav me-auto',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ]); ?>
                <form class="search-form my-2 my-lg-0"
                      role="search"
                      method="get"
                      action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="input-group">
                        <input type="text"
                               name="s"
                               class="form-control"
                               placeholder="<?php esc_attr_e('Search', 'wr-theme'); ?>"
                               title="<?php esc_attr_e('Search', 'wr-theme'); ?>"/>
                        <button type="submit"
                                name="submit"
                                class="btn btn-outline-secondary">
                            <?php esc_html_e('Search', 'wr-theme'); ?>
                        </button>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /#header -->
</header>
