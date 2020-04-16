<?php
	function alpha_motel_scripts(){

		// stylesheets
		wp_enqueue_style( 'main_style', get_stylesheet_uri());
		wp_enqueue_style( 'style_file', get_template_directory_uri().'/css/style.css');
		wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_style( 'font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css');
		wp_enqueue_style( 'slick_file', get_template_directory_uri().'/css/slick.css');
		wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css');
		wp_enqueue_style( 'animate_file', get_template_directory_uri().'/css/animate.css');
		wp_enqueue_style( 'animations_file', get_template_directory_uri().'/css/animations.css');
		wp_enqueue_style( 'animations-ie-fix', get_template_directory_uri().'/css/animations-ie-fix.css');
		wp_enqueue_style( 'component_file', get_template_directory_uri().'/css/component.css');

		// javascripts
		wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/js/jquery.min.js',array(),'1.1',true );
		wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/js/bootstrap.min.js',array(),'1.1',true );
		wp_enqueue_script('slick.min.js',get_template_directory_uri().'/js/slick.min.js',array(),'1.1',true );
		wp_enqueue_script('macy.js',get_template_directory_uri().'/js/macy.js',array(),'1.1',true );
		wp_enqueue_script('modernizr.custom.js',get_template_directory_uri().'/js/modernizr.custom.js',array(),'1.1',true );
		wp_enqueue_script('jquery.dlmenu.js',get_template_directory_uri().'/js/jquery.dlmenu.js',array(),'1.1',true );
		wp_enqueue_script('css3-animate-it.js',get_template_directory_uri().'/js/css3-animate-it.js',array(),'1.1',true );
		wp_enqueue_script('custom.js',get_template_directory_uri().'/js/custom.js',array(),'1.1',true );
	}

	// attach with action hook
	add_action("wp_enqueue_scripts","alpha_motel_scripts");



	
	function register_alpha_theme_menu(){
		// resgister menu
		register_nav_menus(
			array(
				'primary-menu' => __('Primary Menu'),
				'footer_menu'  => __('Footer Menu')
			)
		);
	}
	// attach with action hook
	add_action("init","register_alpha_theme_menu");


	// logo function
	// add_theme_support('custom-logo');

	function alpha_custom_logo_setup(){
		$default = array(
			'height'      => 100,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array('site-title', 'site-description')
		);

		add_theme_support("custom-logo",$default);
	}

	add_action("after_setup_theme", "alpha_custom_logo_setup");

function register_my_post(){
	// code
	register_post_type('custom_projects',array(
		'labels' => array(
			'name' => __('Our Posts'),
			'singular_name' => __('custom_posts')),

			'public' => true,
			'show_in_nav_menus' => true,
			'has_archive' => false,
			'supports' => array('title','editor','excerpt','author','comments','revisions','custom_fields')

		)
		);
	
}

add_action("init", "register_my_post"); 
// init = initializes just after theme activation.


// Sidebar
function themename_register_widgets() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );

	register_sidebar( array(
        'name'          => __( 'Primary Sidebar2', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
	) );
}
	
add_action("widgets_init","themename_register_widgets");

?>