<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    
    <header>
        <?php
        get_template_part('template-parts/header/header');
        get_template_part('template-parts/banner/banner');
        get_template_part('template-parts/tooltip-component/tooltip-component');
        ?>
    </header>

    <main>
        <?php
        get_template_part('template-parts/modal/modal');
        get_template_part('template-parts/since-component/since-component');
        get_template_part('template-parts/group_figures/group_figures');
        get_template_part('template-parts/actuality/actuality');
        ?>
    </main>

    <footer>
    <?php
        get_template_part('template-parts/footer/footer');
        ?>
    </footer>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/main.js"></script>
</body>