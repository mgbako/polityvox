<?php

class Errors extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Welcome";
    $data['heading'] = "Welcome";
    $data['message'] = "Welcome";

    $this->load->view('templates/header', $data);
    $this->load->view('errors/html/error_404');
    $this->load->view('templates/footer');
  }
}