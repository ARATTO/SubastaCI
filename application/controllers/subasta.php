<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Support\Facades\DB;

class Subasta extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {

        //Datos Estandar
        $datos['contenido'] = 'subastas_activas'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Subastas';

        $producto = ProductoModel::all();
        $subasta = SubastaModel::all();
        $catalogo_subasta = CatalogoSubastaModel::all();

        $datos['productos'] = $producto;
        $datos['subastas'] = $subasta;
        $datos['catalogo_subastas'] = $catalogo_subasta;


        /*
          $query = CatalogoSubastaModel::Join('subasta', 'catalogosubasta.Subasta_id', '=', 'subasta.id')
          ->get();

          $datos['query'] = $query;
         * */


        $this->load->view('template/template_home', $datos);
    }

    function portafolio() {
        //Datos Estandar
        $datos['contenido'] = 'cliente/portafolio'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Portafolio';

        $this->load->view('template/template_home', $datos);
    }

    function subastadetalle() {
        $idUser = $this->session->userdata('id');
        $idSubasta = $this->uri->segment(3);

        $PruebaJoin = SubastaModel::join('producto', 'subasta.Producto_id', '=', 'producto.id')
                ->join('catalogosubasta', 'catalogosubasta.Subasta_id', '=', 'subasta.id')
                ->select('subasta.*', 'producto.*', 'catalogosubasta.*')
                ->get();
        
        /*
        $PruebaJoin = DB::select( DB::raw("SELECT subasta.* , catalogosubasta.* FROM subasta
          INNER JOIN catalogosubasta ON catalogosubasta.Subasta_id = subasta.id
          "));
        */
        $datos['PruebaJoin'] = $PruebaJoin;
        //Datos Estandar
        $datos['contenido'] = 'subasta_detalle'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Subasta #' . $idSubasta;

        $datos['idSubasta'] = $idSubasta;


        $this->load->view('template/template_home', $datos);
    }

}
