<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{

    function save_new_user(){

        $data = array(
            'username' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'first_name' => $this->input->post('firstName'),
            'last_name' => $this->input->post('lastName'),

        );

        $result = $this->db->insert('tbl_users', $data);
        return $result;

    }

}