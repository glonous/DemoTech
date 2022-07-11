<?php
/**
 * hero Section
 * 
 * @package DemoTech
 */
?>
<section id="hero_section" uk-height-viewport="offset-top: true" class="">

	<?php
		if ( has_post_thumbnail()) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			echo '<div class="hero-bg uk-position-right uk-overlay uk-width-2-3@m" style="background-image: url(' . $large_image_url[0] . ');"></div>';
		}
	?>

	<div class="hero-colors-bg">
		<div class="hero-texts uk-width-2-3@m">
			<div class="uk-container uk-flex uk-flex-column" uk-scrollspy="target: > section; cls: uk-animation-slide-right-medium; delay: 300">
				<?php dynamic_sidebar( 'hero' ); ?>
			</div>
		</div>
	</div>
	<div>white texts</div>

</section>
<!-- .hero-section -->