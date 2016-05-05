<?php
/*
Template Name: Template-About
*/

get_header();
the_post();
?>


    <div class="container-fluid">

        <div class="row text-content">

            <?php  if( have_rows('information') ):

                // loop through the rows of data
                while ( have_rows('information') ) : the_row(); ?>

                    <h2 class="headline"><?php the_sub_field('headline'); ?></h2>
                    <p class="textcontentp"><?php the_sub_field('text'); ?></p>

                <?php  endwhile;

            else :

                // no rows found
            endif;?>

        </div> <!-- /row -->

    </div>


<?php get_footer();?>