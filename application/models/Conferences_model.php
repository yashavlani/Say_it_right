<?php
class Conferences_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_conferences()
    {
        $result = $this->db->query("select * from conference");
        return $result->result_array();
    }

    public function set_conference($id)
    {
        $email = $_SESSION['email'];
        $data = array(
            'email' => $email,
            'conference_id' => $id
        );

        return $this->db->insert('myconference', $data);
    }

    public function del_conference($id)
    {
        $result = $this->db->query("delete from myconference where conference_id = '$id'");
        return $result;
    }

    public function get_myConferences()
    {
        $email = $_SESSION['email'];
        $result = $this->db->query("select * from conference where conference_id in (select conference_id from myconference where email='$email')");
        return $result->result_array();
    }
}