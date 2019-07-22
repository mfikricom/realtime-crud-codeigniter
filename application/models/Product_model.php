<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    function get_product(){
        $query = $this->db->get('product');
        return $query;
    }

    function insert_product($product_name,$product_price){
        $data = array(
            'product_name' => $product_name,
            'product_price' => $product_price
        );
        $this->db->insert('product', $data);
    }

    function update_product($product_id,$product_name,$product_price){
        $this->db->set('product_name', $product_name);
        $this->db->set('product_price', $product_price);
        $this->db->where('product_id', $product_id);
        $this->db->update('product');
    }
    
    function delete_product($product_id){
        $this->db->delete('product', array('product_id' => $product_id));
    }
}