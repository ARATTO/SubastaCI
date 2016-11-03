<!-- Service section start -->
<div class="col-xs-8 section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>CLIENTES</h1>
            <!-- Section's title goes here -->
            <p>Detalle de Clientes.</p>
            <!--Simple description for section goes here. -->
        </div>
        <!-- Default panel contents -->
        <div class="table-responsive">
            <!-- Table -->
            <table class="table table-hover">
                <thead>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th>CAPACIDAD PAGO</th>
                <th>ACCION</th>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) { ?>
                        <tr>
                            <td><?= $usuario->nombre; ?></td>
                            <td><?= $usuario->apellido; ?></td>
                            <td><?= $usuario->correo; ?></td>
                            <td><?= $usuario->capacidadPago; ?></td>
                            <td>
                                <a href="#" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="btn btn-danger" onclick="return confirm('¿Deseas Eliminar este Usuario?')">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Service section end -->
