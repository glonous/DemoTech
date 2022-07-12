<div class="floating-contact">
  <button class="uk-button uk-button-default floating-button" type="button">
    <img src="<?php echo  get_stylesheet_directory_uri()?>/img/question.svg" />
  </button>
  <div class="uk-card uk-card-body uk-card-default" uk-drop="pos: top-right">
    <?php dynamic_sidebar( 'microcontact' ); ?>
  </div>
</div>