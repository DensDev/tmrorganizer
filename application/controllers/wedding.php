<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_gallery');
	$this->load->model('m_profile');
}


	public function index()
	{
		$data['gallery'] = $this->m_gallery->get_all();
		$data2['profile'] = $this->m_profile->list_data();
		$this->load->view('v_gallery',$data,$data2);
	}
}
