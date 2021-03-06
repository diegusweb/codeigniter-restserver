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
        $this->load->model('bo_model');
    }

    public function _example_output($output = null) {
        $this->verifyLogin();
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
    
    public function user_management(){
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('user');

        $crud->field_type('rol','dropdown',
            array('Admin' => 'Admin', 'User' => 'User'));

        $crud->field_type('city','dropdown',
            array('Cochabamba' => 'Cochabamba', 'La paz' => 'La paz','Santa cruz' => 'Santa cruz' , 'Potosi' => 'Potosi'));
        
                $crud->unset_fields('create_date');
        $crud->unset_columns('create_date', 'password');
        
        //$crud->callback_before_insert(array($this, 'encrypt_password_callback'));

        $output = $crud->render();
        $this->_example_output($output);
    }
    
    public function encrypt_password_callback($post_array) {
        $cost = 10;
        $salt = uniqid(mt_rand());


        if (!empty($post_array['password'])) {
            $post_array['password'] = hmac_hash("sha256", $post_array, $salt);
        } else {
            unset($post_array['password']);
        }

        return $post_array;
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
         
         $crud->add_action('Ruta Ida', '', '','ui-icon-image',array($this,'rutaIda'));
        $crud->add_action('Ruta Vuelta', '', '','ui-icon-image',array($this,'rutaVuelta'));
        
         //$crud->add_action('Ruta Ida', base_url() . "/assets/front_files/img/add4.png", 'maps/newRoute/1');
         //$crud->add_action('Ruta Vuelta', base_url() . "/assets/front_files/img/add5.png", 'maps/newRoute/2');
	$crud->add_action('Ruta mapa', base_url() . "/assets/front_files/img/map-20.png", 'maps/viewRoute');


        $output = $crud->render();
        $this->_example_output($output);
    }
	
    function rutaIda($primary_key , $row){
        if(!$this->bo_model->getRouteTransport($row->id_transport))
            return base_url()."maps/newRoute/1/".$row->id_transport;
        return null;
    }
    
    function rutaVuelta($primary_key , $row){
        if(!$this->bo_model->getRouteTransport($row->id_transport))
            return base_url()."maps/newRoute/2/".$row->id_transport;
        return null;
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
        if (empty($user_id)) {
            redirect(base_url() . "login", 'outside');
        }
        /*if ($this->session->userdata('rol') != "Administrador") {
            redirect(base_url() . "login", 'outside');
        }*/
    }

}
