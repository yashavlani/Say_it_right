<?php
class Signup extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('base_model');
            $this->load->model('users_model');
            $this->load->helper('url');
        }

        public function index()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();

            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('signup/index');
            $this->load->view('templates/footer');
        }

        public function individual()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();

            $data['active_page'] = $this->uri->segment(1);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('signup/individual');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->users_model->set_user("indi");

                $this->load->view('templates/header', $data);
                $this->load->view('signup/success');
                $this->load->view('templates/footer');
            }
        }

        public function event()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();

            $data['active_page'] = $this->uri->segment(1);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('signup/event');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->users_model->set_user("event");

                $this->load->view('templates/header', $data);
                $this->load->view('signup/success');
                $this->load->view('templates/footer');
            }
        }

        public function business()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();

            $data['active_page'] = $this->uri->segment(1);

            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('signup/business');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->users_model->set_user("business");

                $this->load->view('templates/header', $data);
                $this->load->view('signup/success');
                $this->load->view('templates/footer');
            }
        }
}