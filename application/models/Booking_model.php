<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    public function booking_data()
    {

        $result  = $this->db->get("tbl_booking")->result();
        return $result;


    }


    public function confirm_booking($id)
    {
        $data = array(
            'id' => $id
        );
        $this->db->set('confirmed', 1);
        $this->db->where('id', $id);
        return $this->db->update('tbl_booking', $data);
    }

    public function delete_booking($id)
    {
        $data = array(
            'id' => $id
        );

        $this->db->where('id', $id);
        return $this->db->delete('tbl_booking', $data);
    }

}