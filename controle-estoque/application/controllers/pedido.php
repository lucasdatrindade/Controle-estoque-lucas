<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('get_prod_clien');
    }
	public function index()
	{
            $pedido['clientes'] = $this->db->get('clientes')->result();
            $pedido['produtos'] = $this->db->get('produtos')->result();
            
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('add_pedido_view',$pedido);
            $this->load->view('includes/html_footer');
        }
     
}

