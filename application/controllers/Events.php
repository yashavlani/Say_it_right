<?php
class Events extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('base_model');
            $this->load->model('events_model');
            $this->check_isvalidated();
        }

        public function index()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['events'] = $this->events_model->get_events();
            $data['active_page'] = $this->uri->segment(1);
            $data['isadmin'] = FALSE;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/events', $data);
            $this->load->view('templates/footer');
        }

        public function myEvents()
        {
            $data['page_directory'] = $this->base_model->get_directory2();
            $data['events'] = $this->events_model->get_myEvents();
            $data['active_page'] = $this->uri->segment(1);
            $data['isadmin'] = FALSE;
            $this->load->view('templates/header', $data);
            $this->load->view('pages/my_events', $data);
            $this->load->view('templates/footer');
        }

        public function add($id = null)
        {
            $this->events_model->set_event($id);
            redirect('events');
        }

        public function remove($id = null)
        {
            $this->events_model->del_event($id);
            redirect('my-events');
        }

        private function check_isvalidated(){
            if(! $this->session->userdata('validated')){
                redirect('login');
            }
        }
}