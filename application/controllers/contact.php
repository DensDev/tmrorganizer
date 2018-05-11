<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_profile');
}
	
	public function index()
	{
		$data['profile'] = $this->m_profile->list_data();
		$this->load->view('v_contact', $data);
	}
}
