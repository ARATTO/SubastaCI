<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset=utf-8>
        <meta http-equiv="refresh" content="2" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/bootstrap_motto.css" />
    </head>
    <body style="background-color:#181A1C ">
        <div  style="padding: 20px;">

            <form id="formulario" class="form-horizontal">
                <div class="col-xs-12 form-group" id="ultimaOferta">
                    <label class="sr-only" for="exampleInputAmount">Mejor Oferta</label>
                    <div class="input-group col-xs-12">
                        <div class="input-group-addon">$</div>
                        <input type="number" class="form-control" value="<?= $subasta->precioActual; ?>" placeholder="Oferta" disabled>
                        <input type="hidden" name="idSu" value="<?= $subasta->id; ?>">
                        <div class="input-group-addon"></div>
                    </div>
                </div>
            </form>
            
        </div>

        


