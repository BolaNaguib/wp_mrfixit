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
?>
<!-- START section Service -->
<section id="<?php echo $section_id; ?>" class='section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-center -->
            <div class='uk-text-center uk-margin-bottom'>
                <h3 class="section__title"> <?php echo $first_color; ?> <span> <?php echo $second_color; ?> </span> </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
            </div>
            <!-- END uk-text-center -->
        <?php endif; ?>
        <?php if (have_rows('block')) : ?>
            <!-- START uk-grid uk-child-width-1-4@m  -->
            <div class='uk-grid uk-child-width-1-<?php echo $column ;?>@m ' uk-grid="uk-margin"  uk-scrollspy="cls: uk-animation-slide-up; target: .card_type-service; delay: 500; repeat: true">
                <?php while (have_rows('block')) : the_row(); ?>
                <?php // ACF fields 
                $page_link = get_sub_field( 'page_link' );
                $thumbnail = get_sub_field( 'thumbnail' );
                $block_title = get_sub_field( 'block_title' );
                $block_content = get_sub_field( 'block_content' ); ?>
                    <!-- START div -->
                    <div class=''>
                       
                        <!-- START card_type-service -->
                        <div class='card_type-service uk-text-center'>
                        <?php if($page_link): ?>
                        <a href="<?php echo $page_link; ?>">
                        <?php endif; ?>
                            <div class="icon-container uk-position-relative">
                                <img src="<?php echo $thumbnail['url'] ?>" alt="<?php echo $thumbnail['alt'] ?> | <?php echo $city ?>" title="<?php echo $thumbnail['title'] ?>">

                            </div>
                            <h4 class="uk-margin-small-top"><?php echo $block_title ;?></h4>
                            <small><?php echo $block_content ;?></small>
                            <?php if($page_link): ?>
                        </a>
                        <?php endif; ?>
                        </div>
                        <!-- END card_type-service -->
                   
                    </div>
                    <!-- END div -->
                <?php endwhile; ?>
            </div>
            <!-- END uk-grid uk-child-width-1-4@m  -->
        <?php endif; ?>
    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->