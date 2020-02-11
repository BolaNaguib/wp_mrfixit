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
?>
<!-- START footer -->
<footer class='section_type-footer'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-grid -->
        <div class='uk-grid uk-child-width-1-3@m ' uk-grid="uk-margin">
            <!-- START div -->
            <div class=''>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>CONTACT INFO</h3>
                    <ul class="uk-list quick-link">
                        <li><a href="tel:<?php echo $phone; ?>"> <b><i class="fas fa-mobile-alt"></i> </b> <?php echo $phone_display; ?> </a></li>
                        <li><b><i class="fas fa-envelope-open-text"></i></b><?php echo $email; ?></li>
                        <li><b><i class="fas fa-map-marker-alt"></i> </b><?php echo $address; ?></li>
                    </ul>
                </div>
                <!-- END card_type-footer -->

            </div>
            <!-- END div -->
            <!-- START div -->
            <div class=''>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>OUR SERVICES</h3>
                    <?php $postxs = get_field('our_services', 'option');
                    if ($postxs) : ?>
                        <ul class="uk-list quick-link">
                            <?php foreach ($postxs as $p) : ?>
                                <li>
                                    <a href="<?php echo get_permalink($p->ID); ?>" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> <?php echo get_the_title($p->ID); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <!-- END card_type-footer -->

            </div>
            <!-- END div -->

            <!-- START div -->
            <div class=''>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>LOCATION</h3>
                    <?php echo $map; ?>
                </div>
                <!-- END card_type-footer -->
            </div>
            <!-- END div -->
            <!-- START div -->
            <div class='uk-width-1-1'>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>LOCATIONS WE SERVE</h3>
                    <?php $posts = get_field('cities_we_serve', 'option');
                    if ($posts) : ?>
                        <ul class="uk-list quick-link uk-child-width-1-4@m uk-grid">
                            <?php foreach ($posts as $p) : ?>
                                <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                    <a href="<?php echo get_permalink($p->ID); ?>" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> <?php echo get_the_title($p->ID); ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <!-- END card_type-footer -->

            </div>
            <!-- END div -->
        </div>
        <!-- END uk-grid -->
        <br>
        <!-- START uk-text-center -->
        <div class='uk-text-center'>

            <img src="<?php echo $paymentmethods['url']; ?>" alt="<?php echo $paymentmethods['alt']; ?>" title="<?php echo $paymentmethods['title']; ?>"><br>
            <small> <?php echo $copyrights; ?> | Developed by <a style="color:#fff;">xvxlabs.com</a></small>
        </div>
        <!-- END uk-text-center -->
    </div>
    <!-- END uk-container -->
</footer>
<!-- END footer -->

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>


<?php wp_footer() ?>


</body>

</html>