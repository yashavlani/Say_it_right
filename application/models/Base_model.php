<?php
class Base_model extends CI_Model {

    public function __construct()
    {
        $this->load->library('session');
    }

    public function get_directory()
    {
        $result = [
            "Home"=>"",
            "About us"=>"about-us",
            "blog"=>"blog",
            "buy from us"=>"buy-from-us",
            "contact"=>"contact-us",
            "sign up"=>"signup",
            "login"=>"login"
        ];
        return $result;
    }

    public function get_directory2()
    {
        $result = [
            "Home"=>"dashboard",
            "CONFERENCES"=>"conferences",
            "EVENTS"=>"events",
            "MY CONFERENCES"=>"my-conferences",
            "MY EVENTS"=>"my-events",
            "SETTINGS"=>"settings"
        ];
        return $result;
    }
}