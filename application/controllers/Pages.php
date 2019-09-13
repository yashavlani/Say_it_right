<?php
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('base_model');
    }

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page. '.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);
        $data['page_directory'] = $this->base_model->get_directory();
        
        $data['active_page'] = $this->uri->segment(1);
        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

?>