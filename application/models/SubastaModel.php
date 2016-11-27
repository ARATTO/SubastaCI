<?php

use Illuminate\Database\Eloquent\Model as Eloquent;


class SubastaModel extends Eloquent{
    protected $table = 'subasta';
    
    protected $fillable = [
        'id',
        'fechaSubasta',
        'precioSujerido',
        'tiempoDuracionMin',
        'descripcion',
        'Producto_id',
    ];


    public function producto(){
      return $this->belongsToMany('ProductoModel');
    }
}