<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_id = get_field('section_id');
$full_width = get_field('full_width');

?>

<section id="<?php echo $section_id; ?>" class=" section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?> section_theme-blue">
    <div class="uk-container">
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-center -->
            <div class='uk-text-center' style=" margin-bottom: 30px; padding: 10px 0px;">
                <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
            </div>
            <!-- END uk-text-center -->
        <?php endif; ?>
        <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>

            <?php
            // check if the repeater field has rows of data
            if (have_rows('review')) :
                // loop through the rows of data
                while (have_rows('review')) : the_row(); ?>
                    <?php
                    $image = get_sub_field('review_image');
                    ?>
                    <div class="">
                        <div class="card_type-review uk-flex uk-flex-center">
                            <a rel="noopener" target="_blank" style="color: inherit;" href=" <?php the_sub_field('review_url') ?> ">

                                <div class="uk-grid-small uk-flex-middle" uk-grid>

                                    <div class="uk-width-auto">
                                        <img class="" width="60" height="60" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?> | <?php echo $city; ?> " title="<?php echo $image['title'] ?> | <?php echo $city; ?> ">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class=" uk-margin-remove-bottom"><?php the_sub_field('review_title'); ?></h4>
                                        <p class="uk-text-meta uk-margin-remove-top star">
                                            <?php if (get_sub_field('review_rating') == 'one') : ?>
                                                <svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                            <?php elseif (get_sub_field('review_rating') == 'two') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'three') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'four') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'fourhalf') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'five') : ?>
                                                <svg style="width: 15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                                <svg style="width: 15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                                <svg style="width: 15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                                <svg style="width: 15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                                <svg style="width: 15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                                </svg>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

            <?php endwhile;
            else :
            // no rows found
            endif; ?>







        </div>
        <!-- 
        <div class="uk-text-center uk-padding">
            <span style="color:#ffc600" class="rating-desc" itemscope="" itemtype="http://schema.org/Organization">
                <span style="color:#fff" itemprop="name">
                    <?php if (get_field('schema_organization_name')) : ?>
                        <?php the_field('schema_organization_name') ?>
                    <?php else : ?>
                        <?php the_field('schema_organization_name', 'option'); ?>
                    <?php endif; ?>
                </span>
                <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">Rated
                    <span itemprop="ratingValue"> <?php if (get_field('rating')) : ?>
                            <?php the_field('rating') ?>
                        <?php else : ?>
                            <?php the_field('rating', 'option'); ?>
                        <?php endif; ?></span>/ <?php if (get_field('rating_total')) : ?>
                        <?php the_field('rating_total') ?>
                    <?php else : ?>
                        <?php the_field('rating_total', 'option'); ?>
                    <?php endif; ?> Based On
                    <span itemprop="reviewCount"> <?php if (get_field('rating_based_on')) : ?>
                            <?php the_field('rating_based_on') ?>
                        <?php else : ?>
                            <?php the_field('rating_based_on', 'option'); ?>
                        <?php endif; ?></span>
                    <a class="ratings" href="  <?php if (get_field('rating_source_url')) : ?>
               <?php the_field('rating_source_url') ?>
               <?php else : ?>
                 <?php the_field('rating_source_url', 'option'); ?>
               <?php endif; ?>"> <?php if (get_field('rating_source')) : ?>
                            <?php the_field('rating_source') ?>
                        <?php else : ?>
                            <?php the_field('rating_source', 'option'); ?>
                        <?php endif; ?></a>
                </span>
            </span>
        </div>
   -->
    </div>
</section>