<?php
class News extends CI_Controller {
 

    public function index()
    {
        $data['title'] = 'News archive';
 
		$this->load->view('welcome_message');
    }
 
    public function view($slug = NULL)
    {
        var_dump($slug);
		$this->load->view('welcome_message');
    }
}

