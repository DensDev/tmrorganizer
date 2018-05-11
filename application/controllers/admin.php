<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        //load model m_login
        $this->load->model('m_login');
    }


	public function index()
	{
		if($this->m_login->logged_id())
		{

			$this->load->view("dashboard/v_home");			

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("dashboard/index");

		}
	}
public function logout()
	{
		$this->session->sess_destroy();
		redirect('tmr_login');
	}

}
