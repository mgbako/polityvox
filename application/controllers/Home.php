<?php
class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('post');
  }

  public function index()
  {
    $data['title'] = "Welcome";
   // $data['posts'] = ''; // $this->post->get_posts();

    $this->load->view('templates/header', $data);
    $this->load->view('home');
    $this->load->view('templates/footer');
  }
}