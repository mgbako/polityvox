<?php

class About extends CI_Controller
{
  public function index()
  {
    $data['title'] = "About Us";
    $this->load->view('templates/header', $data);
    $this->load->view('about');
    $this->load->view('templates/footer');
  }
}