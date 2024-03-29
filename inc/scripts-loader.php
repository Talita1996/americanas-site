<?php

function add_scripts()
{
	$the_theme = wp_get_theme();
/*
	echo '<style>
			body {
				animation: fadeInAnimation ease 2s;
				animation-iteration-count: 1;
				animation-fill-mode: forwards;
			}
			@keyframes fadeInAnimation {
				0% {
					opacity: 0;
				}
				100% {
					opacity: 1;
				}
			}
		</style>';*/

	wp_enqueue_style('fonts', get_stylesheet_directory_uri() . '/assets/css/fonts-imports.css', array(), null);
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.js', array(), null, true);
	wp_enqueue_script('footer', get_stylesheet_directory_uri() . '/template-parts/footer/footer.js', array(), null, true);
	wp_enqueue_script('head', get_stylesheet_directory_uri() . '/assets/js/head.js', array(), null, true);
	wp_localize_script('head', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

	if (!is_page_template('page-templates/page_home.php')) {
		wp_enqueue_script('header', get_stylesheet_directory_uri() . '/template-parts/header/header.js', array(), null, true);
		wp_localize_script('header', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
	}

	if (is_404()) {
		wp_enqueue_style('404', get_stylesheet_directory_uri() . '/assets/css/404/404.css', array(), null);
	}

	if (is_category()) {
		wp_enqueue_style('category', get_stylesheet_directory_uri() . '/assets/css/category/category.css', array(), null);
		wp_enqueue_script('category', get_stylesheet_directory_uri() . '/global-templates/category/category.js', array(), null);
	}

	if (is_search()) {
		wp_enqueue_style('search', get_stylesheet_directory_uri() . '/assets/css/search/search.css', array(), null);
		wp_enqueue_script('search', get_stylesheet_directory_uri() . '/global-templates/search/search.js', array(), null);
	}

	if (is_page_template('page-templates/page_home.php')) {
		wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/home/home.css', array(), null);
		wp_enqueue_script('home', get_stylesheet_directory_uri() . '/page-templates/home/home.js', array(), null);

		wp_enqueue_script('header-home', get_stylesheet_directory_uri() . '/template-parts/header-home/header-home.js', array(), null, true);
	}
	if (is_page_template('page-templates/page_termos.php')) {
		wp_enqueue_style('termos', get_stylesheet_directory_uri() . '/assets/css/termos/termos.css', array(), null);
	}
	
	if (is_page_template('page-templates/page_faq.php')) {
		wp_enqueue_style('faq', get_stylesheet_directory_uri() . '/assets/css/faq/faq.css', array(), null);
		wp_enqueue_script('faq', get_stylesheet_directory_uri() . '/page-templates/faq/faq.js', array( 'jquery' ), null);

		wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null);
	}

	if (is_page_template('page-templates/page_privacidade.php')) {
		wp_enqueue_style('privacidade', get_stylesheet_directory_uri() . '/assets/css/privacidade/privacidade.css', array(), null);
	}

	if (is_single()) {
		wp_enqueue_style('single', get_stylesheet_directory_uri() . '/assets/css/single-post/single.css', array(), null);
		wp_enqueue_script('single', get_stylesheet_directory_uri() . '/global-templates/single-post/single.js', array(), null);
	}

}
add_action('wp_enqueue_scripts', 'add_scripts');

function add_scripts_footer() {

	if (is_page_template('page-templates/page_faq.php')) {
		wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), null);
	}
	
}
add_action('wp_footer', 'add_scripts_footer');


function add_cpt_function() {
	require_once('class-faq.php');
}
add_action('init', 'add_cpt_function', 0);