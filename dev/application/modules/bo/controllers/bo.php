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
        
         $crud->required_fields('line', 'id_city','id_type');
         $crud->unset_fields('create_date');
         $crud->unset_columns('create_date');
        
         $crud->add_action('Ruta Ida', base_url() . "/assets/front_files/img/add2.png", 'bo/adress_management');
         $crud->add_action('Ruta Vuelta', base_url() . "/assets/front_files/img/add2.png", 'bo/adress_management');
         
         //$crud->add_action('Photos', '', '','ui-icon-image',array($this,'just_a_test'));
         
         //$crud->callback_column('line', array($this, 'rutas'));

        $output = $crud->render();
        $this->_example_output($output);
    }
    
    function rutas($value, $row)
    {
       return "<div style='width:250px;'><div style='width:42px; float:left'>".$value." </div> <div style='width:300px;'>"
               . "<button data-id='".$row->id_transport."' class='modalIda edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary'>"
               . "<span class='ui-button-icon-primary ui-icon ui-icon-document'></span>"
               . "<span class='ui-button-text'> Ruta Ida</span></button>"
               . "<button data-id='".$row->id_transport."' class='modalVuelta edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary'>"
               . "<span class='ui-button-icon-primary ui-icon ui-icon-document'></span>"
               . "<span class='ui-button-text'> Ruta Vuelta</span></button></div></div>";
    }
    
    function loadMap(){
        $this->load->view('maps');
    }
    
    public function adress_management(){
        redirect('maps/demo');
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
        
        $crud->unset_fields('create_date');
        
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
