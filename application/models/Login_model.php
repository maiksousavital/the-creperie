<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function validate_login()
    {

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tbl_users');

        if (!$result) {
            return false;
        } else {
            return $result->result_array();
        }


    }

}