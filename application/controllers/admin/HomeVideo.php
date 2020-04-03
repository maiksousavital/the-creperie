<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeVideo extends CI_Controller
{

    public function upload_video_home()
    {
        $video = $this->get_video_name();
        if (!empty($video[0]['video'])) {
            $this->unlink_video($video);
        }

        if ($this->delete_home_video()) {
            $data = $this->HomeVideo_model->upload_video_home();
            echo json_encode($data);
        }


    }

    public function get_video_name()
    {
        $video = $this->HomeVideo_model->get_video_name();
        return $video;

    }

    public function delete_home_video()
    {
        $video = $this->get_video_name();
        if (!empty($video)) {
            $this->unlink_video($video);
        }

        $delete = $this->HomeVideo_model->delete_home_video();
        return $delete;
    }

    public function unlink_video($video)
    {

        unlink('assets/admin/img/home/' . $video[0]['video']);

    }

    public function home_data()
    {
        $result = $this->HomeVideo_model->home_data();
        echo json_encode($result);
    }


}