<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "application/vendor/autoload.php";
require_once APPPATH . 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require_once APPPATH . 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require_once APPPATH . 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

use MessageMediaMessagesLib\Models;
use MessageMediaMessagesLib\Exceptions;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Home extends CI_Controller
{


    public function index()
    {
        $data['menu_list'] = $this->Menu_model->get_menu_list();
        $data['rating_list'] = $this->Home_model->get_rating_list();
        $data['about'] = $this->Home_model->get_about();
        $data['home_video'] = $this->Home_model->get_home_video();
        $data['pagination'] = $this->pagination();
        $this->load->view('home', $data);
    }

    public function send_sms()
    {

        $authUserName = 'QJHLq928dBdF8fYWThqM';
        $authPassword = 'qaq88jEPVvLbslC1LlKo0P5rThplRV';
        /* You can change this to true when the above keys are HMAC */
        $useHmacAuthentication = false;

        $client = new MessageMediaMessagesLib\MessageMediaMessagesClient($authUserName, $authPassword, $useHmacAuthentication);

        $messagesController = $client->getMessages();

        $body = new Models\SendMessagesRequest;
        $body->messages = array();

        $body->messages[0] = new Models\Message;
        $body->messages[0]->content = 'Andrey, you have received a new message from a customer through contact form.';
        $body->messages[0]->destinationNumber = '+640272273442';
        //642108598542 Alexey Phone

        try {
            $result = $messagesController->sendMessages($body);
            print_r($result);
        } catch (Exceptions\SendMessages400Response $e) {
            echo 'Caught SendMessages400Response: ', $e->getMessage(), "\n";
        } catch (MessageMediaMessagesLib\APIException $e) {
            echo 'Caught APIException: ', $e->getMessage(), "\n";
        }
    }


    public function send_message()
    {

        $data = $this->Home_model->send_message();
        echo json_encode($data);

    }

    public function send_email()
    {

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.live.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'maikbatera1@hotmail.com';
        $mail->Password = 'Maik1981*';

        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('maikbatera1@hotmail.com', 'CodexWorld');
        //$mail->addReplyTo('info@example.com', 'CodexWorld');

        // Add a recipient
        $mail->addAddress('maikbatera1@gmail.com');

        // Add cc or bcc
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Email subject
        $mail->Subject = 'The creperie website';

        // Set email format to HTML
        $mail->isHTML(true);

        // Email body content
        $mailContent = "<h1>New message from a customer</h1>
            <p>This is a test email.</p>";
        $mail->Body = $mailContent;

        // Send email
        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }


    }

    public function save_rating()
    {
        $data = $this->Home_model->save_rating();
        echo json_encode($data);

    }

    public function news_letter()
    {
        $return = $this->Home_model->news_letter();
        echo json_encode($return);


    }

    public function check_subscription()
    {
        $email = $this->input->get('email');
        $return = $this->Home_model->check_subscription($email);
        echo json_encode($return);


    }

    public function add_booking()
    {
        $return = $this->Home_model->add_booking();
        echo json_encode($return);

    }


    function pagination()
    {
        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = base_url('home/index/');
        $config["total_rows"] = $this->Home_model->count_pictures();
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        $config["use_page_numbers"] = TRUE;
        $config['num_links'] = $config["total_rows"];
        $config['cur_tag_open'] = '&nbsp;<div class="btn btn-default"><a class="current">';
        $config['cur_tag_close'] = '</a></div>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //$start = ($page) * $config["per_page"];

        $output = array(
            'pagination_link' => $this->pagination->create_links(),
            'gallery_pictures' => $this->Home_model->fetch_details($config["per_page"], $page)
        );

        //echo json_encode($output);

        return $output;
    }


}