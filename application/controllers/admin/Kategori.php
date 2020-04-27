	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Kategori extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('admin_model', 'a');
		}

		public function index()
		{
			$data['main_view'] = 'admin/kategori';
			$data['ktg'] = $this->a->get('kategori')->result();
			$data['oki'] = $this->a->get('oki')->result();
			$this->load->view('admin/dashboard', $data);
		}

		public function ins_kategori()
		{
			$ins = array(
				'KAT_NAMA' => $this->input->post('namakategori'),
				'TUJUAN' => $this->input->post('tujuan')
			);
			$this->a->insert('kategori', $ins);
			redirect('admin/Kategori');
		}

		public function del_kategori()
		{
			$dt = $this->input->post('pilih');
			$jl = count($dt);

			for ($i = 0; $i < $jl; $i++) {
				$this->a->delete('KAT_ID', $dt[$i], 'kategori');
			}

			redirect('admin/Kategori');
		}
	}
