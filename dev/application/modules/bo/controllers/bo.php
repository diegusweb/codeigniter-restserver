<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bo extends CI_Controller {

    private $limit = 50;

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->layout->setLayout('template-content');
        $this->load->library('table');
    }

    public function _example_output($output = null) {
        //$this->verifyLogin();
        $this->layout->view('index.php', $output);
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function city_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('city');

        $output = $crud->render();
        $this->_example_output($output);
    }
    
    public function transport_management(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('transport');
        $crud->set_relation('id_city', 'city', 'name');
        $crud->set_relation('id_type', 'type', 'name');
        
         $crud->add_action('Ruta', base_url() . "/assets/front_files/img/add2.png", 'bo/route_management');

        $output = $crud->render();
        $this->_example_output($output);
    }
    
    public function route($id_transport = null){
        if (!empty($id_transport))
            $this->session->set_userdata('transport', $id_transport);
        
         redirect('bo/route_management');
    }
    
    public function route_management($id_transport = null){
        
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('address');
        if($id_transport != null    )
            $crud->where('id_transport',$id_transport);
        
        $crud->required_fields('address', 'lat','lng');

        $output = $crud->render();
        $this->_example_output($output);
    }

    /*     * *********************************************************************** */

    public function verifyLogin() {
        $user_id = $this->session->userdata('username');
        $rol = $this->session->userdata('rol');
        if (empty($user_id) && empty($rol)) {
            redirect(base_url() . "blogin", 'outside');
        } else {
            if ($rol != "Administrador") {
                redirect(base_url() . "blogin", 'outside');
            }
        }
    }

}
