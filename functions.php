<?php
function anoceanofskySetup(){
	load_theme_textdomain('anoceanofsky',get_template_directory().'/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(650,750,true);
	add_theme_support('custom-header',[
		'default-image'=> get_template_directory_uri().'/images/anoceanofsky.jpg',
		'height'=>325,
		'width'=>650
	]);
	
	add_theme_support('custom-background',[
		'default-image'=> get_template_directory_uri().'/images/background.png'
	]);

	register_nav_menus([
		'primary'=>__('Primary Menu','anoceanofsky'),
		'social'=>__('Social Menu','anoceanofsky')
	]);



}

add_action('after_setup_theme','anoceanofskySetup');

function anoceanofskyScripts(){
	wp_enqueue_style('anoceanofsky-style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','anoceanofskyScripts');

require_once('custom-navwalker.php');