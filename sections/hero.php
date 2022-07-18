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
			echo '<div class="hero-bg uk-position-right uk-overlay uk-width-2-3@s uk-width-2-3@m" uk-scrollspy="cls:uk-animation-fade" style="background-image: url(' . $large_image_url[0] . ');"></div>';
		}
	?>

	<div class="hero-colors-bg">
		<div class="uk-container">
			<div class="hero-texts uk-width-1-2@s uk-width-2-3@l">
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

	<div class="hero-notice uk-visible@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
		<div class="uk-container">
			<div class="uk-child-width-expand@s">
				<img src="http://delsol.design/me/wp-content/themes/atomic-blocks/images/svg-logo1.svg" />
				<img src="https://bisiesto.es/wp-content/uploads/2021/07/logo-bisiesto-nuevo-interletreado@2x-98x18.png"/>
			
				<p>Demotech es una startup ficticia desarollado como prueba para Bisiesto, demostrando uso de wordpress</p>
			</div>
		</div>
	</div>

</section>
<!-- .hero-section -->