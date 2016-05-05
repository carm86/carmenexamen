<?php
/**

 * Template Name: Team

*/

get_header();
the_post();
?>

<?php


// Get 'team' posts

$team_posts = get_posts( array(
    'post_type' => 'team',
    'posts_per_page' => -1, // Unlimited posts
    'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ):
    ?>
  <div class="container">
    <section class="row profiles">
        <div class="intro">
            <h2>Meet The Team</h2>
            <p class="lead"></p>
        </div>

        <?php
        foreach ( $team_posts as $post ):
            setup_postdata($post);

            // Resize and CDNize thumbnails using Automattic Photon service
            $thumb_src = null;
            if ( has_post_thumbnail($post->ID) ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
                $thumb_src = $src[0];
            }
            ?>

            <div class="team-section">

            <article class="col-sm-6 profile">
                <div class="profile-header">
                    <?php if ( $thumb_src ): ?>
                        <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
                    <?php endif; ?>
                </div>

                <div class="profile-content">
                    <h3 class="teamtitle"><?php the_title(); ?></h3><br>
                    <p class="lead position"><?php the_field('team_position'); ?></p><br>
                    <?php the_content(); ?><br>
                </div>

                <div class="profile-footer">

                    <a href="tel:<?php the_field('team_phone'); ?>"></a>
                    <a href="tel:<?php the_field('team_phone'); ?>" ><?php the_field('team_phone');?></a><br>
                    <a href="mailto:<?php the_field('team_email'); ?>" ><?php the_field('team_email');?></a>

                </div>


            </article><!-- /.profile -->
            </div>
        <?php endforeach; ?>
    </section><!-- /.row -->

  </div>
<?php endif; ?>

<?php get_footer();?>