<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="container-fluid">
                <?php 
                    if( function_exists( 'the_custom_logo')){
                        the_custom_logo();
                    }
                ?>
            <?php
                wp_nav_menu([
                    'theme_location'    => 'menu-top',
                    'container'         => false,
                    "menu_class"        => 'menu_du_haut'
                ])
            ?>
        </nav>