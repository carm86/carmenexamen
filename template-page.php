<?php
/*
   Template Name: Template-Page
*/

get_header();

?>

<div class="container">

    <div class="row templatestyling">

        <?php if( have_rows('templatepage')):
                while( have_rows('templatepage')) : the_row();?>

                     <div class="col-md-3 col-sm-12 col-xs-12">

                        <img class="img-responsive templateimage" src="<?php the_sub_field('image');?>">
                        <h2 class="templatetitel"><?php the_sub_field('titel');?></h2>
                        <p class="templatetext"><?php the_sub_field('text');?></p>

                    </div>

                <?php endwhile;

                else :

        endif;?>

    </div>

</div>


<?php get_footer();?>