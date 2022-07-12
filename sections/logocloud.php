<?php
/**
 * logo cloud Section
 * 
 * @package DemoTech
 */
?>

<section id="logos_section">
  <div class="uk-container uk-container">

    <h2 uk-scrollspy="cls:uk-animation-fade title-triggered">
      <?php echo __('Nuestras marcas de confianza', 'wordpycat'); ?>
    </h2>
    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-flex uk-flex-center uk-flex-wrap uk-text-center logos" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
      <?php dynamic_sidebar( 'logocloud' ); ?>
    </div>
  </div>
</section>