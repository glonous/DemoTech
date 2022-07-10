<?php

/**
 * Setting child theme settings
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


/**
 * Widgets
 */
function demotech_widgets_init(){    
	$sidebars = array(
			'hero'   => array(
				'name'        => __( 'Homepage Hero Section', 'demotech' ),
				'id'          => 'hero', 
				'description' => __( 'Marquesina principal del theme', 'demotech' ),
			),
			'about'   => array(
					'name'        => __( 'About Section', 'demotech' ),
					'id'          => 'about', 
					'description' => __( '', 'demotech' ),
			),
			'cta' => array(
					'name'        => __( 'Call To Action Section', 'demotech' ),
					'id'          => 'cta', 
					'description' => __( '', 'demotech' ),
			),
			'testimonial' => array(
					'name'        => __( 'Testimonial Section', 'demotech' ),
					'id'          => 'testimonial', 
					'description' => __( '', 'demotech' ),
			)
	);
	
	foreach( $sidebars as $sidebar ){
			register_sidebar( array(
			'name'          => esc_html( $sidebar['name'] ),
			'id'            => esc_attr( $sidebar['id'] ),
			'description'   => esc_html( $sidebar['description'] ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name"><span>',
			'after_title'   => '</span></h2>',
		) );
	}
}
add_action( 'widgets_init', 'demotech_widgets_init' );


/**
 * Allow svg uploads to wp
 */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $filetype = wp_check_filetype( $filename, $mimes );
  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];
}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
					width: 100% !important;
					height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );



/**
 * Load custom scripts, framework and css into Demotech
 */
function add_theme_scripts() {

  /* uikit css */
	wp_enqueue_style( 'uikit', get_stylesheet_directory_uri() . '/css/uikit.min.css');
	/* uikit jss */
	wp_enqueue_script( 'uikit', get_stylesheet_directory_uri() . '/js/uikit.min.js');
	wp_enqueue_script( 'uikit-icons', get_stylesheet_directory_uri() . '/js/uikit-icons.min.js');
  /* Theme js */
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>