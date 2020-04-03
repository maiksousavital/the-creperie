<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function contact_data()
    {

        $result = $this->db->get("tbl_contact")->result();
        return $result;

    }

    public function mark_message_read($id)
    {
        $data = array(
            'id' => $id
        );
        $this->db->set('read_date', date("Y-m-d h:i:s"));
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        return $this->db->update('tbl_contact', $data);
    }


    public function delete_message($id)
    {

        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        return $this->db->delete('tbl_contact', $data);
    }
}