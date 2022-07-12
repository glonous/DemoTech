<?php
/**
 * about Section
 * 
 * @package DemoTech
 */
?>
<section id="about_section">
	<div class="uk-container uk-container-xsmall uk-text-center">
		<h6 uk-scrollspy="cls:uk-animation-fade title-triggered">
			<?php echo __('sobre nosotros', 'wordpycat'); ?>
		</h6>
		<h2 uk-scrollspy="cls:uk-animation-fade title-triggered">
			<?php echo __('QUO NEQUE ERROR REPUDIANDAE FUGA?', 'wordpycat'); ?>
		</h2>
		<div>
			<?php dynamic_sidebar( 'about' ); ?>
		</div>
	</div>
</section>
<!-- .about-section -->