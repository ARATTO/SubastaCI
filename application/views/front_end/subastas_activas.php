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

            <?php foreach ($subastas as $subasta) { ?>
                <form action="<?= base_url(); ?>subasta/subastadetalle/<?= $subasta->id; ?>" method="post" >
                    <!-- Start details for portfolio project -->
                    <div id="slidingDiv<?= $subasta->id ?>" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project<?= $subasta->id ?>" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                </span>
                                <div class="project-title clearfix">
                                    <?php foreach ($productos as $producto) { ?>
                                        <?php if ($producto->id == $subasta->Producto_id) { ?>
                                            <button type="submit" class="btn btn-default btn-lg btn-block">
                                                <strong><?= $producto->nombre; ?></strong>
                                            </button>
                                        <?php } ?>
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
            <?php foreach ($subastas as $subasta) { ?>
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project<?= $subasta->id ?>">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv<?= $subasta->id ?>">
                            <i class="icon-plus"></i>
                        </a>
                        <?php foreach ($productos as $producto) { ?>
                            <?php if ($producto->id == $subasta->Producto_id) { ?>
                                <h3><?= $producto->nombre; ?></h3>
                            <?php } ?>
                        <?php } ?>
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