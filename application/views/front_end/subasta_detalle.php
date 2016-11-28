
<!-- Service section start -->
<div class="col-xs-8 section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>SUBASTA #<?= $SubastaDetalle->id; ?></h1>
            <!-- Section's title goes here -->
            <p>Detalle de Subasta.</p>
            <!--Simple description for section goes here. -->

        </div>
        <?php if ($Inscritos == true & $this->session->userdata('id') != $SubastaDetalle->Propietario) { ?>
            <?php foreach ($Inscritos as $i) { ?>
                <?php if ($this->session->userdata('id') == $i->UsuarioInscrito) { ?>
                    <!--INSCRITO -->
                    <div>
                        <div class="pull-right col-xs-5">
                            <img src="<?= base_url(); ?>public/images/Portfolio03.png" alt="project 3" >
                        </div>
                        <div class=" col-xs-5">
                            <div class="project-title"></div>
                            <div class="project-info">
                                <h1><?= $SubastaDetalle->nombreProducto; ?></h1>
                                <hr>
                                <div class="row-margin">
                                    <span>Monto Inicial</span> 
                                    <span><h2><strong>$<?= $SubastaDetalle->precioSujerido; ?></strong></h2></span>
                                </div>
                            </div>
                            <form class="form-horizontal">
                                <div class="col-xs-12 form-group">
                                    <div class="row-margin">
                                    <span><h2><strong><input type="number" class="form-control" id="exampleInputAmount" placeholder="Ofertar"></strong></h2></span>
                                </div>
                                    <div class="input-group col-xs-12">
                                        <div class="input-group-addon">
                                            <button type="submit" class="btn btn-primary">Ofertar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= base_url(); ?>oferta/index/<?= $SubastaDetalle->id; ?>"></iframe>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=" col-xs-10">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><strong><?= $SubastaDetalle->nombreProducto; ?></strong></h3>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Fecha</span><strong><?= $SubastaDetalle->fechaSubasta; ?></strong></div>
                                    <div>
                                        <span>Lote</span>
                                        <?php if ($SubastaDetalle->IsLote == 1) { ?>
                                            <strong>SI</strong> </div>
                                    <?php } else { ?>
                                        <strong>NO</strong> </div>
                                <?php } ?>
                                <div>
                                    <span>Producto</span><strong><?= $SubastaDetalle->TipoProductoNombre; ?></strong></div>
                                <div>
                                    <span>Inscripcion</span><br><strong><?= $SubastaDetalle->fechaInscripcion; ?></strong></div>
                            </div>
                            <div class="col-xs-10">
                                <p><?= $SubastaDetalle->descripcion; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN INSCRITO -->
            <?php } ?>
        <?php } ?>
        <?php
    } else {
        if ($this->session->userdata('id') == $SubastaDetalle->Propietario) {
            ?>
            <!--PROPIETARIO -->
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
            <!--FIN PROPIETARIO -->
            <h1>Propietario</h1>
    <?php } else { ?>
            <!--SUSCRIBETE -->
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
            <!--FIN SUSCRIBITE -->
            <h1>Suscribite</h1>
            <?php
        }
    }
    ?>
</div>
</div>
<!-- Service section end -->
