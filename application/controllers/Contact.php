<?php

class Contact extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper(array('form','url'));
      $this->load->library(array('session', 'form_validation', 'email'));
  }

  public function index()
  {
    $data['title'] = "Contact Us";
    $this->loadpage($data);
  }

  function submitform()
  {
    $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');

    if ($this->form_validation->run() == FALSE)
    {
      $data['title'] = "Contact Us";
      $this->load->view('templates/header', $data);
      $this->load->view('contact');
      $this->load->view('templates/footer');
    }
    else
    {      
      $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'jmgbako@gmail.com',
        'smtp_pass' => 'jemdoe1214',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'wordwrap' => TRUE
      );

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");

      // get the form data
      $name = $this->input->post('name');
      $from_email = $this->input->post('email');
      $subject = 'Contact Form';
      $message = $this->input->post('message');
      //$message .= "<p>".$name."<br>".$message."</p>";

      $data = Array(
        'name' => $name,
        'message' => $message,
        'subject' => $subject
      );

      $body = $this->load->view('emails/contact.php',$data, true);

      //set to_email id to which you want to receive mails
      $to_email = 'jmgbako@gmail.com';

      //$this->email->clear();
      $this->email->from($from_email);
      $this->email->to('jmgbako@gmail.com');
      $this->email->subject($subject);
      $this->email->message($body);
      
      if($this->email->send())
      {
        $this->session->set_flashdata('email_sent', 'Email Sent Successfully');
        $this->loadpage();
      }
      else
      {
        $this->session->set_flashdata('email_notsent', 'Error in sending Email');
        $this->loadpage();
      }
    }
  }

  //custom validation function to accept only alphabets and space input
  function alpha_space_only($str)
  {
      if (!preg_match("/^[a-zA-Z ]+$/",$str))
      {
          $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
          return FALSE;
      }
      else
      {
          return TRUE;
      }
  }

  function loadpage($data = null)
  {
    $this->load->view('templates/header', $data);
    $this->load->view('contact');
    $this->load->view('templates/footer');    
  }
}