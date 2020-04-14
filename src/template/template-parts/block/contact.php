<?php
$post_id =  get_the_ID();

// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');

//INFO BLOCK ACF Fields 
$info_title_first_color = get_field('info_title_first_color');
$info_title_second_color = get_field('info_title_second_color');
$info_content = get_field('info_content');

$phone_display_option = get_field('phone_display', 'option');
$phone_display_single = get_field('phone_display', $post_id);
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

$phone_option = get_field('phone', 'option');
$phone_single = get_field('phone', $post_id);
$phone = $phone_single ? $phone_single : $phone_option;

$city = get_field('city', $post_id);
$address_option = get_field('address', 'option');
$address = $city ? $city : $address_option;

$email = get_field('email', 'option');
$section_theme = get_field('section_theme');

// Form Block 
$first_color_title = get_field('first_color_title');
$second_color_title = get_field('second_color_title');
$form_shortcode = get_field('form_shortcode');
$section_id = get_field('section_id');

$full_width = get_field( 'full_width' );

?>

<!-- START section Contact -->
<section id="<?php echo $section_id;?>" class='section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?>  <?php if ($section_theme) : ?> section_theme-blue <?php else : ?> section_theme-white <?php endif; ?>'>
  <!-- <div class="pattern"></div> -->
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-grid -->
    <div class='uk-grid uk-grid-small uk-child-width-1-2@m  uk-grid-large uk-flex uk-flex-middle' uk-grid='uk-margin'>
      <!-- START div -->
      <div class='' >
        <!-- START card_type-contactinfo -->
        <div class='card_type-contactinfo'>
          <div class="wpcf7-text wpcf7-number wpcf7-submit uk-hidden"></div>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3 class="section__title"><?php echo $info_title_first_color; ?> <span><?php echo $info_title_second_color; ?></span></h3>
            <hr class="hr_type-small">

            <?php if($info_content): ?>
            <?php echo $info_content ;?>
            <?php endif; ?> 
            <?php if (have_rows('info_list')) : ?>
            <ul class="uk-grid uk-grid-small uk-child-width-1-2@m">
            <?php while (have_rows('info_list')) : the_row(); ?>
            <?php $list = get_sub_field( 'list' ); ?>
              <li class="uk-flex uk-flex-middle">
                <span><svg style="width:7px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg></span> <b><?php echo $list ;?></b>
              </li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
          </div>
          <!-- END uk-text-left -->
        </div>
        <!-- END card_type-contactinfo -->
      </div>
      <!-- END div -->
      <!-- START div -->
      <div class=''  >
        <!-- START card_type-contactform -->
        <div class='uk-card-default card_type-contactform'>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3 class="section__title"><?php echo $first_color_title; ?> <span><?php echo $second_color_title; ?></span></h3>
            <hr class="hr_type-small">
          </div>
          <?php echo do_shortcode(' ' . $form_shortcode . ' '); ?>

          <!-- END uk-text-left -->
        </div>
        <!-- END card_type-contactform -->
      </div>
      <!-- END div -->
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->
