<?php
// ACF Fields 
$hero_background = get_field('hero_background');
$hero_title = get_field('hero_title');
$hero_caption = get_field('hero_caption');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
// ACF Fields 
$phone_display_option = get_field('phone_display', 'option');
$phone_display_single = get_field('phone_display', $post_id);
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

$phone_option = get_field('phone', 'option');
$phone_single = get_field('phone', $post_id);
$phone = $phone_single ? $phone_single : $phone_option;

$scroll_to_section = get_field( 'scroll_to_section' );
$full_width = get_field('full_width'); 
?> <!-- START section Hero --><section class="section_type-hero uk-flex uk-flex-middle <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>" style="background-image: url('<?php echo $hero_background['url']; ?>');"><!-- START uk-container --><div class="uk-container uk-position-relative" style="z-index: 9;"><!-- START uk-text-center --><div class="uk-text-center"><h1> <?php echo $hero_title; ?> <?php echo $city; ?> </h1><br><div><a class="callback" href="<?php echo $phone; ?>"><?php echo $phone_display; ?></a></div><div><br><br><p><?php echo $hero_caption; ?></p></div></div><!-- END uk-text-center --></div><!-- END uk-container --><!-- START uk-text-center --><div class="uk-text-center scroll_button"><a class="" href="<?php echo $scroll_to_section ;?>" uk-scroll="offset: 50"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/scroll-dwn.png" alt=""></a></div><!-- END uk-text-center --></section><!-- END section -->