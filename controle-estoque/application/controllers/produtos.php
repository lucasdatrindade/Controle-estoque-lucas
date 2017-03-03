<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

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

    public function index() {

        $this->load->library('table');
        $data['produtos'] = $this->get_prod_clien->get_produtos();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        
        $this->load->view('produtos_view', $data);
       
        $this->load->view('includes/html_footer');
    }
    
    public function salvar_produto() { //mudei pra teste nova tabela
        $data['nome'] = $this->input->post('nome');
        $data['desc'] = $this->input->post('desc');
        $data['preco'] = $this->input->post('preco');

        if ($this->db->insert('produtos', $data)) {
            redirect('produtos'); //confirmacao nao esta funcionado
        } else {
            redirect('pedidos/2');
        }
    }
    
     public function atualizar_produto($id = null) {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        $this->db->where('id', $id);
        $data['produtos'] = $this->db->get('produtos')->result();
        $this->load->view('atualizar_produto_view', $data);
        
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        $id = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['desc'] = $this->input->post('desc');
        $data['preco'] = $this->input->post('preco');

        $this->db->where('id', $id);
        if ($this->db->update('produtos', $data)) {
            redirect('produtos'); //confirmacao nao esta funcionado
        } else {
            redirect('produtos/6');
        }
    }
    
        public function apagar($id = null) {

        $this->db->where('id', $id);
        if ($this->db->delete('produtos')) {
            redirect('produtos');
        } else {
            redirect('pedidos/4');
        }
    }

}