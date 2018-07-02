<?php

class Election extends CI_Controller
{
  public function index()
  {
    $data['title'] = "2019 Election";
    $this->load->view('templates/header', $data);
    $this->load->view('election');
    $this->load->view('templates/footer');
  }
}