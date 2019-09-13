<?php
class Login extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('base_model');
            $this->load->model('users_model');
            $this->load->helper('url');
            $this->load->helper('form');
        }

        public function index()
        {
            $data['page_directory'] = $this->base_model->get_directory();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('login/create');
            $this->load->view('templates/footer');
        }

        public function error()
        {
            $data['page_directory'] = $this->base_model->get_directory();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('login/error');
            $this->load->view('templates/footer');
        }

        public function process()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->index();
            }
            else
            {
                $isLoggedIn = $this->users_model->fetch_login();

                if ($isLoggedIn) {
                    redirect('dashboard');
                } else {
                    $this->error();
                }
            }
        }
}