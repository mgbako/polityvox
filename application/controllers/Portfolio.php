<?php

class Portfolio extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Our works over the years";
    $this->load->view('templates/header', $data);
    $this->load->view('portfolio');
    $this->load->view('templates/footer');
  }
}