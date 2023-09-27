<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register Menu
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu'
    ));

    // Metabox
    require_once('inc/coder-metabox/options.php');
});


// Post Widgets

function xtra_widgets()
{
    register_sidebar(array(
        'id' => 'blogsidebar',
        'name' => 'Blog Sidebar',
        'description' => 'Post blog sidbar',
        'before_title' => '<h2 class="mb-4 tm-post-title tm-color-primary">',
        'after_title' => '</h2>',
        'before_widget' => ' <hr class="mb-3 tm-hr-primary"><div class="xtra_widget xtra_%2$s">',
        'after_widget' => '</div>'
    ));
};


add_action('widgets_init', 'xtra_widgets');

include_once('xtra2-nav-menu.php');

// Register Custom Post Type for Team Members
register_post_type('teams', array(
    'labels' => array(
        'name' => 'Team Members',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Member',
        'edit_item' => 'Edit Member',
        'feature_image' => 'Team Member Photo',
        'set_feature_image' => 'Team Member Photo',
        'remove_feature_image' => 'Remove Team Member Photo',
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail')
));


// Coder Metabox
require_once('inc/coder-metabox/coder-metabox.php');




