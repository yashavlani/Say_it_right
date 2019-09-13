<?php
class Events_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_events()
    {
        $result = $this->db->query("select * from events");
        return $result->result_array();
    }

    public function set_event($id)
    {
        $email = $_SESSION['email'];
        $data = array(
            'email' => $email,
            'event_id' => $id
        );

        return $this->db->insert('myevent', $data);
    }

    public function del_event($id)
    {
        $result = $this->db->query("delete from myevent where event_id = '$id'");
        return $result;
    }

    public function get_myEvents()
    {
        $email = $_SESSION['email'];
        $result = $this->db->query("select * from events where event_id in (select event_id from myevent where email='$email')");
        return $result->result_array();
    }
}