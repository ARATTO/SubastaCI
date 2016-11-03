<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    function index(){
       
        $this->load->view('front_end/login');
        
    }
    function entrar(){
        //$correo = $this->security->xss_clean(script_tags($this->input->post('correo')));
        //$password = $this->security->xss_clean(script_tags($this->input->post('password')));
        
        $correo = $this->input->post('correo');
        $password = $this->input->post('password');
        
        $resultado = $this->log($correo,$password);
        
        if($resultado){
            redirect(base_url().'home' ,'refresh');
        }else{
            redirect(base_url(),'refresh');
        }
        
    }
    
    function log($correo, $password){
        
        $consulta = UsuarioModel::where("correo","=",$correo)
                                ->where("password","=",$password)
                                ->first();
        
        $tipoUser = TipoUsuarioModel::find($consulta->TipoUsuario_id);
        
        if(count($consulta) > 0){
            $data = array(
                'nombre' => $consulta->nombre, 
                'tipoUsuario' => $tipoUser->nombre,
            );
            $this->session->set_userdata($data);
            
            return TRUE;
        }else{
            if($this->check_email($correo)){
                $this->session->set_flashdata("error","Contraseña Incorecta");
            }else{
                $this->session->set_flashdata("error","Email Incorrecto");
            }
            return FALSE;
        }
        
    }
    
    
    function check_email($correo){
        $consultaCorreo = UsuarioModel::where("correo","=",$correo)->first();
        
        if(count($consultaCorreo) > 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url() ,'refresh');
    }
    
 
}