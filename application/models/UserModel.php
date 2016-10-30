<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserModel extends /*CI_Model*/Eloquent{
    protected $table = 'users';
    
    function listaUser(){
        $consulta = $this->db->get('users');
        
        return $consulta->result();
    }
}