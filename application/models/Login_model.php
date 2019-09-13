<?php
class Login_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function fetch_login()
    {
        $password = md5($this->input->post('password'));
        $query = "select * from users where email = '". $this->input->post('email') . "' and password = '". $password ."' and roleId in (2, 3)";
        $result = $this->db->query($query);
        $row = $result->row();
        if (isset($row)) {
            // If there is a user, then create session data
            $data = array(
                    'email' => $row->email,
                    'username' => $row->firstName,
                    'roleId' => $row->roleId,
                    'clientId' => $row->userID,
                    'validated' => true
                    );
            
            if ($row->roleId == 3) {
                $userId = $row->userID;
    
                $searchQuery = "SELECT * FROM business WHERE userID = $userId";
    
                $searchResult = $this->db->query("SELECT * FROM business WHERE userID = $userId");
                $search_row = $searchResult->row();
                $data['businessId'] = $search_row->businessID;
            }

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }
}