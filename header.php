<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
<?php endif; ?>

<div class="stars stars1"></div>
<div class="stars stars2"></div>
<div class="stars stars3"></div>

<div class="site-wrap">

    <header class="site-header" role="banner">

        <div class="site-desktop-title">
            <a href="<?php bloginfo( 'url' ); ?>" class="custom-logo-link" rel="home" itemprop="url">
                <img width="1091"
                     height="577"
                     src="<?php echo apply_filters( 'parallax_main_logo', get_template_directory_uri() . '/dist/assets/images/parallaxnoiselogosmall.png'); ?>"
                     class="custom-logo"
                     alt="Parallax Noise"
                     itemprop="logo"/>
            </a>
        </div>

		<?php
		if ( apply_filters( 'parallax_show_primay_nav', true ) ) {

			get_template_part( 'template-parts/menu' );
		}
		?>

    </header>
