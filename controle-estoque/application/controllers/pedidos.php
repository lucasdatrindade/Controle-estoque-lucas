<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('get_prod_clien');
    }

    public function index($indexm = null) {

        $this->load->library('table');
        $this->load->model('get_prod_clien','id');
        
        $data['pedidos'] = $this->id->get_pedidos(); 
        //$data['clientes'] = $this->nome->get_prod_like_c();
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        
        $this->load->view('pedidos_view', $data);
        
        $this->load->view('includes/html_footer');  
    }

    public function salvar() {

        $data['id_p'] = $this->input->post('prod_id');
        $data['id_c'] = $this->input->post('clien_id');

        if ($this->db->insert('pedidos', $data)) {
            redirect('pedidos'); //confirmacao nao esta funcionado
        } else {
            redirect('pedidos/2');
        }
    }

    public function apagar($id = null) {

        $this->db->where('id', $id);
        if ($this->db->delete('pedidos')) {
            redirect('pedidos');
        } else {
            redirect('pedidos/4');
        }
    }

    public function atualizar($id = null) {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        $data['clientes'] = $this->db->get('clientes')->result();
        $data['produtos'] = $this->db->get('produtos')->result();
        $this->db->where('id', $id);
        $data['pedidos'] = $this->db->get('pedidos')->result();
        $this->load->view('atualizar_pedido_view', $data);
        
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        //$this->load->view('aboutus');
        $id = $this->input->post('id');
        $data['id_p'] = $this->input->post('id_p');
        $data['id_c'] = $this->input->post('id_c');

        $this->db->where('id', $id);
        if ($this->db->update('pedidos', $data)) {
            redirect('pedidos'); //confirmacao nao esta funcionado
        } else {
            redirect('pedidos/6');
        }
    }
    
}
