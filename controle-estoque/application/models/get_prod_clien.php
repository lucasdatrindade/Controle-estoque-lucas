<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Get_prod_clien extends CI_Model {

    function get_produtos() {
        $query = $this->db->get('produtos');
        return $query->result();
    }
    
    function get_clientes() {
        $query = $this->db->get('clientes');
        return $query->result();
    }
    
    function get_pedidos(){
        $this->db->select('pedidos.*, clientes.nome as nome_c, produtos.nome as nome_p');
        $this->db->from('pedidos');
        $this->db->join('clientes', 'clientes.id = pedidos.id_c');
        $this->db->join('produtos', 'produtos.id = pedidos.id_p');
        $query = $this->db->get();
        return $query->result();
    }
  
}
