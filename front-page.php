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

<section id="latest-section">
    <div>
        <h2><?php echo __('Posts recientes', 'wordpyacat'); ?></h2>

        <div class="uk-container">
            <ul uk-scrollspy="target: > li; cls: uk-animation-fade; delay: 400" class="uk-grid-large uk-child-width-expand@s uk-text-center" uk-grid>

                <?php
                    $recent_posts_query = new WP_Query( 'posts_per_page=4' );
                    while ($recent_posts_query -> have_posts()) : $recent_posts_query -> the_post();
                ?>
                    <li class="uk-card uk-card-body uk-box-shadow-hover-xlarge">
                        <a class="uk-panel" href="<?php the_permalink() ?>">
                            <div class="thumb">
                                <?php	if ( has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                } else {
                                    ?> <div class="nothumb"></div><?php
                                }?>
                            </div>

                            <div class="uk-panel">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            

                        </a>
                    </li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</section>

<?php
get_footer();