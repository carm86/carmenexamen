<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/scripts.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/libraries/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/libraries/jquery.sidr.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/libraries/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	</body>
</html>

<footer>

    <div class="container">

        <div class="row">

            <?php if( have_rows('footer', 'options')):?>

                <?php while( have_rows('footer', 'options')): the_row();?>

                      <div class="col-md-4 col-sm-12 col-xs-12 first">

                          <?php the_sub_field('adress');?>

                      </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 second">

                            <?php the_sub_field('social');?>

                         </div>

                            <div class="col-md-4 col-sm-12 col-xs-12 third">

                                <div class="google-maps">

                                    <?php the_sub_field('map');?>

                                </div>

                            </div>

                <?php endwhile; ?>

            <?php endif ?>

        </div>

    </div>

</footer>


