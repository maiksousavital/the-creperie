<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model
{

    public function review_data()
    {

        $result = $this->db->get("tbl_rating")->result();
        return $result;

    }

    public function delete_review($id)
    {
        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        return $this->db->delete('tbl_rating', $data);
    }

    public function approve_review($id)
    {
        $data = array(
            'id' => $id
        );
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        return $this->db->update('tbl_rating', $data);
    }
}