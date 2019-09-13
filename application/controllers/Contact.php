<?php
class Contact extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('base_model');
            $this->load->model('contact_model');
            $this->load->helper('url');
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();

            $data['active_page'] = $this->uri->segment(1);

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('telephone', 'Phone', 'trim|min_length[10]|max_length[13]');
            $this->form_validation->set_rules('message', 'Comments', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('contact/create');
                $this->load->view('templates/footer');
            }
            else
            {
                $this->contact_model->set_data();

                $this->load->view('templates/header', $data);
                $this->load->view('contact/success');
                $this->load->view('templates/footer');
            }
        }
}