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

        //Datos Estandar
        $datos['contenido'] = 'oferta'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Oferta';
        $datos['subasta'] = $subasta;
        
        //Seleccionde Rol
        $this->load->view('template/template_oferta', $datos);

    }

}
