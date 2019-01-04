<?php get_header(); ?>

    <div id="mainPicture">
        <div class="picture" style="
        background-image:url(<?php header_image() ?>);">
            <div id="headerTitle"><?php bloginfo('title'); ?></div>
            <div id="headerSubtext"><?php bloginfo('description'); ?></div>
        </div>
    </div>
    
<?php 
get_template_part('template-parts/content');

get_footer(); 

?>