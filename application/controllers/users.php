<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		#$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index()
	{
		$data['user_list'] = $this->users_model->get_all_users();
		$this->load->view('show_users', $data);
    }

    public function add_form()
    {
        $this->load->view('insert');
    }

    public function insert_user_db()
    {
        $udata['name'] = $this->input->post('name');
        $udata['email'] = $this->input->post('email');
        $udata['address'] = $this->input->post('address');
        $udata['mobile'] = $this->input->post('mobile');
        $res = $this->users_model->insert_users_to_db($udata);
        if($res){
            header('location:'.base_url()."index.php/users/".$this->index());
        }
    }

}

