<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Maps extends CI_Controller {

   var $items = [];

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('googlemaps');
        $this->layout->setLayout('template-content');
    }
    
    public function index(){
       $config['center'] = '37.4419, -122.1419';
       
        $config['zoom'] = 'auto';
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '37.429, -122.1419';
        $marker['draggable'] = true;
        $marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();

        $this->layout->view('index', $data);
    }
    
    
    
    public function pushGeo(){
        $x = "";
        array_push($this->items, $x);
    }
}    