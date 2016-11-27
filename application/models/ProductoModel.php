<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ProductoModel extends Eloquent{
    protected $table = 'producto';
    
    public function subasta(){
      return $this->hasMany('SubastaModel');
    }
}