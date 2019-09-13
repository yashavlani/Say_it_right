<?php
class Dashboard extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('base_model');
            $this->load->model('dashboard_model');
            $this->check_isvalidated();
        }

        public function index()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['conferences'] = $this->dashboard_model->get_conferences();
            $data['events'] = $this->dashboard_model->get_events();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/individual', $data);
            $this->load->view('templates/footer');
        }

        public function conferences()
        {
            $data['page_directory'] = $this->dashboard_model->get_directory2();
            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/conferences');
            $this->load->view('templates/footer');
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