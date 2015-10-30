<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->CI =& get_instance();
    }
    
     public function getRouteTransport($id) {
        $query = "SELECT * FROM address WHERE id_transport=" . $id . "";

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return true;
        }
        return false;
    }
}