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
    
    public function getRouteTransport($id) {
        $query = "SELECT * FROM address WHERE id_transport=" . $id . "";

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }
    
    
    public function getFindTransport($data){
        $query = "SELECT id_address, id_transport, address, (6371 * ACOS( SIN(RADIANS(lat)) * SIN(RADIANS(".$data['latDesteny'].")) + COS(RADIANS(lng - ".$data['lonDesteny'].")) * COS(RADIANS(lat)) * COS(RADIANS(".$data['latDesteny'].")) ) ) AS distance FROM address HAVING distance < 0.2 /* 1 KM a la redonda */ ORDER BY distance ASC ";
        
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }

    public function getQuizId($id, $page) {
        $ids = $this->session->userdata('testquiz');

        $page = (int) (empty($page) ? 1 : $page);
        $rp = (int) (empty($rp) ? 200 : $rp);
        $start = (($page - 1) * $rp);

        if ($this->payment($this->session->userdata('id_users')) > 0) {
            $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section
WHERE s.id_section=" . $id . " AND qu.id_quizes=" . $ids . " Limit " . $start . ", 200";
        } else {
            $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section
WHERE s.id_section=" . $id . " AND qu.id_quizes=" . $ids . " LIMIT 50";
        }

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }

        return null;
    }

    public function getQuizIdSimulate($id) {
        $ids = $this->session->userdata('testquiz');
        $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
            FROM `questions` AS q
            LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
            LEFT JOIN section AS s ON s.id_section = q.id_section WHERE qu.id_quizes=" . $ids . " Limit 100";

        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;
    }

    

    

    public function insertUser($data) {
        $this->db->insert('users', $data);
        return true;
    }

    public function insertHistory($data) {
        $this->db->insert('history', $data);
        return true;
    }

    public function verifyLog($data) {
        $query = "SELECT * FROM log WHERE id_users='" . $data['id_users'] . "' AND id_quizes='" . $data['id_quizes'] . "' AND id_select='" . $data['id_select'] . "'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $result = $this->db->query($query)->result_array();
            return $result[0]['current_page'];
        }
        return 0;
    }

    public function insertLog($data) {

        $query = "SELECT * FROM log WHERE id_users='" . $data['id_users'] . "' AND id_quizes='" . $data['id_quizes'] . "' AND id_select='" . $data['id_select'] . "'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            $this->db->where('id_users', $data['id_users']);
            $this->db->update('log', $data);
            return true;
        } else {
            $this->db->insert('log', $data);
            return true;
        }
    }

    public function verifySession($id) {
        $query = "SELECT * FROM authtoken WHERE token='" . $se . "'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return true;
        }
        return false;
    }

    public function payment($id) {
        $query = "SELECT * FROM payment WHERE id_users=" . $id . " AND pay_status=1 AND pagado=1";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

}
