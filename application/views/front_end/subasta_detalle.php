
<!-- Service section start -->
<div class="col-xs-8 section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>SUBASTA #<?= $idSubasta ?></h1>
            <!-- Section's title goes here -->
            <p>Detalle de Subasta.</p>
          
            <!--Simple description for section goes here. -->
            <?php foreach ($PruebaJoin as $p) { ?>
                    <h3><?= $p; ?></h3>
            <?php } ?>
        </div>
        <div >
            <div class="row-margin">
                <div class="pull-right col-xs-5">
                    <img src="<?= base_url(); ?>public/images/Portfolio03.png" alt="project 3" >
                </div>
                <div class="col-xs-5">
                    <div class="project-title"></div>
                    <div class="project-info">
                        <h3>Webste for Some Client</h3>
                        <div>
                            <span>Client</span>Some Client Name</div>
                        <div>
                            <span>Date</span>July 2013</div>
                        <div>
                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                        <div>
                            <span>Link</span>http://examplecomp.com</div>
                        <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these</p>
                    </div>

                </div>
            </div>

        </div>
        <div >
            <div class="pull-left ">
                <div class="project-description">
                    <div class="project-title clearfix">
                        <h3>Webste for Some Client</h3>

                    </div>
                    <div class="project-info">
                        <div>
                            <span>Client</span>Some Client Name</div>
                        <div>
                            <span>Date</span>July 2013</div>
                        <div>
                            <span>Skills</span>HTML5, CSS3, JavaScript</div>
                        <div>
                            <span>Link</span>http://examplecomp.com</div>
                    </div>
                    <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these.</p>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Service section end -->
