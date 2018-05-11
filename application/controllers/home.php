<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('m_slider');
	$this->load->model('m_profile');
}


	public function index()
	{
		$data['slider'] = $this->m_slider->get_all();
		$data2['profile'] = $this->m_profile->list_data();
		$this->load->view('v_index',$data,$data2);
	}
}
