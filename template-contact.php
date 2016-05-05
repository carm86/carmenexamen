<?php
/*
 Template Name: Template-Contact
*/

get_header();
the_post();

?>

<div class="container">

    <div class="row">

        <?php if( have_rows('pagecontact')) :
            while( have_rows('pagecontact')) : the_row();?>

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h2 class="titelpagecontact"><?php the_sub_field('titel');?></h2>
                    <p class="textpagecontact"><?php the_sub_field('text');?></p>

                </div>

            <?php endwhile;

            else:

        endif;?>

    </div>

</div>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">

                <?php if( get_field('map')):?>

                <div class="google-maps">
                    <?php the_field('map');?>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">

              <div class="contactform">

                  <?php the_content();?>

              </div>

            </div>
                <?php endif;?>

        </div>

    </div>



<?php get_footer();?>