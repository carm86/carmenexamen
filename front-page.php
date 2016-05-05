<?php 
/**
*
* The startpage.
*
*
*/

get_header();
the_post();
?>

<body <?php body_class();?>>

<div class="container-fluid">

    <div class="row">

        <img class="img-responsive image-width" src="<?php the_field('image'); ?>" />

    </div>

</div>

<div class="container-fluid">

    <div class="row text-content">

        <?php  if( have_rows('information') ):

            // loop through the rows of data
            while ( have_rows('information') ) : the_row(); ?>


                <h2 class="headline"><?php the_sub_field('headline'); ?></h2>
                <p class="textcontentp"><?php the_sub_field('text'); ?></p>

                <?php the_content()?>

            <?php  endwhile;

            else :

            // no rows found
            endif;?>

    </div> <!-- /row -->

</div>

    <div class="container">

         <div class="row three-column">

                 <?php if( have_rows('information1') ):
                    while ( have_rows('information1') ) : the_row(); ?>

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <img class="img-responsive imagesize"  src="<?php the_sub_field('image');?>">
                        <a href="<?php the_sub_field ('url'); ?>"> <h2 class="h2text"><?php the_sub_field ('titel'); ?></h2></a>
                        <p class="fieldtext"><?php the_sub_field('text');?></p>

                    </div>

                 <?php endwhile;

                     else :

                endif;?>

        </div>

    </div>

<?php get_footer(); ?>
