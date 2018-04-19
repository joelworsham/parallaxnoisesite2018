<?php
/**
 * Primary navigation.
 *
 * @since {{VERSION}}
 */

wp_nav_menu( array(
	'container'      => false,
	'menu_class'     => 'primary-nav menu align-right',
	'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
	'theme_location' => 'primary-nav',
	'depth'          => 3,
	'fallback_cb'    => false,
	'walker'         => new Foundationpress_Top_Bar_Walker(),
));