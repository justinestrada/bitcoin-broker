<?php
/**
 * Bitcoin Broker functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bitcoin_broker
 */

/* Working Protocal Variable */
$protocol = is_ssl() ? 'https' : 'http';

/*
* Sanitize Text
=====================================*/
function sanitize_text( $text ) {
    return sanitize_text_field( $text );
}
/*
* Sanitize TextArea
=====================================*/
function sanitize_textarea( $text ) {
    return esc_textarea( $text );
}

if ( ! function_exists( 'bitcoin_broker_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bitcoin_broker_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Bitcoin Broker, use a find and replace
	 * to change 'bitcoin_broker' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bitcoin_broker', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Page & Post Excerpt.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'excerpt' );
	function custom_excerpt_length( $length ) {
		return 10;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header-menu' => esc_html__( 'Header Menu', 'bitcoin_broker' ),
		// 'footer-menu-column-one' => esc_html__( 'Footer Menu Column One', 'bitcoin_broker' ),
		// 'footer-menu-column-two' => esc_html__( 'Footer Menu Column Two', 'bitcoin_broker' ),
		// 'footer-menu-column-three' => esc_html__( 'Footer Menu Column Three', 'bitcoin_broker' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'bitcoin_broker' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'video',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'bitcoin_broker_setup' );


/**
 *
 * Remove <p> tags from category description
 */
// remove_filter('term_description','bitcoin_broker');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bitcoin_broker_widgets_init( $name, $id, $description) {
	register_sidebar( array(
	  'name'          => esc_html__( $name, 'bitcoin_broker' ),
	  'id'            => $id,
	  'description'   => __($description),
	  'before_widget' => '<div class="panel-group widget-group %2$s '.$id.'" id="accordion%1$s" role="tablist" aria-multiselectable="true"><div class="panel panel-default">',
	  'after_widget'  => '</div></div></div></div>',
	  'before_title'  => '<div class="panel-heading" role="tab" id="heading"><h4 class="panel-title"><a role="button" data-toggle="collapse" href="#collapse" aria-expanded="true" aria-controls="collapse">',
	  'after_title'   => '<i class="fa fa-caret-down float-right"></i></a></h4></div><div id="collapse" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading"><div class="panel-body">',
	) );
}
bitcoin_broker_widgets_init( 'Page Sidebar', 'page-sidebar-widget', 'Displays on the side of pages with a sidebar.' );
bitcoin_broker_widgets_init( 'Post Sidebar', 'post-sidebar-widget', 'Displays on the side of posts with a sidebar.' );
bitcoin_broker_widgets_init( 'Sauce Sidebar', 'sauce-sidebar-widget', 'Displays on the side of products with a sidebar.' );
bitcoin_broker_widgets_init( 'Footer Column One', 'footer-column-one-widget', 'Displays on column one in the footer.' );
bitcoin_broker_widgets_init( 'Footer Column Two', 'footer-column-two-widget', 'Displays on column two in the footer.' );
bitcoin_broker_widgets_init( 'Footer Column Three', 'footer-column-three-widget', 'Displays on column three in the footer.' );

function remove_widget_title( $widget_title ) {
	if (!$widget_title):
		return 'Set Widget Title';
	else:
		return $widget_title;
	endif;
}
add_filter( 'widget_title', 'remove_widget_title' );

// Enable the use of shortcodes in text widgets.
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Enqueue scripts and styles.
 */
function bitcoin_broker_scripts() {

	wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css');

	wp_enqueue_style('bitcoin_broker-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

	wp_enqueue_style('bitcoin_broker-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans');

	wp_enqueue_style('local-fonts', get_template_directory_uri(). '/css/fonts.css');

	wp_enqueue_style('bitcoin_broker-style', get_stylesheet_uri(), array(), '1.0' );

	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array( 'jquery' ));

	wp_enqueue_script( 'bitcoin_broker-general-theme-script', get_template_directory_uri() . '/js/theme-script.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bitcoin_broker_scripts' );

/* Extend bootstrap menus for WP
* Register Custom Navigation Walker */
require_once( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' );

/* Extend Woocommerce */
require_once( get_template_directory() . '/inc/extend-woocommerce.php' );

/* Extend Woocommerce */
require_once( get_template_directory() . '/inc/extend-restrict-content-pro.php' );

/*
* Favicon
=====================================*/
function bitcoin_broker_fav() {
	  echo '<link rel="Favicon Icon" href="'; echo get_template_directory_uri(); echo '/img/favicon/KRBE-bull-favicon.png" type="image/ico" sizes="64x64"/>';
}
add_action( 'login_enqueue_scripts', 'bitcoin_broker_fav' );
add_action('wp_head', 'bitcoin_broker_fav');
add_action('admin_head', 'bitcoin_broker_fav');

/*
* Google Tag Manager
=====================================*/
function bitcoin_broker_google_tagmanager() { ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-55DTD2S');</script>
	<!-- End Google Tag Manager -->
<?php }
add_action('wp_head', 'bitcoin_broker_google_tagmanager');

/*
* Google Site Verification
=====================================*/
function googleSiteVerification() { ?>
<?php }
add_action('wp_head', 'googleSiteVerification');

/*
* BreadCrumb ShortCode
* Creates [breadcrumb]
======================================== */
/* BreadCrumb Function
======================================== */
include( locate_template('shortcodes/shortcode-breadcrumb.php') );

/* Creates shortcode [social_shares] */
function bitcoinbroker_social_shares_func(){
	get_template_part( 'shortcodes/shortcode', 'social-shares' );
}
// add_shortcode('social_shares', 'bitcoinbroker_social_shares_func');

function bitcoinbroker_get_the_slug( $id=null ){
  if( empty($id) ):
    global $post;
    if( empty($post) )
      return ''; // No global $post var available.
    $id = $post->ID;
  endif;

  $slug = basename( get_permalink($id) );
  return $slug;
}


/* ============================================================
Pagination
 ============================================================ */
function bitcoinbroker_numeric_posts_nav( $query = NULL, $paged = NULL ) {

	if ( empty( $query ) ) {
		global $wp_query;
	} else {
		$wp_query = $query;
	}

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	if ( empty( $paged ) ) {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	}

	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination-navigation clearfix"><ul style="margin: 0; padding: 0;">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
	}

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li>…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );
	}

	echo '</ul></div>' . "\n";

}


function bitcoinbroker_admin_area_logo() { ?>
    <style type="text/css">
	body.login {
		/*background: url('https://mydigitalsauce.com/wp-content/themes/mydigitalsauce/img/bg/pattern/darkened-saucy-technology-pattern.jpg');*/
	}
	body.login div#login h1 a {
		background-image: url('<?php echo get_site_url(); ?>/wp-content/themes/bitcoin-broker/img/logo/KRBE-digital-assets-group-logo.png');
	}
	body.login label {
	    color: #444;
	    font-size: 16px;
	}
	body.login form .input,
	body.login input[type=text] {
	    padding: 5px;
	    min-height: 40px;
	    border-radius: 5px;
	    border: 1px solid #c7c7c7;
	}
	#wp-submit {
	    background: #444;
	    border-color: #444;
	    -webkit-box-shadow: 0 1px 0 #444;
	    box-shadow: 0 1px 0 #444;
	    text-shadow: none;
	}
	#wp-submit:hover,
	#wp-submit:focus {
	    background: #444;
	    border-color: #444;
	}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'bitcoinbroker_admin_area_logo' );

function bitcoinbroker_adminlogo_url($url) {
    return get_site_url();
}
add_filter( 'login_headerurl', 'bitcoinbroker_adminlogo_url' );

add_action('after_setup_theme', 'bitcoinbroker_remove_admin_bar');

function bitcoinbroker_remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

function bitcoinbroker_admin_default_page() {
	if ( ! current_user_can('administrator') && ! is_admin() ) {
	  return '/members-area';
	} else {
	  return '/wp-admin';
	}
}

add_filter('login_redirect', 'bitcoinbroker_admin_default_page');
