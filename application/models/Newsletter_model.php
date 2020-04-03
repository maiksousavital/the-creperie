<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Newsletter_model extends CI_Model
{

    public function newsletter_data()
    {

        $result  = $this->db->get("tbl_newsletter")->result();
        return $result;


    }

    //FIX
    public function delete_email($email)
    {

        $data = array(
            'email' => $email
        );

        $this->db->where('email',$email);
        return $this->db->delete('tbl_newsletter',$data);
    }

}