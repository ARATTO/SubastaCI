<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    function index(){
       //Datos Estandar
       $datos['contenido'] = 'index'; //contiene nombre pagina contenido principal
       $datos['titulo'] = 'Subasta HOME';
       //Datos Dinamicos
       $datos['users'] = UsuarioModel::all();
       
       
       $this->load->view('template/template_home', $datos);
       
    }
}
