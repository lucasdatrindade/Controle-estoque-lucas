<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

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
        $clientes['clientes'] = $this->get_prod_clien->get_clientes();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        
        $this->load->view('clientes_view', $clientes);
       
        $this->load->view('includes/html_footer');
    }
    
    public function salvar_cliente() {

        $data['nome'] = $this->input->post('nome_c');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');

        if ($this->db->insert('clientes', $data)) {
            redirect('clientes'); //confirmacao nao esta funcionado
        } else {
            redirect('clientes/2');
        }
    } 

    public function atualizar_cliente($id = null) {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        $this->db->where('id', $id);
        $data['clientes'] = $this->db->get('clientes')->result();
        $this->load->view('atualizar_cliente_view', $data);
        
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        $id = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $data['telefone'] = $this->input->post('telefone');

        $this->db->where('id', $id);
        if ($this->db->update('clientes', $data)) {
            redirect('clientes'); //confirmacao nao esta funcionado
        } else {
            redirect('clientes/6');
        }
    }
    
    public function apagar($id = null) {

        $this->db->where('id', $id);
        if ($this->db->delete('clientes')) {
            redirect('clientes');
        } else {
            redirect('pedidos/4');
        }
    }

}