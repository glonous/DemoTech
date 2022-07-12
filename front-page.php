<?php
/**
 * Template name: Homepage
 * 
 * @package DemoTech
 */

get_header();

/* $home_sections = demotech_get_home_sections();



if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}elseif( $home_sections ){ 
    get_header();
    foreach( $home_sections as $section ){
        get_template_part( 'sections/' . esc_attr( $section ) );  
    }
    get_footer();
}else {
    include( get_page_template() );
} */

if(have_posts()){
	the_post();

    $home_sections = ['hero', 'features', 'about', 'testimonial', 'logocloud', 'cta', 'contact'];
    foreach( $home_sections as $section ){
        if ( is_active_sidebar( $section ) ) {
            get_template_part( 'sections/' . esc_attr( $section ) );  
        }
    }

    ?> <div class="uk-container uk-container-small"> <?php
	    the_content();
    ?> </div> <?php

    if ( is_active_sidebar( 'microcontact' ) ) {
        get_template_part( 'sections/microcontact' ); 
    }

}else{
	echo __('No hay contenido en este post.', 'wordpycat');
}


?>

<?php
get_footer();