<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Oferta extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        //AQUI DEBEN IR LOS HILOS ! 
    
        $idSubasta = $this->uri->segment(3);
   
        $subasta = SubastaModel::find($idSubasta);
       
        
        $ACTIVA = 0;
       
        date_default_timezone_set('America/El_Salvador');
        
        $fechaFinal = new DateTime($subasta->fechaFinal);
        $ahora = new DateTime(date('Y-m-d H:i:s'));
        
        $diferencia = $ahora->diff($fechaFinal);

        $dias = (int)$diferencia->format('%R%d');
        $horas = (int)$diferencia->format('%h');
        $minutos = (int)$diferencia->format('%i');
        $segundos = (int)$diferencia->format('%s');
        
        $sentido = (int) $diferencia->format('%R' . 1);
        if ($sentido > 0) {
            $Sdias = $dias * 24 * 60 * 60;
            $Shoras = $horas * 60 * 60;
            $Sminutos = $minutos * 60;
            $Ssegundos = $Sdias + $Shoras + $Sminutos + $segundos;
        }else{
            $Ssegundos = -1;
        }
        /*
        
        $fechaInicial = $subasta->fechaSubasta;
        $fechaFinal = date('Y-m-d H:i:s');
        
        $minutos = (strtotime($fechaFinal));
         */
        
        if ($Ssegundos <= 0) {
            //Temrino Subasta 0
            $ACTIVA = 0;
        } else {
            //Queda tiempo 1
            $ACTIVA = 1;
        }

        //Datos Estandar

        $datos['titulo'] = 'SubastaSV | Oferta';
        $datos['subasta'] = $subasta;
        $datos['activa'] = $ACTIVA;
        $datos['ffinal'] = $fechaFinal;
        $datos['ahora'] = $ahora;

        //Seleccionde Rol
        switch ($ACTIVA) {
            case 0 :
                $datos['contenido'] = 'finalizada'; //contiene nombre pagina contenido principal
                break;
            case 1 :
                $datos['contenido'] = 'oferta'; //contiene nombre pagina contenido principal
                break;
        }

        $this->load->view('template/template_oferta', $datos);
    }

    function HacerOferta() {


        $idSubasta = $this->input->post('idSubasta');
        $idUsuario = $this->input->post('idUsuario');
        $valorOferta = $this->input->post('oferta');

        //Asociar Oferta con PrecioActual
        $subasta = SubastaModel::find($idSubasta);
        
        
        date_default_timezone_set('America/El_Salvador');
        
        $fechaFinal = new DateTime($subasta->fechaFinal);
        $ahora = new DateTime(date('Y-m-d H:i:s'));
        
        $diferencia = $ahora->diff($fechaFinal);

        $dias = (int)$diferencia->format('%R%d');
        $horas = (int)$diferencia->format('%h');
        $minutos = (int)$diferencia->format('%i');
        $segundos = (int)$diferencia->format('%s');
        
        $sentido = (int) $diferencia->format('%R' . 1);
        if ($sentido > 0) {
            $Sdias = $dias * 24 * 60 * 60;
            $Shoras = $horas * 60 * 60;
            $Sminutos = $minutos * 60;
            $Ssegundos = $Sdias + $Shoras + $Sminutos + $segundos;
        }else{
            $Ssegundos = -1;
        }
        /*
        
        $fechaInicial = $subasta->fechaSubasta;
        $fechaFinal = date('Y-m-d H:i:s');
        
        $minutos = (strtotime($fechaFinal));
         */
        
        if ($Ssegundos == -1 ) {
            //Temrino Subasta 0
            $subasta->FINALIZADA = 1;
            $subasta->save();
        } 
        
  
        
        if ($subasta->FINALIZADA != 1) {
            
            if ($valorOferta > $subasta->precioActual) {

                $subasta->precioActual = $valorOferta;
                $subasta->save();
            }

            //Crear Oferta
            $Oferta = new OfertaModel;

            $Oferta->valor = $valorOferta;
            $Oferta->Usuario_id = $idUsuario;
            $Oferta->Subasta_id = $idSubasta;

            $Oferta->save();
        }
        redirect(base_url() . 'subasta/subastadetalle/' . $idSubasta, 'refresh');
    }
    
    

}
