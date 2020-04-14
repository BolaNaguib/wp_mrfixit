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

?> <!-- START section Contact --><section id="<?php echo $section_id;?>" class="section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?> <?php if ($section_theme) : ?> section_theme-blue <?php else : ?> section_theme-white <?php endif; ?>"><!-- <div class="pattern"></div> --><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid uk-grid-small uk-child-width-1-2@m uk-grid-large uk-flex uk-flex-middle" uk-grid="uk-margin"><!-- START div --><div class="" uk-scrollspy="cls:uk-animation-slide-left"><!-- START card_type-contactinfo --><div class="card_type-contactinfo"><div class="wpcf7-text wpcf7-number wpcf7-submit uk-hidden"></div><!-- START uk-text-left --><div class="uk-text-left"><h3 class="section__title"><?php echo $info_title_first_color; ?> <span><?php echo $info_title_second_color; ?></span></h3><hr class="hr_type-small"> <?php if($info_content): ?> <?php echo $info_content ;?> <?php endif; ?> <?php if (have_rows('info_list')) : ?> <ul class="uk-grid uk-grid-small uk-child-width-1-2@m"> <?php while (have_rows('info_list')) : the_row(); ?> <?php $list = get_sub_field( 'list' ); ?> <li class="uk-flex uk-flex-middle"><span><i class="fas fa-chevron-right"></i></span> <b><?php echo $list ;?></b></li> <?php endwhile; ?> </ul> <?php endif; ?> </div><!-- END uk-text-left --></div><!-- END card_type-contactinfo --></div><!-- END div --><!-- START div --><div class="" uk-scrollspy="cls:uk-animation-slide-right"><!-- START card_type-contactform --><div class="uk-card-default card_type-contactform"><!-- START uk-text-left --><div class="uk-text-left"><h3 class="section__title"><?php echo $first_color_title; ?> <span><?php echo $second_color_title; ?></span></h3><hr class="hr_type-small"></div> <?php echo do_shortcode(' ' . $form_shortcode . ' '); ?> <!-- END uk-text-left --></div><!-- END card_type-contactform --></div><!-- END div --></div><!-- END uk-grid --></div><!-- END uk-container --></section><!-- END section -->