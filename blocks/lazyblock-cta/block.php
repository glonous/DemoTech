
<?php if ( isset( $attributes['background-image']['url'] ) &&  $attributes['usar-imagen-de-fondo'] ) : ?>
  <div class="uk-section uk-height-large uk-light uk-background-cover uk-flex" <?php if ( $attributes['usar-efecto-parallax'] ) : ?>uk-parallax="bgy: -200"<?php endif; ?> style="background-image: url(<?php echo esc_url( $attributes['background-image']['url'] ); ?>)">
<?php else: ?>
  <div class="uk-section uk-height-large uk-section-default uk-flex gradient-bg-primary-dark">
<?php endif; ?>

  <div class="uk-container uk-light uk-margin-auto-vertical">
    <h2 class="uk-margin-auto uk-text-center"><?php echo $attributes['big-title']; ?></h2>
    <h3 class="uk-margin-auto uk-text-center"><?php echo $attributes['small-title']; ?></h3>

    <?php if ( $attributes['button-text'] ) : ?>

      <a class="<?php echo $attributes['estilo-del-boton']['value']; ?> rolling-button" href="<?php echo esc_url( $attributes['button-link'] ); ?>"><?php echo $attributes['button-text']; ?></a>

    <?php endif; ?>

  </div>

</div>







