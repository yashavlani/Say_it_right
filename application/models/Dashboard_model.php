<?php
class Dashboard_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_conferences()
    {
        $result = $this->db->query("select * from conference");
        return $result->result_array();
    }

    public function get_events()
    {
        $result = $this->db->query("select * from events");
        return $result->result_array();
    }
}