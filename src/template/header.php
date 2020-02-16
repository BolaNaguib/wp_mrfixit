<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="title" content=" <?php the_field('meta_title'); ?> " />
  <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
  <meta name="description" content=" <?php the_field('meta_description'); ?> " />
  <link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>" />
  <?php the_field('header_js_general', 'option');
  the_field('header_js');
  wp_head();
  $phone_display =  get_field('phone_display', 'option');
  $phone =  get_field('phone', 'option');
  $logo = get_field('logo', 'option'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<!-- END head -->
<!-- START body -->
<nav class="nav">
  <!-- START nav_type-main -->
  <div class='nav_type-main'>
    <!-- START uk-container -->
    <div class='uk-container'>
      <div class="uk-navbar" uk-navbar>
        <div class="uk-navbar-left">
          <a style="color:#fff; FONT-WEIGHT: bold;" href="/">
            MrFixitDoors
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
          </a>

        </div>

        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav uk-visible@m">
            <?php if (have_rows('menu', 'option')) : ?>
              <?php while (have_rows('menu', 'option')) : the_row(); ?>
                <?php if (get_row_layout() == 'pages') : ?>
                  <li><a class="nav__link" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a>
                    <?php if (have_rows('sub_menu')) : ?>
                      <div class="uk-navbar-dropdown xsx">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                          <?php while (have_rows('sub_menu')) : the_row(); ?>
                            <?php // ACF FIELDS 
                            $page_link = get_sub_field('page_link');
                            $title = get_sub_field('title');
                            ?>
                            <li><a href="<?php echo $page_link; ?>"><?php echo $title; ?></a></li>
                          <?php endwhile; ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </li>
                <?php elseif (get_row_layout() == 'links') : ?>
                  <li><a class="nav__link" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
                <?php endif; ?>
              <?php endwhile; ?>
              <li> <a class="nav__link-quote" href="#quote"> get a Quote </a></li>
            <?php endif; ?>

          </ul>
          <ul class="uk-navbar-nav uk-hidden@m">
            <li><a href="#offcanvas-overlay" class=" button_type_toggle " uk-toggle="target: #offcanvas-overlay">
                <span class="" uk-navbar-toggle-icon>

                </span>
              </a></li>
              <li> <a class="nav__link-quote" href="#quote"> get a Quote </a></li>

          </ul>
        </div>
      </div>
    </div> <!-- END uk-container -->
  </div>
  <!-- END nav_type-main -->
</nav>

<!-- Off Canvas -->


<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar section_theme_white">

    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <br>
    <br>
    <br>
    <ul class="uk-nav ">
      <?php if (have_rows('menu', 'option')) : ?>
        <?php while (have_rows('menu', 'option')) : the_row(); ?>
          <?php if (get_row_layout() == 'pages') : ?>
            <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
          <?php elseif (get_row_layout() == 'links') : ?>
            <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </ul>


  </div>
</div>

<body>