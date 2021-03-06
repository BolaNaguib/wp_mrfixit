<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$full_width = get_field('full_width');
?>
<!-- START section Clients -->
<section id="<?php echo $section_id; ?>" class='section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-text-center -->
        <div class='uk-text-center uk-margin-bottom'>
            <h3 class="section__title"><?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
        </div>
        <!-- END uk-text-center -->
        <?php if (have_rows('clients')) : ?>
            <div uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-4@m">
                            <?php while (have_rows('clients')) : the_row();
                                $image = get_sub_field('image');
                            ?>
                                <li class="uk-text-center">
                                    <img  loading="lazy" src=" <?php echo $image['url']; ?>" alt=" <?php echo $image['alt']; ?>" title=" <?php echo $image['title']; ?>"> </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="uk-hidden@m uk-light">
                        <a class="uk-position-center-left uk-position-small sliderIcon" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small sliderIcon" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@m">
                        <a class="uk-position-center-left-out uk-position-small sliderIcon" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small sliderIcon" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>
            </div>
        <?php endif; ?>






    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->