
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class H extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //$this->load->database();
        $this->load->helper('url');
        //$this->layout->setLayout('template-home');
    }

    public function index() {
        $this->load->view('home.php');
    }

   
}
