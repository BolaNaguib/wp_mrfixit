<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title>  <?php the_field('meta_title'); ?>  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" /> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"> -->

  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->
  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
  <meta name="title" content=" <?php the_field('meta_title'); ?> " />
  <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
  <meta name="description" content=" <?php the_field('meta_description'); ?> " />
  <link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>" />
  <?php the_field('header_js_general', 'option');
  the_field('header_js');
  wp_head();

  $logo = get_field('logo', 'option');
  $post_id =  get_the_ID();
  $city = get_field('city', $post_id);
  // ACF Fields 
  $phone_display_option = get_field('phone_display', 'option');
  $phone_display_single = get_field('phone_display', $post_id);
  $phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

  $phone_option = get_field('phone', 'option');
  $phone_single = get_field('phone', $post_id);
  $phone = $phone_single ? $phone_single : $phone_option;
  ?>
</head>
<!-- END head -->
<!-- START body -->
<nav class="nav">
  <!-- START nav_type-main -->
  <div class='nav_type-main boundary-align'>
    <!-- START uk-container -->
    <div class='uk-container'>
      <div class="uk-navbar" uk-navbar>
        <div class="uk-navbar-left">
          <a style="position:fixed; top:5px;     z-index: 999;" href="/">
          <picture>
  <source srcset="<?php echo get_template_directory_uri(); ?>/images/mrfixit-logo.webp" type="image/webp">
  <source srcset="<?php echo $logo['url']; ?>" type="image/jpeg"> 
  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
</picture>
          </a>

        </div>

        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav uk-visible@m  uk-flex uk-flex-middle">
            <?php if (have_rows('menu', 'option')) : ?>
              <?php while (have_rows('menu', 'option')) : the_row(); ?>
                <?php if (get_row_layout() == 'pages') : ?>
                  <li><a class="nav__link" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a>
                    <?php if (have_rows('sub_menu')) : ?>
                      <div class="uk-navbar-dropdown xsx">
                        <ul class="uk-nav uk-list-divider uk-navbar-dropdown-nav">
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
                  <li><a class="nav__link" href="<?php the_sub_field('link'); ?>"  uk-scroll="offset: 50"><?php the_sub_field('text'); ?></a></li>
                <?php endif; ?>
              <?php endwhile; ?>
              <li> <a class="nav__link-quote" href="tel:<?php echo $phone; ?>"> <svg  style="width: 15px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone fa-w-16"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg> <?php echo $phone_display; ?> </a></li>
            <?php endif; ?>

          </ul>
          <ul class="uk-navbar-nav uk-hidden@m  uk-flex-middle uk-flex">
            <li>

              <button class="button_type_toggle" type="button">
                <span class="" uk-navbar-toggle-icon></span></button>
              <!-- <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> -->
              <div class="navbar_type-dropdown" uk-dropdown="mode: click;pos: bottom-justify; boundary: .boundary-align; boundary-align: true" style="display: none;">
                <ul class="uk-nav ">
                  <?php if (have_rows('menu', 'option')) : ?>
                    <?php while (have_rows('menu', 'option')) : the_row(); ?>
                      <?php if (get_row_layout() == 'pages') : ?>
                        <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
                      <?php elseif (get_row_layout() == 'links') : ?>
                        <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"  uk-scroll="offset: 50"><?php the_sub_field('text'); ?></a></li>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </ul> 
              </div>
              
        </li>
        <li style="list-style: none;"> <a class="nav__link-quote" href="tel:<?php echo $phone; ?>"><svg style="width: 15px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone fa-w-16"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg> <?php echo $phone_display; ?></a></li>

        </ul>
      </div>
    </div>
  </div> <!-- END uk-container -->
  </div>
  <!-- END nav_type-main -->
</nav>

<!-- Off Canvas -->




<body>