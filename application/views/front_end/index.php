<!-- Start home section -->
<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <div class="triangle"></div>
        <!-- mask elemet use for masking background image -->
        <div class="mask"></div>
        <!-- All slides centred in container element -->
        <div class="container">
            <!-- Start first slide -->
            <div class="da-slide">
                <h2 class="fittext2">Welcome to pluton theme</h2>
                <h4>Clean & responsive</h4>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php base_url(); ?>public/images/Slider01.png" alt="image01" width="320">
                </div>
            </div>
            <!-- End first slide -->
            <!-- Start second slide -->
            <div class="da-slide">
                <h2>Easy management</h2>
                <h4>Easy to use</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php base_url(); ?>public/images/Slider02.png" width="320" alt="image02">
                </div>
            </div>
            <!-- End second slide -->
            <!-- Start third slide -->
            <div class="da-slide">
                <h2>Revolution</h2>
                <h4>Customizable</h4>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <a href="#" class="da-link button">Read more</a>
                <div class="da-img">
                    <img src="<?php base_url(); ?>public/images/Slider03.png" width="320" alt="image03">
                </div>
            </div>
            <!-- Start third slide -->
            <!-- Start cSlide navigation arrows -->
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
            <!-- End cSlide navigation arrows -->
        </div>
    </div>
</div>
<!-- End home section -->
<!-- Service section start -->
<div class="section primary-section" id="service">
    <div class="container">
        <div class="container">
            
            
            <?php foreach ($users as $user) { ?>

                <h2><?php echo $user->nombre; ?></h2>
                <h2><?php echo $user->apellido; ?></h2>

            <?php } ?>
                
                
        </div>
        <!-- Start title section -->
        <div class="title">
            <h1>What We Do?</h1>
            <!-- Section's title goes here -->
            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php base_url(); ?>public/images/Service1.png" alt="service 1">
                    </div>
                    <h3>Modern Design</h3>
                    <p>We Create Modern And Clean Theme For Your Business Company.</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php base_url(); ?>public/images/Service2.png" alt="service 2" />
                    </div>
                    <h3>Powerfull Theme</h3>
                    <p>We Create Modern And Powerful Theme With Lots Animation And Features</p>
                </div>
            </div>
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="<?php base_url(); ?>public/images/Service3.png" alt="service 3">
                    </div>
                    <h3>Clean Code</h3>
                    <p>We Create Modern And Powerful Html5 And CSS3 Code Easy For Read And Customize.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service section end -->


