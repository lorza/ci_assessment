<?php
    class Messages_model extends CI_Model {

        public function __construct () {
            parent::__construct();
            $this->load->database();
        }
        
        // * Returns all messages posted by the user with the specified username
        public function getMessagesByPoster($name) {
            $query = $this->db->query("SELECT * FROM Messages WHERE user_username='$name'");
            return $query->result();
        }
        
        // * Returns all messages containing the specified search string, most recent first
        public function searchMessages($string) {
            $query = $this->db->query("SELECT * FROM Messages WHERE text LIKE '%$string%'");
            return $query->result();
        }

        // * Uploads new message to db
        public function insertMessage ($poster, $message) {
            $query = $this->db->query("INSERT INTO Messages (user_username, text, posted_at) VALUES ('$poster', '$message', CURRENT_TIME())");
            return true;

            // TODO: t statement
        }
    }
?>