<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>SubastaSV</title>
        <link rel="shortcut icon" href="<?php base_url(); ?>public/images/subasta_ci/subasta_logo.png">
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


        <link rel="stylesheet" href="<?php base_url(); ?>public/login/css/style.css">


    </head>

    <body>
        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#login">INGRESAR</a></li>
                <li class="tab"><a href="#signup">REGISTRARSE</a></li>
            </ul>

            <div class="tab-content">

                <div id="login">   
                    <h1>Hey, Bienvenido </h1>

                    <form action="<?= base_url(); ?>login/entrar" method="post">

                        <div class="field-wrap">
                            <label>
                                Direccion Email<span class="req">*</span>
                            </label>
                            <input type="email" name="correo" required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password" name="password" required autocomplete="off"/>
                        </div>


                        <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-warning" role="alert">
                                <b><?php echo $this->session->flashdata('error'); ?></b>
                            </div>
                            <br>
                        <?php } ?>

                        <p class="forgot"><a href="#">¿Olvidaste tu contraseña?</a></p>

                        <button type="submit" class="button button-block"/>ENTRAR</button>

                    </form>

                </div>

                <div id="signup">   
                    <h1>Unite a SubastaSV</h1>

                    <form action="/" method="post">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    Nombre<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off" />
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Apellido<span class="req">*</span>
                                </label>
                                <input type="text"required autocomplete="off"/>
                            </div>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Direccion Email<span class="req">*</span>
                            </label>
                            <input type="email"required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Contraseña<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Confirmar Contraseña<span class="req">*</span>
                            </label>
                            <input type="password"required autocomplete="off"/>
                        </div>

                        <button type="submit" class="button button-block"/>COMENCEMOS</button>

                    </form>

                </div>

            </div><!-- tab-content -->

            <!-- Footer section start -->
            <div class="footer">
                <p><b><a href="http://www.graphberry.com">&copy; SubastaSV</a></b></p>
            </div>
            <!-- Footer section end -->
            <!-- ScrollUp button start -->
            <div class="scrollup">
                <a href="#">
                    <i class="icon-up-open"></i>
                </a>
            </div>
            <!-- ScrollUp button end -->

        </div> <!-- /form -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="<?php base_url(); ?>public/login/js/index.js"></script>

    </body>
</html>
