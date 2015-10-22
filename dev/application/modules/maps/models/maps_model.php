<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Maps_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->CI =& get_instance();
    }

    public function addAddress($data){
         $this->db->insert('address', $data);
         return true;
    }
    
    public function getCity($name){
        $query = "SELECT id_city FROM city WHERE name='" . ucwords($name) . "'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $result = $this->db->query($query)->result_array();
            return $result[0]['id_city'];
        }
        return 0;
    }
}

?>