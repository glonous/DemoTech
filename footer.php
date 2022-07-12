</div>

<footer id="colophon" class="site-footer">
  <div class="uk-container">
    
    
		<div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
    
      <!-- COL -->
			<div>
      <div>
      <a href="<?php echo get_site_url(); ?>" title="<?php the_title(); ?>" class="footer-logo">
        <?php echo pintar_logo(); ?>
      </a>
      <hr/>
    </div>
				<?php if ( is_active_sidebar( 'footer-left' ) ) { dynamic_sidebar( 'footer-left' ); } ?>
			</div>

			<!-- COL -->
			<div>
        <?php if ( is_active_sidebar( 'footer-middle' ) ) { dynamic_sidebar( 'footer-middle' ); } ?>
			</div>

			<!-- COL -->
			<div class="darker">
        <?php if ( is_active_sidebar( 'footer-right' ) ) { dynamic_sidebar( 'footer-right' ); } ?>
			</div>

		</div>

		<div class="bottom-footer">
			<?php dynamic_sidebar( 'bottom-widget' ); ?>
		</div>
  </div>

  <div class="bottom-footer">
    <div class="uk-container uk-text-center">
      Copyright 2022 de master theme "Wordpycat" de Jose A. Catalan para Bisiesto - Child Theme de José Manuel del Solar
    </div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- OFFCANVAS -->
<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
		<button class="uk-offcanvas-close uk-close" type="button" data-uk-close></button>
		<div><?php the_custom_logo(); ?></div>
		<?php wp_nav_menu( array( 'theme_location' => 'menu-principal',  'menu_class' => 'nav-menu-mobile', 'container' => 'ul' ) ); ?>
	</div>
</div>
<!-- /OFFCANVAS -->

	</body>
</html>