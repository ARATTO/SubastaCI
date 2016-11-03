<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a href="<?= base_url(); ?>home" class="brand">
                <img src="<?= base_url(); ?>public/images/subasta_ci/subasta_logo.png" width="40" height="40" alt="Logo" />
                <span>  SUBASTA<b>SV</b> </span>
                <!-- This is website logo -->
            </a>
            <!-- Navigation button, visible on small resolution -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-menu"></i>
            </button>
            <!-- Main navigation -->
            <div class="nav-collapse collapse pull-right">
                <ul class="nav" id="top-navigation">
                    <li><a href="<?= base_url(); ?>subasta">SUBASTAS ACTIVAS</a></li>
                    <li><a href="<?= base_url(); ?>subasta/portafolio">MI PORTAFOLIO</a></li>
                    <?php if (!$this->session->userdata('nombre')) { ?>

                        <li><a href="<?= base_url(); ?>login">LOGIN</a></li>

                    <?php } else { ?>
                        <ul class="nav nav-pills">
                            <li role="presentation" class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?= $this->session->userdata('nombre');?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Configuracion</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url(); ?>login/logout"><b>Cerrar Sesion</b></a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>

                </ul>
            </div>
            <!-- End main navigation -->
        </div>
    </div>
</div>
<section class="contenido">