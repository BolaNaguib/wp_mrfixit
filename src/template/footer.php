<!-- START footer -->
<footer class='section section_type-footer'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-grid -->
        <div class='uk-grid uk-child-width-1-3@m ' uk-grid="uk-margin">
            <!-- START div -->
            <div class=''>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>About Us</h3>
                    <ul class="uk-list quick-link">
                        <li>
                            <span>
                                © 2017-2020 Mr. Fix It Enterprises Inc
                            </span>
                        </li>
                        <li>
                            <span>
                                12173 Colony Preserve Dr.
                            </span>
                        </li>
                        <li>
                            <a href="#">
                                (561) 809-9997
                            </a>
                        </li>
                        <li>
                            <span>
                                Boynton Beach, Fl, 33436
                            </span>
                        </li>
                        <li>
                            <span>
                                License number :CC# 17-GD-201912-X -- U-22257
                            </span>
                        </li>

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
                    <ul class="uk-list quick-link">
                        <?php for ($i = 0; $i < 6; $i++) : ?>
                            <li>
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Home</a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <!-- END card_type-footer -->

            </div>
            <!-- END div -->

            <!-- START div -->
            <div class=''>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>LOCATION</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456459.6231149278!2d-80.73886060573066!3d26.645574896933336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d920433b31b3c3%3A0xf11714475e4c5747!2sMr.%20Fix%20it%20Garage%20Door!5e0!3m2!1sen!2seg!4v1580517098625!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <!-- END card_type-footer -->
            </div>
            <!-- END div -->
            <!-- START div -->
            <div class='uk-width-1-1'>
                <!-- START card_type-footer -->
                <div class='card_type-footer'>
                    <h3>LOCATIONS WE SERVE</h3>
                    <ul class="uk-list quick-link uk-child-width-1-4@m uk-grid">
                        <?php for ($i = 0; $i < 3; $i++) : ?>
                            <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Clermont</a>
                            </li>
                            <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Apopka</a>
                            </li>
                            <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Biverly Hills</a>
                            </li>
                            <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Clermont</a>
                            </li>
                            <li class="uk-margin-remove-top  uk-margin-small-bottom">
                                <a href="#" class="uk-flex uk-flex-middle"> <span><i class="fas fa-chevron-right"></i></span> Apopka</a>
                            </li>
                          
                        <?php endfor; ?>
                    </ul>
                </div>
                <!-- END card_type-footer -->

            </div>
            <!-- END div -->
        </div>
        <!-- END uk-grid -->
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