<?php
    class Message extends CI_Controller {
        public function index () {
            session_start();

            // * Check session has been set
            if (!isset($_SESSION["user"])) {
                $this->load->helper("url");
                $data["error"] = "You must be logged in to access that page";
                redirect("user/login", $data);
                return;
            }

            // * User is logged in ---------
            // * Load post view
            $this->load->view("post_view");
        }

        // * Post message to Db
        public function doPost () {
            session_start();

            if (!isset($_SESSION["user"])) {
                // TODO: Add View Redirect
                echo "not logged in";
                return;
            }
    
            $postdata = $this->input->post();
            $message = $postdata["message"];
            $user = $_SESSION["user"];
    
            // * Load model
            $this->load->model("Messages_model");
    
            // * Call insert message method
            // ! Assume that user being provided is valid since user session is 
            // ! Inserted during login. Does not assume session tampering
            $q = $this->Messages_model->insertMessage($user, $message);
    
            if ($q == true) {
                $this->load->helper("url");
                $url = "user/view/$user";
                redirect($url);
            } else {
    
            }
        }
    }

?>