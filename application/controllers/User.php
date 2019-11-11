<?php
    class User extends CI_Controller {
        
        public function view ($name) {
            // * Load all messages from this user
            $this->load->model("Messages_model");
            $messages = $this->Messages_model->getMessagesByPoster($name);
            $data["messages"] = $messages;
            $this->load->view("view_messages", $data);
        }   

        // * Shows the login page
        public function login () {
            $this->load->view("login_view");
        }

        // * Log user in
        public function doLogin () {

            $post = $this->input->post();
            
            $username = $post["username"];
            $password = $post["password"];

            $this->load->model("Users_model");
            $q = $this->Users_model->checkLogin($username, $password);
            
            // * Check if a result was returned
            if (count($q) > 0) {

                // * Check if password matches
                // $this->load->library("encrypt");
                // $hashed = $this->encrypt->sha1($password);
                $hashed = sha1($password);

                if ($hashed !== $q[0]->password) {
                    $data["error"] = "Incorrect password";
                    $this->load->view("login_view", $data);
                    return;
                }

                // * Correct login credentials
                session_start();
                $this->load->library("session");
                $this->session->set_userdata("user", $username);
                // $_SESSION['user'] = $username; // * Set session variable
                

                $this->load->helper("url");
                $url = "user/view/" . $username;
                redirect($url);
            } else {
                $data["error"] = "Could not find a user with that username";
                $this->load->view("login_view", $data);
                return;
            }
        }
    }
?>