<?php
function child_theme_enqueue_assets() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));

    $styles = [
        'header-style' => '/template-parts/header/header.css',
        'banner-style' => '/template-parts/banner/banner.css',
        'tooltip-style' => '/template-parts/tooltip-component/tooltip-component.css',
        'since-component-style' => '/template-parts/since-component/since-component.css',
        'group_figures-style' => '/template-parts/group_figures/group_figures.css',
        'actuality-style' => '/template-parts/actuality/actuality.css',
        'footer-style' => '/template-parts/footer/footer.css'
    ];

    foreach ($styles as $handle => $path) {
        wp_enqueue_style($handle, get_stylesheet_directory_uri() . $path, array(), filemtime(get_stylesheet_directory() . $path));
    }

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap', false);
    wp_enqueue_style('google-fonts-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', false);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');

    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/main.js', array(), filemtime(get_stylesheet_directory() . '/main.js'), true);
}

add_action('wp_enqueue_scripts', 'child_theme_enqueue_assets');
?>

