<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Kontroler untuk M & V. Memakai fungsi pada Model dan menampilkan pada Views
class Home extends CI_Controller {
	//Dieksekusi pertama kali saat Controller diakses.
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Customer');	//M_Customer
		$this->load->library('form_validation');
	}

	public function index(){
		$queryDetail = $this->M_Customer->getData(); //Mengambil data dari model
        $data = array('queryDetail' => $queryDetail);
		$this->load->view("home", $data);     //Kirim ke view
	}

	public function halaman_tambah() {
		$this->load->view('halaman_tambah');
	}

	public function halaman_edit($id){
		$queryDetail = $this->M_Customer->editData($id);
		$data = array('queryDetail' => $queryDetail);
		$this->load->view('halaman_edit', $data);
	}

	public function fungsiTambah(){
		$this->form_validation->set_rules('id','id','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('alamat','alamat','required');
	

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');

		$ArrInsert = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'alamat' => $alamat
		);

		if($this->form_validation->run() == FALSE)
		 {
			 $this->load->view('halaman_tambah');
		 }
		 else{
			$this->M_Customer->insertData($ArrInsert);
			redirect(base_url(''));
		 }

	}

	public function fungsiEdit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');

		$ArrUpdate = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'alamat' => $alamat
		);

		$this->M_Customer->updateData($id, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($id){
		$this->M_Customer->deleteData($id);
		redirect(base_url(''));
	}
}
