<?php

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style'); 
       
}

add_action('wp_enqueue_scripts', 'load_stylesheets');




function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');

}

add_action('wp_enqueue_scripts', 'include_jquery');





function loadjs()
{

    wp_register_script('customjs' , get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadjs');



add_theme_support('menus');


add_theme_support('post-thumbnails');

add_theme_support('custom-logo');

add_theme_support('widgets');

function my_sidebars()
{
    register_sidebar(
            array(

                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_tit' => '</h4'
            )

    );

    register_sidebar(
        array(

            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_tit' => '</h4'
        )

);
register_sidebar(
    array(

        'name' => 'Header1 Sidebar',
        'id' => 'header1-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);
register_sidebar(
    array(

        'name' => 'Label1 Sidebar',
        'id' => 'lab1-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);
register_sidebar(
    array(

        'name' => 'Label2 Sidebar',
        'id' => 'lab2-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Label3 Sidebar',
        'id' => 'lab3-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Label 4 Sidebar',
        'id' => 'lab4-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Section 2 Sidebar',
        'id' => 'sec2-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Label 5 Sidebar',
        'id' => 'lab5-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Label 6 Sidebar',
        'id' => 'lab6-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Section 3 Sidebar',
        'id' => 'sec3-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Section 4 Sidebar',
        'id' => 'sec4-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);


register_sidebar(
    array(

        'name' => 'Label 7 Sidebar',
        'id' => 'lab7-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Label 8 Sidebar',
        'id' => 'lab8-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);

register_sidebar(
    array(

        'name' => 'Hero Sidebar',
        'id' => 'hero-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_tit' => '</h4'
    )

);


}
add_action('widgets_init', 'my_sidebars');


register_nav_menus( 

    array(
            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
    )

    );












