<?php
/*
Template Name: Front
*/

add_filter( 'parallax_show_primay_nav', '__return_false' );
add_filter( 'parallax_main_logo', function ( $url ) {
	return get_template_directory_uri() . '/dist/assets/images/parallaxnoiselogo.png';
} );

get_header(); ?>

<?php if ( $music_embed = parallax_field_helpers()->fields->get_field( 'music_embed' ) ) : ?>
    <section class="home-section music">
	    <?php echo wp_kses( $music_embed, parallax_kses_iframe()); ?>
    </section>
<?php endif; ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <section class="home-section intro" role="main">
        <div class="fp-intro">

            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                <div class="entry-content">
					<?php the_content(); ?>
                </div>
                <footer>
					<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
					?>
                    <p><?php the_tags(); ?></p>
                </footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
            </div>

        </div>

    </section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

    <section class="home-section home-nav">
		<?php get_template_part( 'template-parts/menu' ); ?>
    </section>

<?php get_footer();
