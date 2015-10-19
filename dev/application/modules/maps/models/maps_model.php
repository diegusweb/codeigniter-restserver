<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MAps_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->CI =& get_instance();
    }

    public function addAddress($data){
         $this->db->insert('address', $data);
         return true;
    }
}

?>