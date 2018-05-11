<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_slider', 'slider');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$data['slider'] = $this->slider->get_all();
		$this->load->view('dashboard/slider', $data);
	}

	public function create()
	{
		$this->rules();
		if ($this->form_validation->run() == FALSE) {
			$data['nama_file'] = $this->input->post('nama_file') ? $this->input->post('nama_file') : '';
		}
		$this->load->view('dashboard/slider/add', $data);
	}

	public function store()
	{
		$config = array(
			'upload_path' => './assets/admin/slider/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' => '2048',
			'max_width' => '2000',
			'max_height' => '2000'
 		);
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('filefoto')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('dashbboard/slider/create'));
		} else {
			$file = $this->upload->data();
			$data = array(
					'nama_file' => $this->input->post('nama_file'),
					'filefoto' => $file['file_name']
			);

			$this->slider->insert($data);
		}
		$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
		redirect(site_url('slider'));
	}

	public function edit($id)
	{
		$this->rules();
		$row = $this->slider->get_by_id($id);
		$data = array(
								'id' => $row->id,
								'nama_file' => $row->nama_file,
								'filefoto' => $row->filefoto
		);
		$this->load->view('dashboard/slider/edit', $data);
	}

	public function update($id)
	{
		$row = $this->slider->get_by_id($id);

		// Do this if there is an image upload
		if ($_FILES AND $_FILES['filefoto']['name']) {
				// Start uploading file
				$config = array(
						'upload_path' => './assets/admin/slider/',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size' => '2048',
						'max_width' => '2000',
						'max_height' => '2000'
				);
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('filefoto')) {
						$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
						redirect(site_url('dashboard/slider/edit/' . $row->id));
				} else {

						// Remove old image in folder 'images' using unlink()
						// unlink() use for delete files like image.
						unlink('./assets/admin/slider/'.$row->filefoto);

						// Upload file
						$file = $this->upload->data();
						$id = $this->input->post('id');
						$data = array(
								'nama_file' => $this->input->post('nama_file'),
								'filefoto' => $file['file_name'],
						);

						$this->slider->update($id, $data);
				}
		}
		// Do this if there's no image file uploaded
		else {
				// No file upload
				$id = $this->input->post('id');
				$data = array(
						'nama_file' => $this->input->post('nama_file'),
				);
				$this->slider->update($id, $data);
		}
		$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil diubah.</div>");
		redirect(site_url('slider'));
	}

	public function delete($id)
	{
		$row = $this->slider->get_by_id($id);

		if ($row) {

				// unlink() use for delete files like image.
				unlink('./assets/admin/slider//'.$row->filefoto);

				$this->slider->delete($id);
				$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil dihapus.</div>");
				redirect(site_url('slider'));
		} else {
				$this->session->set_flashdata('message', "<div style='color:#dd4b39;'>Data tidak ditemukan.</div>");
				redirect(site_url('slider'));
		}
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}
