<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <div class="logo-icon">🚀</div>
            <span class="site-title">
                <?php 
                if (get_bloginfo('name')) {
                    bloginfo('name');
                } else {
                    echo 'SITE_NAME: Tech Innovation Hub';
                }
                ?>
            </span>
        </a>
        
        <nav class="main-navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => 'hf_tech_fallback_menu'
            ));
            ?>
        </nav>
    </div>
</header>

<?php if (is_home() || is_front_page()) : ?>
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">
            HERO_TITLE: [Exploring the Future of Technology]
        </h1>
        <p class="hero-description">
            HERO_DESC: [Join us on a journey through AI, ML, blockchain, and emerging technologies shaping tomorrow.]
        </p>
    </div>
</section>
<?php endif; ?>
