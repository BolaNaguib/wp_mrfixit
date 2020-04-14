<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$full_width = get_field('full_width');
$column = get_field('column');
$card_title = get_field('card_title');
$card_content = get_field('card_content');
$card_thumbnail = get_field('card_thumbnail');
?> <!-- about section --><!-- START section --><section id="<?php echo $section_id; ?>" class="section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>"><!-- START uk-contaier --><div class="uk-container"> <?php if ($first_color || $second_color) : ?> <!-- START uk-text-center --><div class="uk-text-center uk-margin-bottom"><h3 class="section__title"> <?php echo $first_color; ?> <span> <?php echo $second_color; ?> </span></h3><img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt=""></div><!-- END uk-text-center --><!-- START uk-grid uk-grid-small uk-child-width-1-3@m --><div class="uk-grid uk-child-width-1-3@m card_type-about" uk-grid="uk-margin"> <?php if ($card_title) : ?> <!-- START div --><div class="uk-text-center uk-text-right@m"><h2 class="card__title"><?php echo $card_title; ?></h2></div><!-- END div --> <?php endif; ?> <?php if ($card_content) : ?> <!-- START div --><div class="card__content"> <?php echo $card_content; ?> </div><!-- END div --> <?php endif; ?> <?php if ($card_thumbnail) : ?> <!-- START div --><div class="card__thumbnail uk-text-center"><img loading="lazy" src="<?php echo $card_thumbnail['url']; ?>" alt="<?php echo $card_thumbnail['alt']; ?>" title="<?php echo $card_thumbnail['title']; ?>"></div><!-- END div --> <?php endif; ?> </div><!-- END uk-grid uk-grid-small uk-child-width-1-3@m --> <?php endif; ?> </div><!-- END uk-contaier --></section><!-- END section -->