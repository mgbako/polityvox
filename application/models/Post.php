<?php
class Post extends CI_Model {
  public function get_posts()
  {
    $query = $this->db->get_where('wp_posts', ['post_type'=>'post', 'post_status'=>'publish'], 3);
    return $query->result();
  }
}