<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
		$this->load->library('xls', 'xls');
		date_default_timezone_set('Asia/Bangkok');
		$a = $this->session->userdata('admin_login');
		if ($a == null) {
			redirect('admin/login');
		}
	}

	public function index()
	{
		$data['ud'] = $this->session->userdata('admin_login');
		$data['main_view'] = 'admin/barang';
		$data['brg'] = $this->a->get('list_alat')->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function listPeminjaman()
	{
		$data['ud'] = $this->session->userdata('admin_login');
		$data['main_view'] = 'admin/peminjaman';
		$data['a'] = $this->a->get('list_alat')->result();
		$data['pj'] = $this->a->get('plot')->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function ins_peminjaman()
	{
		$wkt = date('H:i:s');
		$plot = $this->input->post('Tplot');
		$pinjam = $this->input->post('Tpinjam');
		$bali =  $this->input->post('Tbali');
		$time1 = date('Y-m-d H:i:s', strtotime($wkt, strtotime($plot)));
		$time2 = date('Y-m-d H:i:s', strtotime($wkt, strtotime($pinjam)));
		$time3 = date('Y-m-d H:i:s', strtotime($wkt, strtotime($bali)));

		$arr = array(

			'NAMA_PEMINJAM'		=>	$this->input->post('namapeminjam'),
			'NAMA_ORGANISASI'		=>	$this->input->post('namorgan'),
			'TANGGAL_PLOT'			=>	$time1,
			'TANGGAL_PEMINJAMAN'	=>  $time2,
			'TANGGAL_PENGEMBALIAN'	=>	$time3,
			'UNTUK_KEPERLUAN'		=>	$this->input->post('keperluan'),
			'JAMINAN'				=>	$this->input->post('jaminan'),
		);
		$this->a->insert('plot', $arr);

		$ab = $this->input->post('namabarang[]');
		$a = $this->input->post('jumlah[]');
		$b = $this->a->getLastId('ID_PEMINJAMAN', 'plot', 1)->row()->ID_PEMINJAMAN;
		for ($i = 0; $i < count($a); $i++) {
			$arra = array(
				'ALAT_ID' => (int) $ab[$i],
				'id_peminjaman' => $b,
				'jumlah' =>	(int) $a[$i],
			);
			$this->a->insert('plot_detail', $arra);
		}

		redirect("admin/Peminjaman/listPeminjaman");
	}

	public function ins_barangP()
	{
		$arr = array(
			'ALAT_NAMA'		=>	$this->input->post('namabarang'),
			'JUMLAH_ALAT'	=>	$this->input->post('jumlah'),
		);
		$this->a->insert('list_alat', $arr);
		redirect("admin/Peminjaman");
	}

	public function del_peminjaman()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);
		if ($jl != 0) {
			for ($i = 0; $i < $jl; $i++) {
				$this->a->delete('ID_PEMINJAMAN', $dt[$i], 'plot');
			}
		} else {
			redirect('admin/peminjaman/listPeminjaman');
		}
		redirect('admin/peminjaman/listPeminjaman');
	}

	public function del_barangP()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ALAT_ID', $dt[$i], 'list_alat');
		}

		redirect('admin/peminjaman');
	}
	public function execute()
	{
		$value = $this->input->post('request');

		if ($value == "delete") {
			$this->del_peminjaman();
		} else if ($value == "print") {
			$this->print_barang();
		}
	}
	public function print_barang()
	{
		$checkedData = $this->input->post_get('pilih');

		if (!empty($checkedData)) {
			foreach ($checkedData as $checked) {
				$data[] = $checked;
			}
			$this->printExecutor($data);
		} else {
			redirect('admin/peminjaman/listPeminjaman');
		}
	}
	public function printExecutor($barangdatas)
	{
		$__DATA = array();
		$ct = count($barangdatas);
		for ($i = 0; $i < $ct; $i++) {
			//ini buat get id dan kawan kawan
			$id = $barangdatas[$i];
			$datas = $this->a->__getbyid('plot', "ID_PEMINJAMAN", $id)->result_array();

			//Masukin array biar uwu
			$__DATA["data"][] = $datas;
		}
		$this->xls->export_xls($__DATA, 'barang');
	}
	public function upd_peminjaman()
	{
		# code...
	}

	public function upd_barangP()
	{
		# code...
	}
}

/* End of file Peminjaman.php */
/* Location: ./application/controllers/Peminjaman.php */
