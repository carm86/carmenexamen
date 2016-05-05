<?php
/**

 * Blogsite

 */

get_header();

?>

    <div class="container-fluid">

        <div class="row blogcontent">

            <div class="col-xs-12 col-sm-8 col-centered">

                <?php

                if(    have_posts() ):

                    while(  have_posts() ):  the_post(); ?>


                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php if( has_post_thumbnail() ): ?>

                                <div class="thumbnail-imges"><?php the_post_thumbnail('large'); ?></div>

                                <?php the_title('<h1 class="blogtitles">','</h1>' ); ?>

                            <?php endif; ?>


                           <p class="blogcontentext"><?php the_content(); ?></p>


                            <small class="postet"><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link(); ?></small>

                            <hr>

                            <?php
                            if( comments_open() ){
                                comments_template();
                            } else {
                                echo '<h5 class="text-center">Sorry, Comments are closed!</h5>';
                            }

                            ?>

                        </article>

                    <?php endwhile;

                endif;

                wp_reset_postdata();

                ?>

            </div>

        </div>

    </div>



<?php get_footer();?>