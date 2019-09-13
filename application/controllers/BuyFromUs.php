<?php
class BuyFromUs extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('base_model');
            $this->load->model('products_model');
            $this->load->helper('url');
            $this->load->library('cart');
        }

        public function index()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();
            $data['products'] = $this->products_model->get_all();

            $data['active_page'] = $this->uri->segment(1);

            $this->load->view('templates/header', $data);
            $this->load->view('buy-from-us/step1');
            $this->load->view('templates/footer');
        }

        public function step2($id = 1)
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['products'] = $this->products_model->get_all();
            $data['page_directory'] = $this->base_model->get_directory();
            $data['show_modal'] = TRUE;
            $data['item'] = $data['products'][$id];
            $data['item']['id'] = $id;
            $this->load->view('templates/header', $data);
            $this->load->view('buy-from-us/step2', $data);
            $this->load->view('templates/footer');
        }

        public function step3()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['page_directory'] = $this->base_model->get_directory();
            $this->load->view('templates/header', $data);
            $this->load->view('buy-from-us/step3', $data);
            $this->load->view('templates/footer');
        }


        function add()
        {
            // Set array for send data.
            $insert_data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'price' => 24.99,
            'qty' => $this->input->post('quantity')
            );

            // This function add items into cart.
            $this->cart->insert($insert_data);

            // This will show insert data in cart.
            redirect('buy-from-us/step3');
        }

        public function submit()
        {
            $this->products_model->post_data();
            $this->cart->destroy();
            redirect('buyFromUs/index');
        }
}