<?php
/** 

* Blogsite

*/

get_header();

?>

<div class="container-fluid">

    <div class="row blogcontent">

        <div class="col-xs-12 col-sm-8">

                <?php

                if( have_posts() ):

                        while(   have_posts() ): the_post(); ?>

                            <div class="thumbnail-img"><?php the_post_thumbnail('large');?></div>

                            <div class="postblogs">

                                <h1 class="blogtitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                <small class="postet">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small>
                                <p class="blogcontentext"><?php the_content(); ?></p>

                            </div>

                        <?php endwhile;?>
                <?php endif;?>

        </div>

                <div class="col-sm-12 col-md-4 ">

                    <?php get_sidebar(); ?>

                </div>
    </div>

</div>

<?php get_footer();?>