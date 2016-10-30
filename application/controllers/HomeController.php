<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    function index(){
        
       $datos['users'] = UserModel::all();
       
       $this->load->view('template/partials/header');
       $this->load->view('template/partials/nav');
       $this->load->view('front_end/index', $datos);
       $this->load->view('template/partials/footer');
       $this->load->view('template/partials/scriptImport');
       
       //$this->load->view('index', $datos);
        
    }
}
