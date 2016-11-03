<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Subasta extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        
        //Datos Estandar
        $datos['contenido'] = 'subastas_activas'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Subastas';

        $this->load->view('template/template_home', $datos);
        
    }
    
    function portafolio(){
        //Datos Estandar
        $datos['contenido'] = 'cliente/portafolio'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Portafolio';

        $this->load->view('template/template_home', $datos);
    }
    
    function subastadetalle(){
        //Datos Estandar
        $datos['contenido'] = 'subasta_detalle'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Subasta #1234';

        $this->load->view('template/template_home', $datos);
    }

}
