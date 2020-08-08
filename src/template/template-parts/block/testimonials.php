<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$section_id = get_field('section_id');
$full_width = get_field('full_width');

?>

<!-- START section -->
<section id="<?php echo $section_id; ?>" class='section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?> section_theme-blue'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <?php if ($first_color || $second_color) : ?>
      <!-- START uk-text-center -->
      <div class='uk-text-center' style="    margin-bottom: 30px;
    padding: 10px 0px;">
        <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
      </div>
      <!-- END uk-text-center -->
    <?php endif; ?>
    <?php if (have_rows('testimonial')) : ?>

      <!-- START uk-grid -->
      <div class='uk-grid uk-child-width-1-3@m' uk-grid="uk-margin">
        <?php while (have_rows('testimonial')) : the_row(); ?>
          <?php // ACF Fields 
          $caption = get_sub_field('caption');
          $author = get_sub_field('author');
          $source_title = get_sub_field('source_title');
          $source_url = get_sub_field('source_url');
          ?>
          <!-- START div -->
          <div class=''>
            <!-- START card_type-testimonial -->

            <div class="card_type-testimonial uk-text-center">
              <blockquote cite="#">
                <span><svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                  </svg>
                  <svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                  </svg>
                  <svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                  </svg>
                  <svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                  </svg>
                  <svg style="width: 30px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                  </svg></span>
                <p class="uk-margin-remove"><span uk-icon="icon: quote-right;" class="uk-icon"></span> <?php echo $caption; ?> <span uk-icon="icon: quote-right;" class="uk-icon"></span></p>
                <footer><?php echo $author; ?> &nbsp;&nbsp;<cite><a rel="noopener" target="_blank" href="<?php echo $source_url; ?>"><?php echo $source_title; ?></a></cite></footer>
              </blockquote>
            </div>

            <!-- END card_type-testimonial -->

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