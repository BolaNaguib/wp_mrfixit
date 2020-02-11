<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$full_width = get_field('full_width');
$section_bg = get_field('section_background');
?>
<!-- START section -->
<section id="<?php echo $section_id; ?>" class='section  <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?> secion_theme-bg' style="background-image: url('<?php echo $section_bg['url']; ?>">
    <!-- START uk-container -->
    <div class='uk-container uk-position-relative' style="z-index: 9;">
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-Left -->
            <div class='uk-text-Left uk-margin-bottom'>
                <h3 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span> </h3>
                <hr class="hr_type-small">
            </div>
            <!-- END uk-text-Left -->
        <?php endif; ?>
        <?php if (have_rows('block')) : ?>
            <!-- START uk-grid -->
            <div class='uk-grid uk-child-width-1-3@m' uk-grid="uk-margin">
                <?php while (have_rows('block')) : the_row(); ?>
                    <?php // ACF Fields 
                    $font_awesome_icon = get_sub_field('font_awesome_icon');
                    $block_title = get_sub_field('block_title');
                    $block_caption = get_sub_field('block_caption');
                    ?>
                    <!-- START div -->
                    <div class=''>
                        <div class="card_type-whyus">
                            <div class="uk-grid-small uk-flex-top" uk-grid>
                                <div class="uk-width-auto ">
                                    <div class="icon">
                                        <?php echo $font_awesome_icon; ?>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-margin-small-bottom"><?php echo $block_title; ?></h4>
                                    <p class="uk-text-meta uk-margin-remove-top"><?php echo $block_caption; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END div -->
                <?php endwhile; ?>
            </div>
            <!-- END uk-grid -->
        <?php endif; ?>
    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->