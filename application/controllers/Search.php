<?php
    class Search extends CI_Controller {
        public function index () {
            // $date = date_create();
            // $datetimeFormat = 'Y-m-d H:i:s';
            // echo $date->format($datetimeFormat);
            // return;
            $this->load->view("search_view");
        }

        public function doSearch () {
            $post_data = $this->input->get();
            $string = $post_data["search_query"];
            $this->load->model("Messages_model");
            $q = $this->Messages_model->searchMessages($string);
            $data['messages'] = $q;
            $this->load->view("view_messages", $data);
        }
    }
?>