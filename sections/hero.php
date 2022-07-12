<?php
/**
 * hero Section
 * 
 * @package DemoTech
 */
?>
<section id="hero_section">

	<?php
		if ( has_post_thumbnail()) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			echo '<div class="hero-bg uk-position-right uk-overlay uk-width-2-3@m" uk-scrollspy="cls:uk-animation-fade" style="background-image: url(' . $large_image_url[0] . ');"></div>';
		}
	?>

	<div class="hero-colors-bg">
		<div class="uk-container">
			<div class="hero-texts uk-width-2-3@m">
				<div class="uk-flex uk-flex-column" uk-scrollspy="target: > section; cls: uk-animation-slide-right-medium; delay: 300">
					<?php dynamic_sidebar( 'hero' ); ?>
				</div>
			</div>
		</div>

		<ul class="animation-circles">
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

</section>
<!-- .hero-section -->