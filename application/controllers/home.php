<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    function index(){
       //Datos Estandar
       $datos['contenido'] = 'index'; //contiene nombre pagina contenido principal
       $datos['titulo'] = 'Subasta HOME';
       //Datos Dinamicos
       $datos['users'] = UsuarioModel::all();
       /*
       $datos['users'] = UsuarioModel::where("correo","=","dario.motto@hotmail.com")
                                     ->where("password", "=", "12345")
                                     ->first();
       */
       //$datos['consulta'] = UsuarioModel::where("correo","=","dario.motto@hotmail.com")->first();
        //$datos['consulta'] = UsuarioModel::where("correo","=","dario.motto@hotmail.com")->first();
        
        
       
       $this->load->view('template/template_home', $datos);
       
    }
}
