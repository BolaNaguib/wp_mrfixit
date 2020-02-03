<?php get_header(); ?>

<!-- END section -->
<!-- Wordpress Loop -->
<!-- <?php if (have_posts()) : ?>
  <?php /* Start the Loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?> -->


<!-- START section -->
<section class='section_type-hero uk-flex uk-flex-middle' style="background-image: url('<?php echo get_template_directory_uri() ;?>/images/hero.jpg');
    height: 100vh;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;">

  <!-- START uk-container -->
  <div class='uk-container uk-position-relative' style="z-index: 9;">
    <!-- START uk-text-center -->
    <div class='uk-text-center'>
      <h1> Fast, Affordable And Reliable Garage Door Service & Repair in Palm Beach County and Broward County Florida </h1>
      <br>
      <div>
        <a class="callback" href="#">(561) 809-9997</a>
      </div>
      <div>
      <br>
      <br>
        <p> We Specialize In All Types, Makes and Brands Of Garage Doors
          and Garage Door Openers. </p>
      </div>

    </div>
    <!-- END uk-text-center -->
  </div>
  <!-- END uk-container -->
  <!-- START uk-text-center -->
  <div class="uk-text-center scroll_button">
    <a class="" href="#about" uk-scroll="offset: 50">
      <img src="http://www.creativethemes.co.in/buy-creativetheme-html-template/home-builder/template-multipage/assets/imgs/scroll-dwn.png" alt="">
    </a>
  </div>


  <!-- END uk-text-center -->
</section>
<!-- END section -->


<!-- START section -->
<section id="about" class='section'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-text-center -->
    <div class='uk-text-center uk-margin-bottom'>
      <h3 class="section__title"> COMPANY <span> SERVICES </span> </h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
    </div>
    <!-- END uk-text-center -->
    <!-- START uk-grid uk-child-width-1-4@m  -->
    <div class='uk-grid uk-child-width-1-4@m ' uk-grid="uk-margin">
      <?php for ($i = 0; $i < 4; $i++) : ?>
        <!-- START div -->
        <div class=''>
          <!-- START card_type-service -->
          <div class='card_type-service uk-text-center'>
            <div class="icon-container uk-position-relative">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon01.png" alt="">

            </div>
            <h3>General Maintenance</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, perferendis cum praesentium animi unde numquam magnam.</p>
          </div>
          <!-- END card_type-service -->
        </div>
        <!-- END div -->
      <?php endfor; ?>

    </div>
    <!-- END uk-grid uk-child-width-1-4@m  -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->



<!-- START section -->
<div id="" class='section section_theme-blue'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-text-center -->
    <!-- <div class='uk-text-center'>
            <h3 class="section__title"> Card <span> Blue </span></h3>
            <hr class="hr_type-small">

        </div> -->
    <!-- END uk-text-center -->
    <!-- START uk-grid -->
    <div class='uk-grid uk-flex-middle' uk-grid="uk-margin">
      <!-- START uk-width-1-3@m uk-width-1-1 -->
      <div class='uk-width-2-3@m uk-width-1-1'>
        <div class="card card_theme_primary ">
          <h2 class="card__title"> Best Repair Service <span> Florida </span></h2>
          <hr class="hr_type-small">

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet velit repellat molestiae fugiat sed rerum architecto, reiciendis ab inventore esse voluptate iusto quae tenetur voluptatibus quasi animi expedita. Eligendi, officiis.
          </p>
        </div>
      </div>
      <!-- END uk-width-1-3@m uk-width-1-1 -->
      <!-- START uk-wodth-1-3 -->
      <div class='uk-width-1-3@m uk-width-1-1 uk-flex-last'>
        <div class="img-border">
          <img src="http://mrfixitdoors.com/images/TechRepair.jpg" alt="" title=" ">
        </div>
      </div>
      <!-- END uk-wodth-1-3 -->
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</div>
<!-- END section -->

<!-- START section -->
<div id="" class='section section_theme-white'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-text-center -->
    <!-- <div class='uk-text-center'>
            <h3 class="section__title"> Card <span> Blue </span></h3>
            <hr class="hr_type-small">

        </div> -->
    <!-- END uk-text-center -->
    <!-- START uk-grid -->
    <div class='uk-grid uk-flex-middle' uk-grid="uk-margin">
      <!-- START uk-width-1-3@m uk-width-1-1 -->
      <div class='uk-width-2-3@m uk-width-1-1'>
        <div class="card card_theme_primary ">
          <h2 class="card__title"> Best Repair Service <span> Florida </span></h2>
          <hr class="hr_type-small">

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet velit repellat molestiae fugiat sed rerum architecto, reiciendis ab inventore esse voluptate iusto quae tenetur voluptatibus quasi animi expedita. Eligendi, officiis.
          </p>
        </div>
      </div>
      <!-- END uk-width-1-3@m uk-width-1-1 -->
      <!-- START uk-wodth-1-3 -->
      <div class='uk-width-1-3@m uk-width-1-1 uk-flex-first@m uk-flex-last'>
        <div class="img-border">
          <img src="http://mrfixitdoors.com/images/TechRepair.jpg" alt="" title=" ">
        </div>
      </div>
      <!-- END uk-wodth-1-3 -->
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</div>
<!-- END section -->




<!-- START section -->
<section class='section section_theme-half uk-position-relative uk-visible@m'>
  <!-- <div class="pattern"></div> -->
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-grid -->
    <div class='uk-grid uk-child-width-1-2@m  uk-grid-large' uk-grid='uk-margin'>
      <!-- START div -->
      <div class=''>
        <!-- START card_type-contactinfo -->
        <div class='card_type-contactinfo'>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3>We Are Here To Help!</h3>
            <hr class="hr_type-small">
            <ul class="uk-grid uk-child-width-1-1">
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>30+ Years Of Experience</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Family Owned & Operated</b>
              </li>

              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Affordable & Competitive Prices</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>10% Discount For Senior Citizens</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>10% discount for veterans</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Same-Day, Local Service in Palm Beach County and Broward County Florida</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>No Additional Charges For Nights, Holidays Or Weekends</b>
              </li>
            </ul>

          </div>
          <!-- END uk-text-left -->
        </div>
        <!-- END card_type-contactinfo -->
      </div>
      <!-- END div -->
      <!-- START div -->
      <div class=''>
        <!-- START card_type-contactform -->
        <div class='card_type-contactform'>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3>REQUEST A CALLBACK</h3>
            <hr class="hr_type-small">
          </div>

          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name"></span></p>
          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Phone Number"></span></p>
          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="When Would You Like Us To Call You?"></span></p>
          <p><input type="submit" value="Request My CallBack" class="wpcf7-form-control wpcf7-submit"></p>
          <!-- END uk-text-left -->
          <!-- START uk-text-center -->
          <div class='uk-text-center'>
            <small>*We will respond within minutes</small>
          </div>
          <!-- END uk-text-center -->
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
<!-- START section -->
<section class='section section_theme-blue uk-position-relative uk-hidden@m'>
  <!-- <div class="pattern"></div> -->
  <!-- START uk-container -->
  <div class='uk-container'>
        <!-- START div -->
      <div class=''>
        <!-- START card_type-contactinfo -->
        <div class='card_type-contactinfo'>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3>We Are Here To Help!</h3>
            <hr class="hr_type-small">
            <ul class="uk-grid uk-child-width-1-1">
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>30+ Years Of Experience</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Family Owned & Operated</b>
              </li>

              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Affordable & Competitive Prices</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>10% Discount For Senior Citizens</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>10% discount for veterans</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>Same-Day, Local Service in Palm Beach County and Broward County Florida</b>
              </li>
              <li class="uk-flex uk-flex-middle">
                <span><i class="fas fa-chevron-right"></i></span> <b>No Additional Charges For Nights, Holidays Or Weekends</b>
              </li>
            </ul>

          </div>
          <!-- END uk-text-left -->
        </div>
        <!-- END card_type-contactinfo -->
      </div>
      <!-- END div -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->

<!-- START section -->
<section class='section section_theme-white uk-position-relative  uk-hidden@m'>
  <!-- <div class="pattern"></div> -->
  <!-- START uk-container -->
  <div class='uk-container'>
        <!-- START div -->
      <div class=''>
        <!-- START card_type-contactform -->
        <div class='card_type-contactform'>
          <!-- START uk-text-left -->
          <div class='uk-text-left'>
            <h3>REQUEST A CALLBACK</h3>
            <hr class="hr_type-small">
          </div>

          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name"></span></p>
          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Phone Number"></span></p>
          <p><span class="wpcf7-form-control-wrap name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="When Would You Like Us To Call You?"></span></p>
          <p><input type="submit" value="Request My CallBack" class="wpcf7-form-control wpcf7-submit"></p>
          <!-- END uk-text-left -->
          <!-- START uk-text-center -->
          <div class='uk-text-center'>
            <small>*We will respond within minutes</small>
          </div>
          <!-- END uk-text-center -->
        </div>
        <!-- END card_type-contactform -->
      </div>
      <!-- END div -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->




<!-- START section -->
<section class='section secion_theme-bg' style="background-image: url('<?php echo get_template_directory_uri() ;?>/images/hero.jpg')">
  <!-- START uk-container -->
  <div class='uk-container uk-position-relative' style="z-index: 9;">
    <!-- START uk-text-Left -->
    <div class='uk-text-Left uk-margin-bottom'>
      <h3 class="section__title"> COMPANY <span> SERVICES </span> </h3>
      <hr class="hr_type-small">

    </div>
    <!-- END uk-text-Left -->

    <!-- START uk-grid -->
    <div class='uk-grid uk-child-width-1-3@m' uk-grid="uk-margin">
      <?php for ($i = 0; $i < 6; $i++) : ?>
        <!-- START div -->
        <div class=''>
          <div class="card_type-whyus">
            <div class="uk-grid-small uk-flex-top" uk-grid>
              <div class="uk-width-auto ">
                <div class="icon">
                  <i class="fas fa-money-bill-wave"></i>
                </div>
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-margin-small-bottom">Unbeatable Prices</h4>
                <p class="uk-text-meta uk-margin-remove-top">We Offer Best Prices</p>
              </div>
            </div>
          </div>
        </div>
        <!-- END div -->
      <?php endfor; ?>
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->




<!-- START section -->
<section class='section'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-text-center -->
    <div class='uk-text-center uk-margin-bottom'>
      <h3 class="section__title"> BRANDS WE  <span> WORK WITH </span> </h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/border.png" alt="">
    </div>
    <!-- END uk-text-center -->

    <div uk-slider>

      <div class="uk-position-relative">

        <div class="uk-slider-container uk-light">
          <ul class="uk-slider-items uk-child-width-1-4@m">
            <?php for ($i = 0; $i < 10; $i++) : ?>

              <li class="uk-text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slidex.png" alt="">
              </li>
            <?php endfor; ?>


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






  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->


<!-- END header  -->
<?php get_footer(); ?>