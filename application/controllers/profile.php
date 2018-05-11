<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('m_profile');//memanggil model m_profile
        $data['profile'] = $this->m_profile->list_data();//memanggil fungsi di model dan menerima hasil fungsi yang dimasukan ke $data['profile']
		$this->load->view('dashboard/v_profile',$data);//memanggil view yang nanti
	}

	public function Input()
 {
       $this->load->helper('form');
       $data['type']="INPUT";
       $this->load->view('dashboard/profile/add', $data);
 }
public function Edit()
	{
		$this->load->helper('form');//memanggil helper form nanti penggunaannya di profile/add.php
		
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('m_profile');//memanggil model m_profil.php
		
		$id = $this->input->get('profile');//mengambil param produk dari get
		$data['profile'] = $this->m_profile->getEdit($id);
		$data['type']="EDIT";// definisi type, karena nanti juga ada edit
		$this->load->view('dashboard/profile/add',$data);// memanggil view profile/add.php
	}
	
	public function Post(){
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('m_profile');//memanggil model m_data_produk.php
		
		//mengambil data dari post memasukan ke array agar lebih mudah 
		$param = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'email'=> $this->input->post('email')
				);
		//jika simpan == input 
		if($this->input->post('simpan')=="INPUT"){
			$this->m_profile->input($param);	
		}else
		if($this->input->post('simpan')=="EDIT"){
			$id= $this->input->post('id');
			$this->m_profile->edit($param,$id);	
		}
		
		//memanggil helper url untuk fungsi redirect
		$this->load->helper('url');
		//mengalihkan ke list data produk setelah input atau edit selesai
		redirect('profile','refresh');
	}
	
	public function Delete(){
		$this->load->database();//memanggil pengaturan database dan mengaktifkannya
        $this->load->model('m_profile');//memanggil model m_data_produk.php
		$id = $this->input->get('profil');
		$this->m_profile->delete($id);
		
		$this->load->helper('url');
		redirect('profile','refresh');
	}
}
