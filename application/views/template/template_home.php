<?php

$this->load->view('template/partials/header');

switch ($this->session->userdata('tipoUsuario')) {
    case 'Administrador':
        $this->load->view('template/partials/nav');
        break;
    case 'Cliente':
        $this->load->view('template/partials/nav_cliente');
        break;
}
 $this->load->view('front_end/' . $contenido);
 $this->load->view('template/partials/footer');
 $this->load->view('template/partials/scriptImport');
    