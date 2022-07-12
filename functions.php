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
				'name'        => __( 'Homepage About Section', 'demotech' ),
				'id'          => 'about', 
				'description' => __( '', 'demotech' ),
		),
		'cta' => array(
				'name'        => __( 'Homepage Call To Action Section', 'demotech' ),
				'id'          => 'cta', 
				'description' => __( '', 'demotech' ),
		),
		'testimonial' => array(
				'name'        => __( 'Homepage Testimonial Section', 'demotech' ),
				'id'          => 'testimonial', 
				'description' => __( ' seccion para testimonios de los clientes', 'demotech' ),
		),
		'logocloud' => array(
			'name'        => __( 'Homepage trusted logos Section', 'demotech' ),
			'id'          => 'logocloud', 
			'description' => __( 'nube de logos de marcas de referencia', 'demotech' ),
		),
		'contact' => array(
			'name'        => __( 'Homepage Contact form', 'demotech' ),
			'id'          => 'contact', 
			'description' => __( 'Agregar el shortcode de contact form', 'demotech' ),
		),
		'microcontact' => array(
			'name'        => __( 'Homepage Small floating contact form', 'demotech' ),
			'id'          => 'microcontact', 
			'description' => __( 'Agregar el shortcode de contact form', 'demotech' ),
		),
		'features' => array(
			'name'        => __( 'Homepage features', 'demotech' ),
			'id'          => 'features', 
			'description' => __( '', 'demotech' ),
		),
		'footer-left' => array(
			'name'        => __( 'Footer left block', 'demotech' ),
			'id'          => 'footer-left', 
			'description' => __( '', 'demotech' ),
		),
		'footer-middle' => array(
			'name'        => __( 'Footer middle block', 'demotech' ),
			'id'          => 'footer-middle', 
			'description' => __( '', 'demotech' ),
		),
		'footer-right' => array(
			'name'        => __( 'Footer right block', 'demotech' ),
			'id'          => 'footer-right', 
			'description' => __( '', 'demotech' ),
		),
	);
	
	foreach( $sidebars as $sidebar ){
			register_sidebar( array(
			'name'          => esc_html( $sidebar['name'] ),
			'id'            => esc_attr( $sidebar['id'] ),
			'description'   => esc_html( $sidebar['description'] ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
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

function ccsvg_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'ccsvg_mime_types' );

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
  //wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function theme_footer_scripts(){
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action( 'wp_footer', 'theme_footer_scripts' );



if ( function_exists( 'lazyblocks' ) ) :
	lazyblocks()->add_block( array(
			'id' => 41,
			'title' => 'testimonial',
			'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" /></svg>',
			'keywords' => array(
			),
			'slug' => 'lazyblock/testimonial',
			'description' => 'Agrega un bloque de testimonio',
			'category' => 'theme',
			'category_label' => 'theme',
			'supports' => array(
					'customClassName' => true,
					'anchor' => false,
					'align' => array(
							0 => 'wide',
							1 => 'full',
					),
					'html' => false,
					'multiple' => true,
					'inserter' => true,
			),
			'ghostkit' => array(
					'supports' => array(
							'spacings' => false,
							'display' => false,
							'scrollReveal' => false,
							'frame' => false,
							'customCSS' => false,
					),
			),
			'controls' => array(
					'control_da882e47a5' => array(
							'type' => 'image',
							'name' => 'image',
							'default' => '',
							'label' => 'image',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '25',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'preview_size' => 'medium',
							'placeholder' => '',
							'characters_limit' => '',
					),
					'control_cec8304d3a' => array(
							'type' => 'text',
							'name' => 'title',
							'default' => '',
							'label' => 'title',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '25',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'placeholder' => '',
							'characters_limit' => '',
					),
					'control_a1190a4108' => array(
							'type' => 'textarea',
							'name' => 'quote',
							'default' => '',
							'label' => 'quote',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '50',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'placeholder' => '',
							'characters_limit' => '',
					),
					'control_f8bbf8494b' => array(
							'type' => 'text',
							'name' => 'name',
							'default' => '',
							'label' => 'name',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '100',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'placeholder' => '',
							'characters_limit' => '',
					),
			),
			'code' => array(
					'output_method' => 'template',
					'editor_html' => '',
					'editor_callback' => '',
					'editor_css' => '',
					'frontend_html' => '',
					'frontend_callback' => '',
					'frontend_css' => '',
					'show_preview' => 'never',
					'single_output' => false,
			),
			'condition' => array(
			),
	) );
	
	lazyblocks()->add_block( array(
			'id' => 33,
			'title' => 'Autotyping text',
			'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
	<rect opacity="0.25" width="15" height="15" rx="4" transform="matrix(-1 0 0 1 22 7)" fill="currentColor" />
	<rect width="15" height="15" rx="4" transform="matrix(-1 0 0 1 17 2)" fill="currentColor" />
	</svg>
	',
			'keywords' => array(
			),
			'slug' => 'lazyblock/autotyping-text',
			'description' => '',
			'category' => 'theme',
			'category_label' => 'theme',
			'supports' => array(
					'customClassName' => true,
					'anchor' => false,
					'align' => array(
							0 => 'wide',
							1 => 'full',
					),
					'html' => false,
					'multiple' => true,
					'inserter' => true,
			),
			'ghostkit' => array(
					'supports' => array(
							'spacings' => false,
							'display' => false,
							'scrollReveal' => false,
							'frame' => false,
							'customCSS' => false,
					),
			),
			'controls' => array(
					'control_0d39974a9b' => array(
							'type' => 'text',
							'name' => 'static-text',
							'default' => '',
							'label' => 'Static text',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '100',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'placeholder' => '',
							'characters_limit' => '',
					),
					'control_be29714957' => array(
							'type' => 'repeater',
							'name' => 'typing-list',
							'default' => '',
							'label' => 'Typing list',
							'help' => '',
							'child_of' => '',
							'placement' => 'content',
							'width' => '100',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'rows_min' => '3',
							'rows_max' => '',
							'rows_label' => 'Item {{#}}',
							'rows_add_button_label' => '+ Agregar',
							'rows_collapsible' => 'false',
							'rows_collapsed' => 'true',
							'placeholder' => '',
							'characters_limit' => '',
					),
					'control_c39bec4d49' => array(
							'type' => 'text',
							'name' => 'item',
							'default' => '',
							'label' => 'Item',
							'help' => '',
							'child_of' => 'control_be29714957',
							'placement' => 'content',
							'width' => '100',
							'hide_if_not_selected' => 'false',
							'save_in_meta' => 'false',
							'save_in_meta_name' => '',
							'required' => 'false',
							'placeholder' => 'Facil',
							'characters_limit' => '30',
					),
			),
			'code' => array(
					'output_method' => 'template',
					'editor_html' => '',
					'editor_callback' => '',
					'editor_css' => '',
					'frontend_html' => '',
					'frontend_callback' => '',
					'frontend_css' => '',
					'show_preview' => 'always',
					'single_output' => false,
			),
			'condition' => array(
			),
	) );
	
endif;


?>