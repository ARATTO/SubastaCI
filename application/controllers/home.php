<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        
        //Datos Estandar
        $datos['contenido'] = 'index'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Inicio';
        
        //Datos Dinamicos
        $datos['users'] = UsuarioModel::all();
        
        //Seleccionde Rol
        $this->load->view('template/template_home', $datos);

    }

}
