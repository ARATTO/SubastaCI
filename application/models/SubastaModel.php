<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class SubastaModel extends Eloquent{
    protected $table = 'subasta';
    
    public function producto(){
      return $this->belongsTo('ProductoModel');
    }
}