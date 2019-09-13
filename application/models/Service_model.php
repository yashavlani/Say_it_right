<?php
class Service_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_service()
    {
        $email = $this->db->escape($this->input->post('email'));
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5('12345'),
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'phone' => $this->input->post('phone'),
            'roleId' => '3'
        );

        $this->db->insert('users', $data);

        $businessName = $this->db->escape($this->input->post('businessName'));
        $insertQuery = "INSERT INTO business VALUES (0, $businessName, 
                (SELECT userID FROM users WHERE email = $email))";

        $this->db->query($insertQuery);
    }

    public function get_service()
    {
        $result = $this->db->query("select * from users where email = '". $this->input->post('email') . "' and roleId = 3");

        return $result->result_array();
    }
}