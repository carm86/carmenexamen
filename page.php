<?php
/*
 * page
 *
 */
get_header();
the_post();
the_content();

?>

<div class="container-fluid">

    <div class="row pagesite">

        <main id="main" class="site-main" role="main">

        <?php if (have_rows('pagecontent')):

            while( have_rows('pagecontent')) : the_row();?>

                <div class="col-md-6">

                    <img class="img-responsive pageimage" src="<?php the_sub_field('image');?>">

                </div>

                <div class="col-md-6">

                    <h2 class="pagetitel"><?php the_sub_field('titel');?></h2>
                    <p class="contenttext"><?php the_sub_field('content');?></p>
                    <p class="button"> <?php the_sub_field('button');?></p>

                </div>

            <?php endwhile;

            else :

        endif;?>

       </main>

    </div>

</div>

<?php get_footer(); ?>