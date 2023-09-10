<?php

/* --------------------- Adiciona e manipula menus ---------------------*/
function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}
add_action('init', 'register_my_menus');

/* --------------------- Adiciona logo ---------------------*/
function americanas_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'americanas_custom_logo_setup' );

function americanas_customize_register( $wp_customize ) {
    $wp_customize->add_setting('logo_mobile');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sticky_header_logo', array(
        'label' => 'Logo mobile',
        'section' => 'title_tagline', 
        'settings' => 'logo_mobile',
        'priority' => 8 
    )));
}
add_action( 'customize_register', 'americanas_customize_register' );

/* --------------------- Adiciona areas do footer ---------------------*/
function footer_widgets() {

	register_sidebar(
		array(
			'name' => 'Footer col 1',
			'id' => 'footer-col-1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer col 2',
			'id' => 'footer-col-2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Footer col 3',
			'id' => 'footer-col-3',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'footer_widgets' );


require get_parent_theme_file_path( '/inc/scripts-loader.php' );

add_theme_support( 'post-thumbnails' );

/* --------------------- Modifica o tamanho do resumo --------------------- */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/* --------------------- Modifica a logo em mobile --------------------- */
function logo_mobile_callback()
{

	$mobile_logo_link = get_theme_mod('logo_mobile') ? get_theme_mod('logo_mobile') : the_custom_logo();
	$custom_logo_attr = array(
		'class'   => 'custom-logo',
		'loading' => false,
	);
	$custom_logo_id = attachment_url_to_postid($mobile_logo_link);
	$blog_id = get_current_blog_id();
	$custom_logo_attr = apply_filters( 'get_custom_logo_image_attributes', $custom_logo_attr, $custom_logo_id, $blog_id );
	$mobile_logo = wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr );
	echo $mobile_logo;

	wp_die();
}

add_action('wp_ajax_logo_mobile', 'logo_mobile_callback');
add_action('wp_ajax_nopriv_logo_mobile', 'logo_mobile_callback');

function logo_desktop_callback()
{

	$logo = the_custom_logo();

	echo $logo;

	wp_die();
}

add_action('wp_ajax_logo_desktop', 'logo_desktop_callback');
add_action('wp_ajax_nopriv_logo_desktop', 'logo_desktop_callback');