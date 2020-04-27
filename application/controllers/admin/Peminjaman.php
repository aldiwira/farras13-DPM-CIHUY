<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function index()
	{
		$data['main_view'] = 'barang';
		$data['brg'] = $this->a->get('list_alat')->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function listPeminjaman()
	{
		$data['main_view'] = 'peminjaman';
		$data['a'] = $this->a->get('list_alat')->result();
		$data['pj'] = $this->a->get('plot')->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function ins_peminjaman()
	{
		$ab = 	$this->input->post('barang');
		$a = $this->a->getW('list_alat', 'ALAT_ID', $ab)->row();
		$arr = array(
			'ALAT_ID'				=> $ab,
			'NAMA_PEMINJAMAN'		=>	$this->input->post('namapeminjam'),
			'NAMA_ORGANISASI'		=>	$this->input->post('namorgan'),
			'NAMA_BARANG'			=>	$a->ALAT_NAMA,
			'JUMLAH_BARANG'			=>	$this->input->post('jumlah'),
			'TANGGAL_PLOT'			=>	$this->input->post('Tplot'),
			'TANGGAL_PEMINJAMAN'	=>	$this->input->post('Tpinjam'),
			'TANGGAL_PENGEMBALIAN'	=>	$this->input->post('Tbali'),
			'UNTUK_KEPERLUAN'		=>	$this->input->post('keperluan'),
			'JAMINAN'				=>	$this->input->post('jaminan'),
		);
		$this->a->insert('plot', $arr);
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

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ID_PEMINJAMAN', $dt[$i], 'plot');
		}

		redirect('admin/Peminjaman/listPeminjaman');
	}

	public function del_barangP()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ALAT_ID', $dt[$i], 'list_alat');
		}

		redirect('admin/Peminjaman');
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
