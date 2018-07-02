<?php

class News extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Get the Latest News update";
    $this->load->view('templates/header', $data);
    $this->load->view('news');
    $this->load->view('templates/footer');
  }
}