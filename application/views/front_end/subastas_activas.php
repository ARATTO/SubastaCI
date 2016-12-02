<!-- Portfolio section start -->
<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>SUBASTAS ACTIVAS</h1>
            <p>Catalogo de subastas en linea.</p>
        </div>
        <ul class="nav nav-pills">
            <li class="filter" data-filter="all">
                <a href="#noAction">TODO</a>
            </li>
            <li class="filter" data-filter="web">
                <a href="#noAction">ESPERA</a>
            </li>
            <li class="filter" data-filter="photo">
                <a href="#noAction">EN VIVO</a>
            </li>
            <li class="filter" data-filter="identity">
                <a href="#noAction">DESTACADA</a>
            </li>
        </ul>
        <!-- Start details for portfolio project  -->
        <div id="single-project">

            <?php foreach ($CatalogoSubastas as $subasta) { ?>
                <form action="<?= base_url(); ?>subasta/subastadetalle/<?= $subasta->id; ?>" method="post" >
                    <!-- Start details for portfolio project -->
                    <div id="slidingDiv<?= $subasta->id ?>" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <?php if ($subasta->foto) { ?>
                                <img src="<?= base_url(); ?>public/subasta_ci/producto/<?= $subasta->foto; ?>" alt="project 3" >
                            <?php } else { ?>
                                <img src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project 3" >
                            <?php } ?>
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <span class="show_hide close">
                                    <i class="icon-cancel"></i>
                                </span>
                                <div class="project-title clearfix">
                                    <?php if ($subasta->FINALIZADA == 0) { ?>
                                        <button type="submit" class="btn btn-default btn-lg btn-block">
                                            <strong><?= $subasta->nombreProducto; ?></strong>
                                        </button>
                                    <?php } else { ?>
                                        <button type="submit" class="btn btn-danger btn-lg btn-block" disabled>
                                            <strong>FINALIZADA</strong>
                                        </button>
                                    <?php } ?>

                                </div>
                                <div class="project-info">

                                    <div>
                                        <span>Fecha</span><?= $subasta->fechaSubasta; ?>
                                    </div>
                                    <div>
                                        <span>Lote</span>
                                        <?php if ($subasta->IsLote == 1) { ?>
                                            SI </div>
                                    <?php } else { ?>
                                        NO </div>
                                <?php } ?>
                                <div>
                                    <span>Monto Inicial</span> 
                                    <strong><h3>$<?= $subasta->precioSujerido; ?></h3></strong>
                                </div>
                                <?php if ($subasta->FINALIZADA == 1) { ?>
                                    <div>
                                        <span>Final</span> 
                                        <strong><h3>$<?= $subasta->precioActual; ?></h3></strong>
                                    </div>
                                <?php } ?>

                            </div>
                            <p><?= $subasta->descripcion; ?></p>
                        </div>
                    </div>
            </div>
            <!-- End details for portfolio project  -->
            </form>
        <?php } ?>

        <!-- End details for portfolio project 9 -->
        <ul id="portfolio-grid" class="thumbnails row">
            <?php foreach ($CatalogoSubastas as $subasta) { ?>
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <?php if ($subasta->foto) { ?>
                            <img src="<?= base_url(); ?>public/subasta_ci/producto/<?= $subasta->foto; ?>" alt="project 3" >
                        <?php } else { ?>
                            <img src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project 3" >
                        <?php } ?>
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv<?= $subasta->id ?>">
                            <i class="icon-plus"></i>
                        </a>

                        <h3><?= $subasta->nombreProducto; ?></h3>

                        <p><span>Monto Inicial</span> 
                            <strong><h2>$<?= $subasta->precioSujerido; ?></h2></strong></p>
                        <div class="mask"></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
</div>
<!-- Portfolio section end -->