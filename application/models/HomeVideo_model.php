<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeVideo_model extends CI_Model
{

    public function upload_video_home()
    {

        if (!empty($_FILES['video']['name'])) {

            $config['upload_path'] = 'assets/admin/img/home/';
            $config['allowed_types'] = 'mp4|wmv|avi|mov';
            $config['file_name'] = $_FILES['video']['name'];
            $config['max_size'] = '0';
            $config['max_filename'] = '255';

            //Load upload library and initialize configuration
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('video')) {
                echo $this->upload->display_errors();
                $uploadData = $this->upload->data();
                $video = $uploadData['file_name'];
            } else {
                echo $this->upload->display_errors();
                $video = '';
            }
        } else {
            $video = '';
        }

        $data = array(
            'video' => $video
        );
        $result = $this->db->insert('tbl_home', $data);
        return $result;
    }


    public function get_video_name(){


        return $this->db->get('tbl_home')->result_array();
    }

    public function delete_home_video()
    {
        return $this->db->empty_table('tbl_home');

    }

    public function home_data()
    {
        $result  = $this->db->get("tbl_home")->result();
        return $result;

    }

}