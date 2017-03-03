<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {


    public function index()
    {
        $clientes['clientes'] = $this->db->get('clientes')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        $this->load->view('add_cliente_view',$clientes);
        $this->load->view('includes/html_footer');
    }   
        
}
