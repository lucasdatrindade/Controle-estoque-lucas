<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


	public function index()
	{
            $produtos['produtos'] = $this->db->get('produtos')->result();
            
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            
            //$this->load->view('add_association_view',$term_descritor);
            $this->load->view('add_produto_view',$produtos);
          
            $this->load->view('includes/html_footer');
        }
    
}
