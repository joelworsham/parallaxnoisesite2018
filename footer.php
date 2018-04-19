<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="site-footer">
    <div class="footer-container">
        <div class="social">
            <a href="https://facebook.com/parallaxnoise" class="social-link">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/facebook.png" alt="Facebook Icon" title="Go To Parallax Noise Facebook" />
            </a>

            <a href="https://instagram.com/parallaxnoisemusic" class="social-link">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/instagram.png" alt="Instagram Icon" title="Go To Parallax Noise Instagram" />
            </a>

            <a href="https://twitter.com/parallaxnoise" class="social-link">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/twitter.png" alt="Twitter Icon" title="Go To Parallax Noise Twitter" />
            </a>

            <a href="https://www.youtube.com/channel/UC1ItLBLckFvifMeFQTAmXEA/" class="social-link">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/youtube.png" alt="Youtube Icon" title="Go To Parallax Noise Youtube" />
            </a>
        </div>

        <div class="footer-grid">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>

</div><!-- Close site-wrap content -->

<div id="buildings"></div>

<?php wp_footer(); ?>
</body>
</html>