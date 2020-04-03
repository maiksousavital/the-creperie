<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function send_message()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'message_date' => date("Y-m-d h:i:s")

        );
        $result = $this->db->insert('tbl_contact', $data);
        return $result;
    }


    public function save_rating()
    {


        $data = array(
            'avatar' => $this->input->post('avatar'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'review' => $this->input->post('review_text'),
            'rating' => $this->input->post('rating'),
            'created' => date("Y-m-d H:i:s")

        );

        $result = $this->db->insert('tbl_rating', $data);
        return $result;

    }

    public function get_rating_list()
    {

        $this->db->where('status', 1);
        return $this->db->get("tbl_rating")->result_array();
    }

    public function get_about()
    {
        return $this->db->get("tbl_about")->result_array();
    }

    public function get_home_video()
    {
        return $this->db->get("tbl_home")->result_array();
    }


    public function add_booking()
    {

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'num_people' => $this->input->post('num_people'),
            'created' => date("Y-m-d H:i:s")
        );

        $result = $this->db->insert('tbl_booking', $data);
        return $result;

    }

    public function news_letter()
    {
        $data = array(
            'email' => $this->input->post('email')
        );

        $result = $this->db->insert('tbl_newsletter', $data);
        return $result;
    }

    public function check_subscription($email)
    {


        $this->db->where('email',$email);
        $result = $this->db->get('tbl_newsletter')->result();
        return $result;
    }

    function count_pictures()
    {

        $query = $this->db->get("tbl_gallery");
        return $query->num_rows();
    }

    function fetch_details($limit, $start)
    {
        $output = '';

        $this->db->limit($limit, $start);
        $query = $this->db->get("tbl_gallery");

//        $this->db->select("*");
//        $this->db->from("tbl_gallery");
//        $this->db->limit($limit, $start);
//        $query = $this->db->get();
//
//        foreach ($query->result() as $row) {
//            $output .= '
//                    <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
//                        <a href="assets/admin/img/gallery/' . $row->picture . '"
//                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
//                           style="background-image: url(assets/admin/img/gallery/' . $row->picture . ');">
//                            <div class="overlay"></div>
//                            <div class="text text-center">
//
//                                <span class="tag">' . $row->title . '</span>
//                            </div>
//                        </a>
//                    </div>
//   ';
//        }
//        return $output;

        return $query->result();
    }


}