<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        
        //Datos Estandar
        $datos['contenido'] = 'admin/clientes'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Clientes';

        $this->load->view('template/template_home', $datos);
        
    }

}
