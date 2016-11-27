<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ProductoModel extends Eloquent{
    protected $table = 'producto';
    
    protected $fillable = [
        'id',
        'nombre',
        'IsLote',
        'foto',
        'TipoProducto_id',
    ];
    
    public function subasta(){
      return $this->hasMany('SubastaModel');
    }
}