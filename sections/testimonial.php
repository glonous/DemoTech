<?php
/**
 * testimonial Section
 * 
 * @package DemoTech
 */
?>
<section id="testimonial_section" class="gradient-bg">
  <div class="uk-container">
    <div uk-slideshow="autoplay: true; min-height: 300; max-height: 600">
      <div class="uk-slideshow-items">
        <?php dynamic_sidebar( 'testimonial' ); ?>
      </div>

      <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
  </div>
</section>