<?php
class Products_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_client()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5('12345'),
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'phone' => $this->input->post('phone'),
            'roleId' => '2'
        );

        return $this->db->insert('users', $data);
    }

    public function get_all()
    {
        $result = $this->db->query("select * from products");

        return $result->result_array();
    }

    public function post_data()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address1' => $this->input->post('address1'),
            'address2' => $this->input->post('address2'),
            'address3' => $this->input->post('address3'),
            'address4' => $this->input->post('address4'),
            'name' => $this->input->post('product'),
            'unit' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),
        );

        return $this->db->insert('buyfromusorders', $data);
    }

}