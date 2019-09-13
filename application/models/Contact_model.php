<?php
class Contact_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_data()
    {
        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'telephone' => $this->input->post('telephone'),
            'message' => $this->input->post('message')
        );

        return $this->db->insert('contactus', $data);
    }
}