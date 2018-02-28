<?php

if ( ! function_exists( 'care' ) ) :
function care_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
        
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'care' ),
	) );
}
add_action( 'after_setup_theme', 'care_setup' );
endif; 

//Add custom wp_nav_menu li in last
function add_fa_in_menu( $items, $args ) {
    if( $args->theme_location == 'primary')  {
    	if ( is_front_page() ) {
    		$items .=  '<li class="rounded-btn get-app-btn" style="background-color:'.get_theme_mod('menu_btn_bgcolor').'">
        	<a href="#">
        	<i class="fa '.get_theme_mod('menu_btn_icon').'" aria-hidden="true"></i>'.get_theme_mod('last_menu_item_data').'</a> </li>';
    	}
    	else{
        $items .=  '<li class="rounded-btn get-app-btn" style="background-color:'.get_theme_mod('menu_btn_bgcolor').'">
        	<a href="'.home_url().'#download-app">
        	<i class="fa '.get_theme_mod('menu_btn_icon').'" aria-hidden="true"></i>'.get_theme_mod('last_menu_item_data').'</a> </li>';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items','add_fa_in_menu', 10, 2);

//Mobile Device Logo Section
function care_mobile_logo($wp_customize) {
// add a setting 
    $wp_customize->add_setting('mobile_view_logo');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_view_logo', array(
        'label' => 'Upload Mobile Device Logo',
        'section' => 'title_tagline',
        'settings' => 'mobile_view_logo',
        'priority' => 8 
    )));
}
add_action('customize_register', 'care_mobile_logo');
/**
 * Enqueues scripts and styles.
 */
function care_scripts() {
	// Load the specific stylesheet.
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'freelancer', get_template_directory_uri() . '/css/freelancer.css' );
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css' );
    wp_enqueue_style( 'font-awesome-min', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_style( 'font-Lato','https://fonts.googleapis.com/css?family=Lato:300,400,700,900' );
    wp_enqueue_style( 'font-Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800,900' );    
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/vendor/assets/owlcarousel/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme-default-min', get_template_directory_uri() . '/vendor/assets/owlcarousel/assets/owl.theme.default.min.css' );       
	// wp_enqueue_script( 'jquery-aniview', get_template_directory_uri() . '/js/jquery.aniview.js');
 //   	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
	// wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js');
	// wp_enqueue_script( 'jquery-easing-min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',array('jquery'),true);
	// wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js');       
 //   	wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js');       
	// wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.js');       
	// wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js');       
	// wp_enqueue_script( 'jquery-main', get_template_directory_uri() . '/js/jquery.main.js');    
	// wp_enqueue_script( 'jquery-waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js');       
	// wp_enqueue_script( 'Counter-Up', 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js');           
}
add_action( 'wp_enqueue_scripts', 'care_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
add_theme_support( 'post-thumbnails' );
/*Remove Editor from Pages and Posts*/
function my_remove_editor() {
    remove_post_type_support( 'page','editor' );
    remove_post_type_support( 'post','editor' );
}
add_action('init', 'my_remove_editor');

/*Custom Field Options Page*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Footer/General Options');	
}

/*Custom Post Type*/
function customer_feedback() {
  register_post_type( 'cust_feedback',
    array(
      'labels' => array(
        'name' => __( 'Feedback' ),
        'singular_name' => __( 'Feedback' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail')  
    )
  );
}
add_action( 'init', 'customer_feedback' );

/*manage last menu item*/
function last_menu_item( $wp_customize ){
	$wp_customize->add_setting( 'last_menu_item_data', array(
		'default'           => 'Get App',
		'transport'         => 'refresh ',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'last_menu_item_data', array(
		'label'       => __( 'Get App', 'care' ),
		'description' => __( 'Last Menu Item label', 'care' ),
		'section'     => 'title_tagline',
        'type'        => 'text',
	) ) );

	//Add custom header and sidebar background color setting and control.
	$wp_customize->add_setting( 'menu_btn_bgcolor', array(
		'default'           => '#ffc80a',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh ',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_btn_bgcolor', array(
		'label'       => __( 'Menu Button Background Color', 'care' ),
		'description' => __( 'Applied to the menu button header.', 'care' ),
		'section'     => 'title_tagline',
	) ) );
	
	$wp_customize->add_setting( 'menu_btn_icon', array(
		'default'           => 'fa-apple',
		'transport'         => 'refresh ',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'menu_btn_icon', array(
		'label'       => __( 'Menu Icon', 'care' ),
		'description' => __( 'Insert icon class like <b>fa-apple</b>. For more details and icons refer <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a> link then click perticular icon and copy class.', 'care' ),
		'section'     => 'title_tagline',
        'type'        => 'text',
	) ) );
}
add_action( 'customize_register', 'last_menu_item');

add_image_size( 'mobilescreen-thumbnails', 287, 510 );