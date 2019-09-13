<?php
class Settings extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('base_model');
            $this->load->model('users_model');
            $this->check_isvalidated();
        }

        public function index()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['bio'] = $this->users_model->get_bio();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('pages/settings', $data);
            $this->load->view('templates/footer');
        }

        public function update()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $this->users_model->update_bio();
            $data['active_page'] = $this->uri->segment(1);

            redirect('settings');
        }

        public function service()
        {
            $data['page_directory'] = $this->dashboard_model->get_directory();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/add-service');
            $this->load->view('templates/footer');
        }

        private function check_isvalidated(){
            if(! $this->session->userdata('validated')){
                redirect('login');
            }
        }

        public function do_logout(){
            $this->session->sess_destroy();
            redirect('login');
        }
}