<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Api_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->CI =& get_instance();
    }

    /*public function getQuiz() {
        $id = $this->session->userdata('testquiz');
        if($this->payment($this->session->userdata('id_users')) > 0){
            $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section WHERE qu.id_quizes=".$id." Limit 200";
        }
        else{
             $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section WHERE qu.id_quizes=".$id." Limit 5";
        }
       
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
         return null;
    }*/
	
	public function getListTransport($city) {
        $query = "SELECT tra.id_transport, tra.line, ci.name FROM `transport` As tra LEFT JOIN type AS ty ON ty.id_type = tra.id_type
                LEFT JOIN city AS ci ON ci.id_city = tra.id_city WHERE ci.name='".$city."'";
       
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
         return null;
    }

    public function getQuizId($id, $page) {
         $ids = $this->session->userdata('testquiz');

	    $page = (int)(empty($page) ? 1 : $page);
        $rp = (int)(empty($rp) ? 200 : $rp);
        $start = (($page-1) * $rp);
		
        if($this->payment($this->session->userdata('id_users')) > 0){
            $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section
WHERE s.id_section=" . $id." AND qu.id_quizes=".$ids." Limit ".$start.", 200";
        }
        else{
            $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
FROM `questions` AS q
LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
LEFT JOIN section AS s ON s.id_section = q.id_section
WHERE s.id_section=" . $id." AND qu.id_quizes=".$ids." LIMIT 50";
        }
        
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        
         return null;
    }
    
    public function getQuizIdSimulate($id){
        $ids = $this->session->userdata('testquiz');
        $query = "SELECT  qu.quiz_name, q.id_questions, q.id_section, q.question_text, q.question_point, s.name_section
            FROM `questions` AS q
            LEFT JOIN quizes AS qu ON qu.id_quizes = q.id_quizes
            LEFT JOIN section AS s ON s.id_section = q.id_section WHERE qu.id_quizes=".$ids." Limit 100";
        
        $results = $this->db->query($query);
        if ($results->num_rows() > 0) {
            return $results->result();
        }
        return null;

    }

    public function getAnswers($id) {
        $query = "SELECT a.id_questions, a.id_answers, a.answer_num, a.answer_text_1, a.answer_text_2,
a.answer_text_3,a.answer_text_4,a.answer_text_5,a.answer_text_6, a.correct_answer
FROM `answers` AS a WHERE a.id_questions =" . $id;
        $results = $this->db->query($query);
        $a = array();
        $b = array();
        $d = array();
        $c = array();

        if ($results->num_rows() > 0) {
            //return $results->result();

            foreach ($results->result() as $row) {

                ///$b["id_answers"] = (int)$row->id_answers;
                //$b["id_questions"] = (int)$row->id_questions;
                //$b["answer_num"] = (int)$row->answer_num;
                //$b["correct_answer"] = (int)$row->correct_answer;

                if ($row->answer_text_1 != null) {
                    $c["Id"] = 1;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_1;
                    $c["IsAnswer"] = (1 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }

                if ($row->answer_text_2 != null) {
                    $c["Id"] = 2;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_2;
                    $c["IsAnswer"] = (2 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }

                if ($row->answer_text_3 != null) {
                    $c["Id"] = 3;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_3;
                    $c["IsAnswer"] = (3 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }

                if ($row->answer_text_4 != null) {
                    $c["Id"] = 4;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_4;
                    $c["IsAnswer"] = (4 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }

                if ($row->answer_text_5 != null) {
                    $c["Id"] = 5;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_5;
                    $c["IsAnswer"] = (5 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }

                if ($row->answer_text_6 != null) {
                    $c["Id"] = 6;
                    $c["QuestionId"] = (int) $row->id_questions;
                    $c["Name"] = $row->answer_text_6;
                    $c["IsAnswer"] = (6 == $row->correct_answer) ? true : false;

                    array_push($d, $c);
                }



                //$b = $d;


                array_push($a, $d);
            }


            return $this->twodshuffle($d);
            //return $d;
        }
    }

    function custom_shuffle($my_array = array()) {
        $copy = array();
        while (count($my_array)) {
            // takes a rand array elements by its key
            $element = array_rand($my_array);
            // assign the array and its value to an another array
            $copy[$element] = $my_array[$element];
            //delete the element from source array
            unset($my_array[$element]);
        }
        return $copy;
    }

    function twodshuffle($array) {
        // Get array length
        $count = count($array);
        // Create a range of indicies
        $indi = range(0, $count - 1);
        // Randomize indicies array
        shuffle($indi);
        // Initialize new array
        $newarray = array($count);
        // Holds current index
        $i = 0;
        // Shuffle multidimensional array
        foreach ($indi as $index) {
            $newarray[$i] = $array[$index];
            $i++;
        }
        return $newarray;
    }

    public function insertUser($data) {
        $this->db->insert('users', $data);
        return true;
    }
    
    public function insertHistory($data) {
        $this->db->insert('history', $data);
        return true;
    }
	
	public function verifyLog($data){
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
        }
        else{
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
        }
        else{
            return 0;
        }
    }

}
