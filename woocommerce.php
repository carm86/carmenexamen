<?php
/*
 * page
 *
 */
get_header();
//the_post();
the_content();

?>
    <div class="container-fluid">

        <div class="row">

              <main id="main" class="site-main" role="main">

                    <div class="col-md-12">

                             <?php woocommerce_content(); ?>
                    
                    </div><!-- .col-md-4 -->

                </main><!-- #main -->

        </div><!--row-->

    </div><!-- .container -->


<?php get_footer(); ?>