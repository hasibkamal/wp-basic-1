<div class="contentBox">
    <div class="innerBox" style="background-image:url(<?php echo get_template_directory_uri().'/images/content_back.png' ?>);">
        <?php while(have_posts()): the_post(); ?>
        <div class="contentTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php the_post_thumbnail(); ?>
        <div class="contentText">
            <?php
                if(is_single())
                    the_content();
                else{
                    $readMore = '<p><a href="'.get_the_permalink().'">Read More..</a></p>';
                    echo wp_trim_words(get_the_content(),30,$readMore);
                }
            ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>