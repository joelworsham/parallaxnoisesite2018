<?php
/*
Template Name: Media
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
    <div class="main-container">
        <div class="main-grid">
            <main class="main-content main-content-full-width">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php comments_template(); ?>
				<?php endwhile; ?>
            </main>
        </div>
    </div>

    <div class="media-container">

		<?php if ( $music_embeds = parallax_field_helpers()->fields->get_field( 'music_embeds' ) ) : ?>
            <section class="media-section music">

                <h2 class="media-section-title">Music</h2>

				<?php foreach ( $music_embeds as $embed ) : ?>
                    <div class="music-embed">

                        <div class="slideshow-description">
							<?php echo do_shortcode( wpautop( $embed['description'] ) ); ?>
                        </div>

						<?php echo wp_kses( $embed['embed_code'], parallax_kses_iframe() ); ?>
                    </div>
				<?php endforeach; ?>
            </section>
		<?php endif; ?>

	    <?php if ( $video_embeds = parallax_field_helpers()->fields->get_field( 'video_embeds' ) ) : ?>
            <section class="media-section video">

                <h2 class="media-section-title">Videos</h2>

			    <?php foreach ( $video_embeds as $embed ) : ?>
                    <div class="video-embed">

                        <div class="slideshow-description">
						    <?php echo do_shortcode( wpautop( $embed['description'] ) ); ?>
                        </div>

					    <?php echo wp_kses( $embed['embed_code'], parallax_kses_iframe() ); ?>
                    </div>
			    <?php endforeach; ?>
            </section>
	    <?php endif; ?>

		<?php if ( function_exists( 'soliloquy' ) && $slideshows = parallax_field_helpers()->fields->get_field( 'slideshows' ) ) : ?>
            <section class="media-section slideshows">

                <h2 class="media-section-title">Photos</h2>

				<?php foreach ( $slideshows as $slideshow ) : ?>
                    <div class="slideshow">
                        <h3 class="slideshow-title">
							<?php echo esc_attr( $slideshow['title'] ); ?>
                        </h3>

                        <div class="slideshow-description">
							<?php echo do_shortcode( wpautop( $slideshow['description'] ) ); ?>
                        </div>

						<?php soliloquy( $slideshow['id'] ); ?>
                    </div>
				<?php endforeach; ?>
            </section>
		<?php endif; ?>

    </div>

<?php
get_footer();
