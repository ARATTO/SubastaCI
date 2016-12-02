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


        $Subastas = SubastaModel::join('producto', 'subasta.Producto_id', '=', 'producto.id')
                ->join('catalogosubasta', 'catalogosubasta.Subasta_id', '=', 'subasta.id')
                ->join('tipoproducto', 'tipoproducto.id', '=', 'producto.TipoProducto_id')
                ->select('subasta.*', 'producto.*', 'catalogosubasta.*', 'producto.nombre as nombreProducto', 'catalogosubasta.Usuario_id as Propietario', 'tipoproducto.nombre as TipoProductoNombre')
                ->where('catalogosubasta.IsActiva', 1)
                ->get();
        $datos['CatalogoSubastas'] = $Subastas;

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


        $idSubasta = $this->uri->segment(3);
        $this->input->cookie('idSubasta', $idSubasta);

        $SubastaDetalle = SubastaModel::join('producto', 'subasta.Producto_id', '=', 'producto.id')
                ->join('catalogosubasta', 'catalogosubasta.Subasta_id', '=', 'subasta.id')
                ->join('usuario', 'catalogosubasta.Usuario_id', '=', 'usuario.id')
                ->join('inscripcion', 'catalogosubasta.id', '=', 'inscripcion.CatalogoSubasta_id')
                ->join('tipoproducto', 'tipoproducto.id', '=', 'producto.TipoProducto_id')
                ->select('subasta.*', 'producto.*', 'catalogosubasta.*', 'usuario.*', 'inscripcion.*', 'producto.nombre as nombreProducto', 'inscripcion.Usuario_id as UsuarioInscrito', 'catalogosubasta.Usuario_id as Propietario', 'tipoproducto.nombre as TipoProductoNombre')
                ->where('subasta.id', $idSubasta)
                ->first();

        $Inscritos = SubastaModel::join('producto', 'subasta.Producto_id', '=', 'producto.id')
                ->join('catalogosubasta', 'catalogosubasta.Subasta_id', '=', 'subasta.id')
                ->join('usuario', 'catalogosubasta.Usuario_id', '=', 'usuario.id')
                ->join('inscripcion', 'catalogosubasta.id', '=', 'inscripcion.CatalogoSubasta_id')
                ->select('inscripcion.*', 'inscripcion.Usuario_id as UsuarioInscrito')
                ->where('subasta.id', $idSubasta)
                ->get();

        date_default_timezone_set('America/El_Salvador');

        $fechaFinal = new DateTime($SubastaDetalle->fechaFinal);
        $ahora = new DateTime(date('Y-m-d H:i:s'));

        $diferencia = $ahora->diff($fechaFinal);
        $restante = $diferencia->format('%R %D Dias : %H Horas : %i Minutos : %s Segundos  ');

        
        $dias = (int) $diferencia->format('%d');
        $horas = (int) $diferencia->format('%h');
        $minutos = (int) $diferencia->format('%i');
        $segundos = (int) $diferencia->format('%s');
        
        $sentido = (int) $diferencia->format('%R' . 1);
        
        if ($sentido > 0) {
            $Sdias = $dias * 24 * 60 * 60;
            $Shoras = $horas * 60 * 60;
            $Sminutos = $minutos * 60;
            $Ssegundos = $Sdias + $Shoras + $Sminutos + $segundos;
        }else{
            $Ssegundos = -1;
        }
        
        
        if ($Ssegundos == -1 ) {
            //Temrino Subasta 0
            $subasta = SubastaModel::find($idSubasta);
            $subasta->FINALIZADA = 1;
            $subasta->save();
            
            redirect(base_url().'subasta' ,'refresh');
            
        } 

        
        
        $datos['segundos'] = $Ssegundos;
        $datos['restante'] = $restante;
        $datos['Inscritos'] = $Inscritos;

        $datos['SubastaDetalle'] = $SubastaDetalle;
        //Datos Estandar
        $datos['contenido'] = 'subasta_detalle'; //contiene nombre pagina contenido principal
        $datos['titulo'] = 'SubastaSV | Subasta #' . $idSubasta;

        $this->load->view('template/template_home', $datos);
    }

}
