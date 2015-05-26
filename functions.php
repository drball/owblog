<?php

/* Load Press Coders theme framework class */
if( file_exists( get_template_directory().'/api/classes/api.php' ) ) {
	require_once( get_template_directory().'/api/classes/api.php' );
}

class PC_Main_Theme extends PC_Framework {

	public function __construct($theme_name) {
		/* Call parent construtor manually to make both constructors fire. */
		parent::__construct($theme_name);

		/* Add theme support for framework features. */
		add_action( 'after_setup_theme', array( &$this, 'theme_support' ) );
	}

	/* Add support for theme features. */
	public function theme_support() {

		/** WORDPRESS BUILT-IN SUPPORTED THEME FEATURES **/

		add_theme_support( 'automatic-feed-links' );	/* Add posts and comments RSS feed links to head. */
		add_theme_support( 'post-thumbnails' );			/* Use the post thumbnails feature. */
		add_theme_support( 'custom-background' );		/* A simple uploader to change the site background image. */
		add_editor_style();								/* Post/page editor style sheet to match site styles. */

		/** FRAMEWORK SUPPORTED THEME FEATURES **/

		add_theme_support( 'theme-options-page' );							/* Display a theme options page. */
		add_theme_support( 'shortcodes' );									/* Include all framework shortcodes. */
		add_theme_support( 'social-media-buttons', 'pc_pre_post_meta' );	/* Include the social media buttons in single.php. */
		add_theme_support( 'fancybox' );									/* Include Fancybox lightbox. */
        add_theme_support( 'superfish' );									/* Load Superfish jQuery menu. */
        add_theme_support( 'modernizr' );									/* Load Modernizr library. */
        add_theme_support( 'fitvids' );										/* Responsive video resizing. */
		
        /* Include specified framework widgets. */
		add_theme_support( 'pc_widgets',	'twitter-feed',
											'theme-recent-posts',
											'blog-style-recent-posts',
											'color-scheme-switcher',
											'info-box'
		);

		/* Add array of menu location labels, or leave 2nd parameter blank for a single default menu. */
		add_theme_support( 'custom-menus', array( 'Primary Navigation', 'Top Menu' ) );

		/* Add array of theme color schemes. */
		add_theme_support( 'color-schemes',  array( __( 'Navy', 'presscoders' ) => 'default',
													__( 'Black', 'presscoders' ) => 'black' ) );

		/* ADDITIONAL THEME FEATURES */

		/* Default thumbnail size for post thumbnails. */
		set_post_thumbnail_size( 580, 200, true );

		/* Example adding an extra custom thumbnail size. */
		// add_image_size( 'blog-thumb', 620, 300, true );
	}

} /* End class definition */

/* Create theme class instance */
global $pc_theme_object;
$pc_theme_object = new PC_Main_Theme( 'Designfolio' );


//--custom shortcodes

function paypal_shortcode()
{
    /*
     * Inserts a paypal button with 3 options in a dropdown
     */
    $code = '<form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input type="hidden" name="cmd" value="_s-xclick" />'
            .'<input type="hidden" name="hosted_button_id" value="93TP6QCC5GJMS" />'
            .'<select name="os0" style="vertical-align:middle;"><option value="Buy teabags">Buy teabags $10.00 USD</option><option value="Donate a month\'s hosting">Donate a month\'s hosting $25.00 USD</option><option value="Donate a 1/3 yearly hosting">Donate a 1/3 yearly hosting $85.00 USD</option></select><input type="hidden" name="currency_code" value="USD" />'
            .'<input type="image" alt="PayPal – The safer, easier way to pay online." name="submit" src="http://www.ongoingworlds.com/blog_files/paypal_donate.png" style="vertical-align:middle;" />'
            .'<img alt="" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1" border="0" />'
            .'</form>';

    return $code;
}
add_shortcode('paypal','paypal_shortcode');

function paypal_any_shortcode()
{
    /*
     * Inserts paypal button that will ask what amount to donate on the next page
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
                .'<input type="hidden" name="cmd" value="_s-xclick">'
                .'<input type="hidden" name="hosted_button_id" value="YKJMJHXQDYK8Y">'
                .'<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">'
                .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
                .'</form>';

    return $code;
}
add_shortcode('paypal_any','paypal_any_shortcode');


function paypal_make_private_shortcode()
{
    /*
     * Inserts paypal button that donates $30 and asks which game to make private
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
        .'<input type="hidden" name="cmd" value="_s-xclick">'
        .'<input type="hidden" name="hosted_button_id" value="5NDQ5C2BLPAMQ">'
        .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">'
        .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
        .'</form>';

    return $code;
}
add_shortcode('paypal_make_private','paypal_make_private_shortcode');

function paypal_25_shortcode()
{
    /*
     * Inserts paypal button that donates $25
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
        .'<input type="hidden" name="cmd" value="_s-xclick">'
        .'<input type="hidden" name="hosted_button_id" value="PNGVQBF6DX9NG">'
        .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">'
        .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
        .'</form>';

    return $code;
}
add_shortcode('paypal_25','paypal_25_shortcode');

function paypal_85_shortcode()
{
    /*
     * Inserts paypal button that donates $85
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
        .'<input type="hidden" name="cmd" value="_s-xclick">'
        .'<input type="hidden" name="hosted_button_id" value="CH5EDP73NXAW2">'
        .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">'
        .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
        .'</form>';

    return $code;
}
add_shortcode('paypal_85','paypal_85_shortcode');


function paypal_hero_shortcode()
{
    /*
     * Inserts paypal subscribe button for registering for hero membership
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
        .'<input type="hidden" name="cmd" value="_s-xclick">'
        .'<input type="hidden" name="hosted_button_id" value="9SG9GYNVQULEN">'
        .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">'
        .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
        .'</form>';



    return $code;
}
add_shortcode('paypal_hero_membership','paypal_hero_shortcode');



function paypal_hero_lifetime_shortcode()
{
    /*
     * Inserts paypal subscribe button for registering for hero membership
     */
    $code = '<form class="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
        .'<input type="hidden" name="cmd" value="_s-xclick">'
        .'<input type="hidden" name="hosted_button_id" value="EC7DNHHGTGTAW">'
        .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">'
        .'<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">'
        .'</form>';



    return $code;
}
add_shortcode('paypal_hero_lifetime','paypal_hero_lifetime_shortcode');

?>