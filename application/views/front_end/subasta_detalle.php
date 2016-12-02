
<!-- Service section start -->
<div class="col-xs-8 section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>SUBASTA #<?= $SubastaDetalle->id; ?></h1>
            <!-- Section's title goes here -->
            <p>Detalle de Subasta.</p>
            <!--Simple description for section goes here. -->
            <input type="hidden" id="segundos" value="<?= $segundos ?>">
            <input type="hidden" id="restante" value="<?= $restante ?>">
            <?= $restante ?>
            <?= $segundos ?>
        </div>
        <?php if ($Inscritos) { ?>
            <?php foreach ($Inscritos as $i) { ?>
                <?php if ($this->session->userdata('id') == $i->UsuarioInscrito | $this->session->userdata('id') == $SubastaDetalle->Propietario) { ?>
                    <?php if ($Inscritos == TRUE & $this->session->userdata('id') != $SubastaDetalle->Propietario) { ?>
                        <?php foreach ($Inscritos as $i) { ?>
                            <?php if ($this->session->userdata('id') == $i->UsuarioInscrito) { ?>
                                <!--INSCRITO -->
                                <div>
                                    <div class="pull-right col-xs-5">
                                        <?php if ($SubastaDetalle->foto) { ?>
                                            <img class="img-rounded" src="<?= base_url(); ?>public/subasta_ci/producto/<?= $SubastaDetalle->foto; ?>" alt="project 3" >
                                        <?php } else { ?>
                                            <img class="img-rounded" src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project 3" >
                                        <?php } ?>
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
                                            <div class="row-margin">
                                                <span>Capacidad Pago</span> 
                                                <span><h2><strong>$<?= $SubastaDetalle->capacidadPago; ?></strong></h2></span>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" method="POST" action="<?= base_url(); ?>oferta/HacerOferta">
                                            <input type="hidden" name="idSubasta" value="<?= $SubastaDetalle->id; ?>">
                                            <input type="hidden" name="idUsuario" value="<?= $this->session->userdata('id'); ?>">
                                            <div class="col-xs-12 form-group">
                                                <div class="row-margin">
                                                    <span><h2><strong><input type="number" class="form-control" name="oferta" id="oferta" placeholder="Ofertar" value="<?= $SubastaDetalle->precioActual; ?>" min="<?= $SubastaDetalle->precioActual; ?>" max="<?= $SubastaDetalle->capacidadPago; ?>"></strong></h2></span>
                                                </div>
                                                <div class="input-group col-xs-12">
                                                    <div class="input-group-addon">
                                                        <button type="submit" class="btn btn-primary btn-large">Ofertar</button>
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
                                                    <span>Tiempo</span><strong id="CuentaAtras"></strong></div>
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
                        <div>
                            <div class="pull-right col-xs-5">
                                <?php if ($SubastaDetalle->foto) { ?>
                                    <img class="img-thumbnail" src="<?= base_url(); ?>public/subasta_ci/producto/<?= $SubastaDetalle->foto; ?>" alt="project 3" >
                                <?php } else { ?>
                                    <img class="img-thumbnail" src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project 3" >
                                <?php } ?>
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
                                    <div class="input-group col-xs-12">
                                        <div class="input-group-addon">
                                            <button type="submit" class="btn btn-primary btn-large">EDITAR MI SUBASTA</button>
                                        </div>
                                    </div>
                                </form>
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
                                </div>
                                <div class="col-xs-10">
                                    <p><?= $SubastaDetalle->descripcion; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FIN PROPIETARIO -->
                <?php } else { ?>
                    fdfd
                    <?php
                }
            }
            ?>
        <?php } ?>

    <?php } ?>
<?php } else { ?>

<?php } ?>


<?php if ($Inscritos) { ?>
    <?php $EXISTE = FALSE; ?>
    <?php foreach ($Inscritos as $i) { ?>
        <?php if ($this->session->userdata('id') == $i->UsuarioInscrito) { ?>
            <?php $EXISTE = TRUE; ?>
        <?php } ?>
    <?php } ?>
    <?php if ($EXISTE == FALSE & $this->session->userdata('id') != $SubastaDetalle->Propietario) { ?>
        <!--SUSCRIBETE -->
        <div>
            <div class="pull-right col-xs-5">
                <?php if ($SubastaDetalle->foto) { ?>
                    <img class="img-thumbnail" src="<?= base_url(); ?>public/subasta_ci/producto/<?= $SubastaDetalle->foto; ?>" alt="project 3" >
                <?php } else { ?>
                    <img class="img-thumbnail" src="<?= base_url(); ?>public/images/Portfolio01.png" alt="project 3" >
                <?php } ?>
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
                    <div class="input-group col-xs-12">
                        <div class="input-group-addon">
                            <button type="submit" class="btn btn-primary btn-large">SUSCRIBIRSE</button>
                        </div>
                    </div>
                </form>
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
        <!--FIN SUSCRIBITE -->
    <?php } ?>

<?php } ?>


</div>
</div>
<!-- Service section end -->

<script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    //var totalTiempo=5;
    var totalTiempo = document.getElementById('segundos').value();
    var restante = document.getElementById('restante').value();
    /* Determinamos la url donde redireccionar */
    
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Redireccionando en "+totalTiempo;
        if(totalTiempo==-1){
            alert("Subasta Finalizada");
        }
        if(totalTiempo==0)
        {
            //window.location=url;
            location.reload();
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
