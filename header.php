<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
        wp_nav_menu([
            'theme_location'=>'primary',
            'menu_id'=>'page',
            'walker'=> new Custom_Nav_Walker()
        ]); 
    ?>