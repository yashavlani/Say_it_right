<?php
class Conferences extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('base_model');
            $this->load->model('conferences_model');
            $this->check_isvalidated();
        }

        public function index()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['conferences'] = $this->conferences_model->get_conferences();
            $data['active_page'] = $this->uri->segment(1);
            $data['isadmin'] = FALSE;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/conferences', $data);
            $this->load->view('templates/footer');
        }

        public function myConferences()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['conferences'] = $this->conferences_model->get_myConferences();
            $data['active_page'] = $this->uri->segment(1);
            $data['isadmin'] = FALSE;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/my_conferences', $data);
            $this->load->view('templates/footer');
        }

        public function add($id = null)
        {
            $this->conferences_model->set_conference($id);
            redirect('conferences');
        }

        public function remove($id = null)
        {
            $this->conferences_model->del_conference($id);
            redirect('my-conferences');
        }

        private function check_isvalidated(){
            if(! $this->session->userdata('validated')){
                redirect('login');
            }
        }
}