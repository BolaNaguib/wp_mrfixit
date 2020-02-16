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
  <style>
    div.wpcf7 .screen-reader-response{position:absolute;overflow:hidden;clip:rect(1px,1px,1px,1px);height:1px;width:1px;margin:0;padding:0;border:0}div.wpcf7-response-output{margin:2em 0.5em 1em;padding:0.2em 1em;border:2px solid #ff0000}.wpcf7-form-control-wrap{position:relative}.wpcf7-display-none{display:none}html{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:16px;font-weight:400;line-height:1.5;-webkit-text-size-adjust:100%;background:#fff;color:#666}body{margin:0}a{-webkit-text-decoration-skip:objects}a{color:#1e87f0;text-decoration:none}b{font-weight:bolder}small{font-size:80%}img{vertical-align:middle}img{max-width:100%;height:auto;box-sizing:border-box}p,ul{margin:0 0 20px 0}*+p,*+ul{margin-top:20px}h1,h3{margin:0 0 20px 0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-weight:400;color:#333;text-transform:none}h1{font-size:2.23125rem;line-height:1.2}h3{font-size:1.5rem;line-height:1.4}@media (min-width:960px){h1{font-size:2.625rem}}ul{padding-left:30px}hr{box-sizing:content-box;height:0;overflow:visible;text-align:inherit;margin:0 0 20px 0;border:0;border-top:1px solid #e5e5e5}*+hr{margin-top:20px}:root{--uk-breakpoint-s:640px;--uk-breakpoint-m:960px;--uk-breakpoint-l:1200px;--uk-breakpoint-xl:1600px}.uk-container{box-sizing:content-box;max-width:1200px;margin-left:auto;margin-right:auto;padding-left:15px;padding-right:15px}@media (min-width:640px){.uk-container{padding-left:30px;padding-right:30px}}@media (min-width:960px){.uk-container{padding-left:40px;padding-right:40px}}.uk-container::after,.uk-container::before{content:"";display:table}.uk-container::after{clear:both}.uk-container>:last-child{margin-bottom:0}.uk-grid{display:flex;flex-wrap:wrap;margin:0;padding:0;list-style:none}.uk-grid>*{margin:0}.uk-grid>*>:last-child{margin-bottom:0}.uk-grid{margin-left:-30px}.uk-grid>*{padding-left:30px}@media (min-width:1200px){.uk-grid{margin-left:-40px}.uk-grid>*{padding-left:40px}}.uk-nav{margin:0;padding:0;list-style:none}.uk-nav li>a{display:block;text-decoration:none}.uk-nav>li>a{padding:5px 0}.uk-navbar{display:flex;position:relative}.uk-navbar-left,.uk-navbar-right{display:flex;align-items:center}.uk-navbar-right{margin-left:auto}.uk-navbar-nav{display:flex;margin:0;padding:0;list-style:none}.uk-navbar-left,.uk-navbar-right{flex-wrap:wrap}.uk-navbar-nav>li>a{display:flex;justify-content:center;align-items:center;box-sizing:border-box;min-height:80px;padding:0 15px;font-size:.875rem;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";text-decoration:none}.uk-navbar-nav>li>a{color:#999;text-transform:uppercase}.uk-navbar-dropdown{display:none;position:absolute;z-index:1020;box-sizing:border-box;width:200px;padding:25px;background:#fff;color:#666;box-shadow:0 5px 12px rgba(0,0,0,.15)}.uk-navbar-dropdown-nav{font-size:.875rem}.uk-navbar-dropdown-nav>li>a{color:#999}.uk-offcanvas-bar{position:absolute;top:0;bottom:0;left:-270px;box-sizing:border-box;width:270px;padding:20px 20px;background:#222;overflow-y:auto;-webkit-overflow-scrolling:touch}@media (min-width:960px){.uk-offcanvas-bar{left:-350px;width:350px;padding:40px 40px}}.uk-offcanvas-close{position:absolute;z-index:1000;top:20px;right:20px;padding:5px}:root{--uk-leader-fill-content:.}[class*=uk-child-width]>*{box-sizing:border-box;width:100%}.uk-text-left{text-align:left!important}.uk-text-center{text-align:center!important}.uk-flex{display:flex}.uk-flex::after,.uk-flex::before{display:none}.uk-flex-middle{align-items:center}.uk-margin-bottom{margin-bottom:20px!important}[class*=uk-position-center]{position:absolute!important}[class*=uk-position-center-left],[class*=uk-position-center-right]{top:50%;transform:translateY(-50%)}.uk-position-center-left{left:0}.uk-position-center-right{right:0}.uk-position-relative{position:relative!important}.uk-position-small{max-width:calc(100% - (15px * 2));margin:15px}.uk-position-small[class*=uk-position-center-left],.uk-position-small[class*=uk-position-center-right]{transform:translateY(-50%) translateY(-15px)}@media (min-width:960px){.uk-hidden\@m{display:none!important}}@media (max-width:959px){.uk-visible\@m{display:none!important}}.uk-light,.uk-offcanvas-bar{color:rgba(255,255,255,.7)}.uk-light a,.uk-offcanvas-bar a{color:#fff}@import "https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap";html{color:#000}h1,h3,html{font-family:Poppins,sans-serif}.nav{position:fixed;top:0;z-index:999;width:100%}.nav__link{margin-left:35px;position:relative;color:#f2a700!important;min-height:unset!important;padding:5px 0!important;font-weight:700;text-transform:uppercase!important}.nav__link:before{content:"";background:#f2a700;height:2px;width:0;position:absolute;left:0;bottom:0}.nav__link-quote{min-height:unset!important;display:inline-block!important;background-color:#f2a700!important;color:#fff!important;margin-left:20px!important;padding:5px 15px!important;border-radius:5px!important;font-weight:700!important;text-transform:uppercase!important}.button_type_toggle{min-height:unset!important;color:#fff!important;padding:5px 0!important}.nav_type-main{padding:20px 0;border-bottom:1px solid #f2a700;background-color:#002e5b}.section{padding:75px 0;overflow:hidden}.section_type-hero{color:#fff;position:relative;height:100vh;background-position:50%;background-attachment:fixed;background-size:cover}.section_type-hero:before{content:"";position:absolute;top:0;left:0;display:block;right:0;bottom:0;background:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.55)),to(rgba(0,0,0,.35)));background:linear-gradient(180deg,rgba(0,0,0,.55),rgba(0,0,0,.35));z-index:0;opacity:.9}.section_type-hero *{color:#fff}.section_type-hero h1{text-shadow:3px 3px #000}.section_type-hero .callback{display:inline-block;padding:15px 30px;font-size:32px;background-color:#002e5b;color:#fff;text-shadow:1px 2px #000;-webkit-box-shadow:0 30px 20px -20px #000;box-shadow:0 30px 20px -20px #000;border-radius:10px}.section_theme-blue{background-color:#002e5b;color:#fff}.card_type-contactform h3{margin:0;color:#002e5b}.card_type-contactform .wpcf7-number,.card_type-contactform .wpcf7-text{display:block;width:97%;padding:10px 0 10px 10px;border:1px solid #dcdcdc;border-left:5px solid #f2ac0e;color:#000}.card_type-contactform .wpcf7-submit{background-color:#f2ac0e;padding:15px 20px;display:block;width:100%;border:none;color:#fff;font-size:21px}.card_type-contactinfo h3{color:#fff;margin:0}.card_type-contactinfo ul li{color:#fafafa;margin:10px 0}.card_type-contactinfo ul li span{font-size:8px;margin-right:10px;color:#d29100}.card_type-contactinfo ul li b{text-shadow:2px 2px #000}.sliderIcon{background-color:#f2a700;border-radius:100%}.sliderIcon{color:#fff}@-webkit-keyframes bounce{0%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}50%{-webkit-transform:translateY(10px);transform:translateY(10px)}to{-webkit-transform:translateY(-5px);transform:translateY(-5px)}}@keyframes bounce{0%{-webkit-transform:translateY(-5px);transform:translateY(-5px)}50%{-webkit-transform:translateY(10px);transform:translateY(10px)}to{-webkit-transform:translateY(-5px);transform:translateY(-5px)}}.scroll_button{display:inline-block;z-index:9;-webkit-animation:bounce 2s infinite;animation:bounce 2s infinite;bottom:25px;position:absolute;width:100%}.xsx{background-color:#002e5b;padding:10px;top:30px!important}.xsx a{position:relative;color:#f2a700!important;min-height:unset!important;padding:5px 0!important;display:inline-block!important}.xsx a:before{content:"";background:#f2a700;height:2px;width:0;position:absolute;left:0;top:0}.hr_type-small{display:inline-block;border:2px solid;width:4em;margin:0;color:#f2ac0e}.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-chevron-right:before{content:"\f054"}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:auto;src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot);src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:auto;src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot);src:url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff2) format("woff2"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff) format("woff"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.ttf) format("truetype"),url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fas{font-family:"Font Awesome 5 Free"}.fas{font-weight:900}
  </style>
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