<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authentication {

    var $_user_id = 0;
    var $_login = "";
    var $_username = "";
    var $_password = "";
    var $_rol = "";
    //var $_roles = "";
    var $_auth = FALSE;

    function Authenticationfe($auto = TRUE) {
        if ($auto) {
            $CI = & get_instance();
            if ($this->login($CI->session->userdata('username'), $CI->session->userdata('id_users'))) {
                $this->_user_id = $CI->session->userdata('id_users');
                $this->_username = $CI->session->userdata('username');
                //$this->_password = $CI->session->userdata('password');
                //$this->_rol = $CI->session->userdata('rol');
            }
        }
    }

    function getId() {
        return $this->_user_id;
    }

    function getLogin() {
        return $this->_login;
    }

    function getPassword() {
        return $this->_password;
    }

    function getRol() {
        return $this->_rol;
    }

    //function getRol(){return $this->_roles;}

    function login($username = "", $password = "", $rol="") {
        if (empty($username) || empty($password))
            return FALSE;

        $CI = & get_instance();


        $sql = "SELECT * FROM users WHERE email='" . $username . "' AND rol='".$rol."'";
        $query = $CI->db->query($sql);
        //login ok   AND password='" . $passworda . "'

        
        if ($query->num_rows() == 1) {
            $row = $query->row();
            
            if (password_verify($password, $row->password)){
                $CI->session->set_userdata('id_users', $row->id_users);
                $this->_user_id = $row->id_users;

                $CI->session->set_userdata('username', $row->name . " " . $row->surname);
                $this->_username = $row->name . " " . $row->surname;
                
                $CI->session->set_userdata('email', $row->email);
                $this->_email = $row->email;

                //$CI->session->set_userdata('password', $password);
                //$this->_password = $row->PASSWORD;
                $CI->session->set_userdata('rol',  $row->rol);
                //$this->_rol= $row->rol;

                $this->_auth = TRUE;
                return TRUE;
            }
            else{
                $this->_auth = FALSE;
                $this->logout();

                return FALSE;
            }

            
            
        } else {
            $this->_auth = FALSE;
            $this->logout();

            return FALSE;
        }
    }

    function logout() {
        $CI = & get_instance();
        $CI->session->sess_destroy();
        $this->_auth = FALSE;
    }

    function check($level = 0, $strict = TRUE) {
        if (!$this->_auth)
            return FALSE;

        if ($strict) {
            if ($level == $this->_level)
                return TRUE;
            else
                return FALSE;
        }
        else {
            if ($level <= $this->_level)
                return TRUE;
            else
                return FALSE;
        }
    }

    public function encrypt_password_callback($post_array) {
        $cost = 10;
        //$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        //$salt = sprintf("$2a$%02d$", $cost) . $salt;


        // Gives me my random key. My salt generator.
        $salt = uniqid(mt_rand());

        // Then the encryption. I use a HMAC hash.
        $encrypted = hmac_hash("sha256", $post_array, $salt);
        
        return $encrypted;
    }

}

?>