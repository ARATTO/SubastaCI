<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a href="<?php base_url(); ?>" class="brand">
                <img src="<?php base_url(); ?>public/images/subasta_ci/subasta_logo.png" width="40" height="40" alt="Logo" />
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
                    <li><a href="#price">SUBASTAS ACTIVAS</a></li>
                    <li><a href="#portfolio">PORTAFOLIO</a></li>
                    <li><a href="#clients">CLIENTES</a></li>
                    <li><a href="#contact">CONTACTO</a></li>
                    <?php if ($this->session->userdata('login')) { ?>
                    
                        <li><a href="#login">LOGIN</a></li>
                        
                    <?php } else { ?>
                        <li>
                            <div class="btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-danger  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="#login"><b>Perfil</b></a></li>
                                        <li><a href="#logout"><b>Desloguear</b></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                    <?php } ?>

                </ul>
            </div>
            <!-- End main navigation -->
        </div>
    </div>
</div>
<section class="contenido">