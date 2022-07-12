<?php
/**
 * Testimonial block
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<div class="uk-column-1-2 uk-visible@m" uk-height-match>
  <div class="relative">
    <?php if ( isset( $attributes['image']['url'] ) ) : ?>
      <img class="png-shadow portrait" uk-img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
    <?php endif; ?>
    <img class="pop-circle" src="<?php echo get_stylesheet_directory_uri() ?>/img/circle.svg" />
  </div>
  <div class="quote-contents">
    <h3><img class="quotesymbol" src="<?php echo get_stylesheet_directory_uri() ?>/img/quotesymbol.svg" /> <?php echo $attributes['title']; ?></h3>
    <p><?php echo $attributes['quote']; ?></p>
    <hr/>
    <h6><?php echo $attributes['name']; ?></h6>
  </div>
</div>

<div class="uk-hidden@m" uk-grid>

  <div class="relative uk-width-1-2">
    <?php if ( isset( $attributes['image']['url'] ) ) : ?>
      <img class="png-shadow portrait" uk-img src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
    <?php endif; ?>
    <img class="pop-circle" src="<?php echo get_stylesheet_directory_uri() ?>/img/circle.svg" />
  </div>

  <div class="quote-contents uk-width-1-2">
    <h3><img class="quotesymbol" src="<?php echo get_stylesheet_directory_uri() ?>/img/quotesymbol.svg" /> <?php echo $attributes['title']; ?></h3>
  </div>

  <div class="quote-contents uk-width-1-1">
    <p><?php echo $attributes['quote']; ?></p>
    <hr/>
    <h6><?php echo $attributes['name']; ?></h6>
  </div>

</div>