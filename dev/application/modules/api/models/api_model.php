<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->CI =& get_instance();
    }

    public function getListTransport($city) {
        $query = "SELECT tra.id_transport, tra.line, ci.name FROM `transport` As tra LEFT JOIN type AS ty ON ty.id_type = tra.id_type
                LEFT JOIN city AS ci ON ci.id_city = tra.id_city WHERE ci.name='" . $city . "'";

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }
    
    public function getListFindTransport($city) {
        $query = "SELECT tra.id_transport, tra.line, ci.name FROM `transport` As tra LEFT JOIN type AS ty ON ty.id_type = tra.id_type
                LEFT JOIN city AS ci ON ci.id_city = tra.id_city WHERE tra.id_transport=" . $city;

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }
    
    public function getRouteTransport($id) {
        $query = "SELECT * FROM address WHERE id_transport=" . $id . "";

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }
    
    public function getFindTransport__($citya, $latDesteny, $lonDesteny, $latCurrent,$lonCurrent){
        $distance = 0.1;
        $box = $this->getBoundaries($latDesteny, $lonDesteny, $distance);
        $boxCurrent = $this->getBoundaries($latCurrent, $lonCurrent, $distance);
        
        $city = $this->getCity($citya);
        //$query = "SELECT id_address, id_transport, address, (6371 * ACOS( SIN(RADIANS(lat)) * SIN(RADIANS(".$latDesteny.")) + COS(RADIANS(lng - ".$lonDesteny.")) * COS(RADIANS(lat)) * COS(RADIANS(".$latDesteny.")) ) ) AS distance FROM address  HAVING distance < 0.2 /* 1 KM a la redonda */ ORDER BY distance ASC ";
        $query = 'SELECT id_address, id_transport, address, (6371 * ACOS( 
                                            SIN(RADIANS(lat)) 
                                            * SIN(RADIANS(' . $latCurrent . ')) 
                                            + COS(RADIANS(lng - ' . $lonCurrent . ')) 
                                            * COS(RADIANS(lat)) 
                                            * COS(RADIANS(' . $latCurrent . '))
                                            )
                               ) AS distance
                     FROM (SELECT id_address, id_transport, address, lat, lng, (6371 * ACOS( 
                                            SIN(RADIANS(lat)) 
                                            * SIN(RADIANS(' . $latDesteny . ')) 
                                            + COS(RADIANS(lng - ' . $lonDesteny . ')) 
                                            * COS(RADIANS(lat)) 
                                            * COS(RADIANS(' . $latDesteny . '))
                                            )
                               ) AS distance
                     FROM address
                     WHERE id_city= '.$city.' AND (lat BETWEEN ' . $box['min_lat']. ' AND ' . $box['max_lat'] . ')
                     AND (lng BETWEEN ' . $box['min_lng']. ' AND ' . $box['max_lng']. ')
                     HAVING distance  < ' . $distance . '                                       
                     ORDER BY distance ASC )           
                     WHERE id_city= '.$city.' AND (lat BETWEEN ' . $boxCurrent['min_lat']. ' AND ' . $boxCurrent['max_lat'] . ')
                     AND (lng BETWEEN ' . $boxCurrent['min_lng']. ' AND ' . $boxCurrent['max_lng']. ')
                     HAVING distance  < ' . $distance . '                                       
                     ORDER BY distance ASC ';
        
        
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }
    
    public function getFindTransport($citya, $latDesteny, $lonDesteny, $latCurrent,$lonCurrent){
        $distance = 0.1;
        $box = $this->getBoundaries($latDesteny, $lonDesteny, $distance);
        $boxCurrent = $this->getBoundaries($latCurrent, $lonCurrent, $distance);
        
        $city = $this->getCity($citya);
        //$query = "SELECT id_address, id_transport, address, (6371 * ACOS( SIN(RADIANS(lat)) * SIN(RADIANS(".$latDesteny.")) + COS(RADIANS(lng - ".$lonDesteny.")) * COS(RADIANS(lat)) * COS(RADIANS(".$latDesteny.")) ) ) AS distance FROM address  HAVING distance < 0.2 /* 1 KM a la redonda */ ORDER BY distance ASC ";
        
        //$querySub = "SELECT id_address, id_transport, address, lat, lng, (6371 * ACOS( SIN(RADIANS(lat)) * SIN(RADIANS(".$latDesteny.")) + COS(RADIANS(lng - ".$lonDesteny.")) * COS(RADIANS(lat)) * COS(RADIANS(".$latDesteny.")) ) ) AS distances FROM address  HAVING distances < 0.2 /* 1 KM a la redonda */ ORDER BY distances ASC ";
        
        //$query = "SELECT t.id_address, t.id_transport, t.address, (6371 * ACOS( SIN(RADIANS(t.lat)) * SIN(RADIANS(".$latCurrent.")) + COS(RADIANS(t.lng - ".$lonCurrent.")) * COS(RADIANS(t.lat)) * COS(RADIANS(".$latCurrent.")) ) ) AS distance FROM (".$querySub.") as t  HAVING distance < 0.2 /* 1 KM a la redonda */ ORDER BY distance ASC ";
        
        
        
        $query = 'SELECT *, (6371 * ACOS( SIN(RADIANS(lat))* SIN(RADIANS(' . $latDesteny . '))+ COS(RADIANS(lng - ' . $lonDesteny . ')) * COS(RADIANS(lat))* COS(RADIANS(' . $latDesteny . ')))) AS distance FROM address WHERE (lat BETWEEN ' . $box['min_lat']. ' AND ' . $box['max_lat'] . ') AND (lng BETWEEN ' . $box['min_lng']. ' AND ' . $box['max_lng']. ') HAVING distance  < ' . $distance . ' ORDER BY distance ASC ';
        
        
        
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
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

    public function getBoundaries($lat, $lng, $distance = 1, $earthRadius = 6371)
    {
        $return = array();

        // Los angulos para cada dirección
        $cardinalCoords = array('north' => '0',
                                'south' => '180',
                                'east' => '90',
                                'west' => '270');
        $rLat = deg2rad($lat);
        $rLng = deg2rad($lng);
        $rAngDist = $distance/$earthRadius;
        foreach ($cardinalCoords as $name => $angle)
        {
            $rAngle = deg2rad($angle);
            $rLatB = asin(sin($rLat) * cos($rAngDist) + cos($rLat) * sin($rAngDist) * cos($rAngle));
            $rLonB = $rLng + atan2(sin($rAngle) * sin($rAngDist) * cos($rLat), cos($rAngDist) - sin($rLat) * sin($rLatB));
             $return[$name] = array('lat' => (float) rad2deg($rLatB), 
                                    'lng' => (float) rad2deg($rLonB));
        }
        return array('min_lat'  => $return['south']['lat'],
                     'max_lat' => $return['north']['lat'],
                     'min_lng' => $return['west']['lng'],
                     'max_lng' => $return['east']['lng']);
    }

}
