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
        $this->load->model('maps_model');
    }
    
    public function index(){
      $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
                var mapCentre = map.getCenter();
                marker_0.setOptions({
                        position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
                });
        }centreGot = true;';
        $this->googlemaps->initialize($config);

        $marker = array();
        //$marker['position'] = '37.429, -122.1419';
        $marker['draggable'] = true;
        $config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
        $marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();

        $this->layout->view('index', $data);
    }
    
    public function demo(){
        $this->layout->view('index2');
    }
    
    public function saveRoute(){
        $data = json_decode($_POST['data']);
        //print_r($data);
        

       foreach ($data as $array) {
            //echo $array[0]->name;
            
            $dataa = array(
                'id_transport' => 1,
                'name' => $array[0]->name.", ".$array[0]->city.", ".$array[0]->country,
                'address' => $array[0]->name,
                'lat' => $array[0]->lat,
                'lng' => $array[0]->lng,
                'sense_street' => 1,
            );
            
            $this->maps_model->addAddress($dataa);
                
            
            
        }


    }
    
}    