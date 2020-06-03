<?php // ACF Fields 
$copyrights = get_field('copyrights', 'options');
$paymentmethods = get_field('paymentmethods', 'options');

$post_id =  get_the_ID();

$phone_display_option = get_field('phone_display', 'option');
$phone_display_single = get_field('phone_display', $post_id);
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

$phone_option = get_field('phone', 'option');
$phone_single = get_field('phone', $post_id);
$phone = $phone_single ? $phone_single : $phone_option;

$city = get_field('city', $post_id);
$address_option = get_field('address', 'option');
$address = $city ? $city : $address_option;

$email = get_field('email', 'option');

$map_option = get_field('map', 'options');
$map_single = get_field('map', $post_id);
$map = $map_single ? $map_single : $map_option;

$footer = get_field('footer', $post_id);


?> <a style="position: fixed;
    bottom: 0px;
    padding: 20px 0px;
    text-align: center;
    display: block;
    width: 100%;
    background-color: #002e5b;
    color: #fff;
    font-size: 26px;" class="uk-hidden@m changedNumberIcon" href="tel:<?php echo $phone ?>"><svg style="width: 15px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone fa-w-16"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z" class=""></path></svg> <span class="changedNumberspan"> <?php echo $phone_display ?></span></a><!-- START footer --><footer class="section_type-footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/footer.jpg');"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid uk-child-width-1-3@m" uk-grid="uk-margin"><!-- START div --><div class=""><!-- START card_type-footer --><div class="card_type-footer"><h3>CONTACT INFO</h3><ul class="uk-list quick-link"><li><a class="uk-flex uk-flex-middle changedNumberIcon" href="tel:<?php echo $phone; ?>"><b><svg style="height: 20px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-mobile-alt fa-w-10"><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z" class=""></path></svg><!-- <i class="fas fa-mobile-alt"></i>  --> </b><span class="changedNumberspan" style="font-size: 16px;"> <?php echo $phone_display; ?> </span></a></li><li class="uk-flex uk-flex-middle"><b><svg style="height: 20px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open-text" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope-open-text fa-w-16"><path fill="currentColor" d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z" class=""></path></svg> </b><?php echo $email; ?></li><li class="uk-flex uk-flex-middle"><b><svg style="height: 20px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg> </b><?php echo $address; ?></li></ul> <?php if (have_rows('social', 'options')) : ?> <hr><div class="uk-flex"><ul class="uk-iconnav social"><li><a href="https://www.facebook.com/MrFixItGD/"><svg style="width: 20px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-facebook-square fa-w-14"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path></svg></a></li><li><a href="https://www.google.com/search?q=mr+fix+it+garage+door&amp;rlz=1C1SQJL_enEG867EG867&amp;oq=mr&amp;aqs=chrome.1.69i57j69i59j69i60l3j69i61j69i60j69i65.9695j0j4&amp;sourceid=chrome&amp;ie=UTF-8"><svg style="width: 20px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" class="svg-inline--fa fa-google fa-w-16"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" class=""></path></svg></a></li><li><a href="https://www.instagram.com/mrfixit_gd/"><svg style="width: 20px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg></a></li><li><a href="yelp.com/biz/mr-fix-it-garage-door-boynton-beach-3"><svg style="width: 20px;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="yelp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-yelp fa-w-12"><path fill="currentColor" d="M42.9 240.32l99.62 48.61c19.2 9.4 16.2 37.51-4.5 42.71L30.5 358.45a22.79 22.79 0 0 1-28.21-19.6 197.16 197.16 0 0 1 9-85.32 22.8 22.8 0 0 1 31.61-13.21zm44 239.25a199.45 199.45 0 0 0 79.42 32.11A22.78 22.78 0 0 0 192.94 490l3.9-110.82c.7-21.3-25.5-31.91-39.81-16.1l-74.21 82.4a22.82 22.82 0 0 0 4.09 34.09zm145.34-109.92l58.81 94a22.93 22.93 0 0 0 34 5.5 198.36 198.36 0 0 0 52.71-67.61A23 23 0 0 0 364.17 370l-105.42-34.26c-20.31-6.5-37.81 15.8-26.51 33.91zm148.33-132.23a197.44 197.44 0 0 0-50.41-69.31 22.85 22.85 0 0 0-34 4.4l-62 91.92c-11.9 17.7 4.7 40.61 25.2 34.71L366 268.63a23 23 0 0 0 14.61-31.21zM62.11 30.18a22.86 22.86 0 0 0-9.9 32l104.12 180.44c11.7 20.2 42.61 11.9 42.61-11.4V22.88a22.67 22.67 0 0 0-24.5-22.8 320.37 320.37 0 0 0-112.33 30.1z" class=""></path></svg></a></li></ul></div> <?php endif; ?> </div><!-- END card_type-footer --></div><!-- END div --><!-- START div --><div class=""><!-- START card_type-footer --><div class="card_type-footer"><h3>OUR SERVICES</h3> <?php $postxs = get_field('our_services', 'option');
                    if ($postxs) : ?> <ul class="uk-list quick-link"> <?php foreach ($postxs as $p) : ?> <li><a href="<?php echo get_permalink($p->ID); ?>" class="uk-flex uk-flex-middle"><span><svg style="width:7px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg> </span> <?php echo get_the_title($p->ID); ?></a></li> <?php endforeach; ?> </ul> <?php endif; ?> </div><!-- END card_type-footer --></div><!-- END div --><!-- START div --><div class=""><style>.card_type-footer iframe {
                        width: 100%;
                    }</style><!-- START card_type-footer --><div class="card_type-footer"><h3>LOCATION</h3> <?php echo $map; ?> </div><!-- END card_type-footer --></div><!-- END div --></div><!-- END uk-grid --><br> <?php if (have_rows('locations', 'option')) : ?> <?php while (have_rows('locations', 'option')) : the_row(); ?> <?php if (get_row_layout() == 'cities') : ?> <?php
                    if (get_sub_field('page_name') == $footer) :
                    ?> <!-- START div --><div id="locations" class="uk-width-1-1"><!-- START card_type-footer --><div class="card_type-footer"> <?php the_sub_field('head') ?> <?php $posts = get_sub_field('city');
                                if ($posts) : ?> <ul class="uk-list quick-link uk-child-width-1-4@m uk-grid"> <?php foreach ($posts as $p) : ?> <li class="uk-margin-remove-top uk-margin-small-bottom"><a href="<?php echo get_permalink($p->ID); ?>" class="uk-flex uk-flex-middle"><span><svg style="width:7px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg> </span> <?php echo get_the_title($p->ID); ?></a></li> <?php endforeach; ?> </ul> <?php endif; ?> </div><!-- END card_type-footer --></div><!-- END div --> <?php endif; ?> <?php endif; ?> <?php endwhile; ?> <?php endif; ?> <br><!-- START uk-text-center --><div class="uk-text-center"><img src="<?php echo $paymentmethods['url']; ?>" alt="<?php echo $paymentmethods['alt']; ?>" title="<?php echo $paymentmethods['title']; ?>"><br><small> <?php echo $copyrights; ?> | Developed by <a style="color:#fff;">xvxlabs.com</a></small></div><!-- END uk-text-center --></div><!-- END uk-container --><!-- START div --></footer><h3 class="uk-hidden" id="citynamex" title="<?php the_field(city); ?>"><?php the_field(city); ?></h3><!-- END footer --><!-- UIkit JS --><!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script> --> <?php wp_footer() ?> <script>// var x = document.getElementById("txt");
    setTimeout(function() {
        let $cityx = $("#citynamex").attr("title");
        $("#cityname").val($cityx);
        console.log("CITYX = " + $cityx);
    }, 2000);</script><script>function changeNumber() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const hasGoogle = urlParams.has('glcid');

        if (hasGoogle) {
            const newDisplay = '(999) 639-8068';
            const newPhone = 'tel:9996398068';
            const x = document.querySelectorAll('.changedNumber');
            const y = document.querySelectorAll('.changedNumberIcon');
            const ese = document.querySelectorAll('.changedNumberspan');

            var i;
            for (i = 0; i < x.length; i++) {
                x[i].text = newDisplay;
                x[i].href = newPhone;
            }
            for (i = 0; i < y.length; i++) {
                // x[i].text = newDisplay;
                y[i].href = newPhone;
            }
            for (i = 0; i < ese.length; i++) {
                ese[i].innerText = newDisplay;
            }

            console.log('yes it have glcid');

        } else {
            console.log('no it does not ')
        }

    }
    changeNumber();</script>