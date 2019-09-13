<?php
class Users extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('users_model');
            $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['users'] = $this->users_model->get_users();
            $data['title'] = 'News archive';

            // $this->load->view('templates/header', $data);
            $this->load->view('pages/login', $data);
            // $this->load->view('templates/footer');
        }

        public function createClient()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
        }
}