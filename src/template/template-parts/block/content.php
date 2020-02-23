<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
// ACF FIELDS
$content = get_field('content');
$card_title = get_field('card_title');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$card_theme = get_field('card_theme');
$section_theme = get_field('section_theme');
$section_id = get_field( 'section_id' );
$full_width = get_field( 'full_width' );
?>
<!-- START section CONTENT -->
<div id="<?php echo $section_id;?>" class='section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?>  <?php if ($section_theme) : ?> section_theme-blue <?php else : ?> section_theme-white <?php endif; ?>'>
  <!-- START uk-container -->
  <div class='uk-container'>
  <?php if ($first_color || $second_color) : ?>
       <!-- START uk-text-center -->
       <div class='uk-text-center' style=" margin-bottom: 30px; padding: 10px 0px;">
                <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
            </div>
      <!-- END uk-text-center -->
    <?php endif; ?>

    <div class="uk-margin-top">
        <?php echo $content ;?>
    </div>
  </div>
  <!-- END uk-container -->
</div>
<!-- END section -->