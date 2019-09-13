<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function set_user($type)
    {
        if ($type == "indi") {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'place_work' => $this->input->post('place_work'),
                'school' => $this->input->post('school'),
                'profile_img' => 'user.jpg',
                'user_type' => 1
            );
        } else if ($type == "event") {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'profile_img' => 'user.jpg',
                'user_type' => 2
            );
        } else if ($type == "business") {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'lname' => $this->input->post('lname'),
                'business_type' => $this->input->post('type_of_business'),
                'profile_img' => 'user.jpg',
                'user_type' => 3
            );
        }

        return $this->db->insert('users', $data);
    }

    public function fetch_login()
    {
        $password = md5($this->input->post('password'));
        $query = "select * from users where email = '". $this->input->post('email') . "' and password = '". $password ."'";
        $result = $this->db->query($query);
        print_r($query);
        $row = $result->row();
        print_r($row);
        if (isset($row)) {
            // If there is a user, then create session data
            $data = array(
                    'email' => $row->email,
                    'username' => $row->fname,
                    'utype' => $row->user_type,
                    'validated' => true
                    );

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }

    public function get_bio()
    {
        $email = $_SESSION["email"];
        $query = "SELECT * from users where email='$email'";
        $result = $this->db->query($query);
        return $result->row_array();
    }

    public function update_bio()
    {
        $email = $_SESSION["email"];

        $profileImg = 'user.jpg';
        $data = array(
            'fname' => $this->input->post('fname_settings'),
            'lname' => $this->input->post('lname_settings'),
            'place_work' => $this->input->post('place_work'),
            'password' => $this->input->post('password_settings'),
            'school' =>  $this->input->post('school'),
            'profile_img' => $profileImg
        );
        $this->db->where('email', $email);
        $this->db->update('users', $data);
    }
}