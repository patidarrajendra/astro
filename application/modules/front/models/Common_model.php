<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Common_model extends CI_Model
{
    public function find_records($table,$str){
        $this->db->select('id, name');
        $this->db->from($table);
        $this->db->where_in('id',$str);
        $query = $this->db->get();
        return $query->result();
    }

    function get_all_product(){
        $result=$this->db->get('products');
        return $result;
    }

}