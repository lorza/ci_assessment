<?php
    class Users_model extends CI_Model {
        public function checkLogin ($username, $pass) {
            // * Retrieve user password from database
            $this->load->database();
            $user = $this->db->query("SELECT username, password FROM Users WHERE username='$username'");
            return $user->result();
        }
    }
?>