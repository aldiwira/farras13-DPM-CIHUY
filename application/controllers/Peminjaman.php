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
		$this->load->view('dashboard', $data);
	}

	public function listPeminjaman()
	{
		$data['main_view'] = 'peminjaman';
		$data['a'] = $this->a->get('list_alat')->result();
		$data['pj'] = $this->a->get('plot')->result();
		$data['item'] = $this->a->get("list_alat")->result();

		$this->load->view('dashboard', $data);
	}
	public function modal()
	{
		$output = array();
		$n = 1;
		$data=$this->a->json($_POST["ids"])->result(); 
		foreach ($data as $key) {
			$output['ALAT_NAMA'] = $key->ALAT_NAMA;
			$output['JUMLAH'] = $key->JUMLAH;
			$output['noo'] = $n;
			$n++;
		}
		var_dump($data);
		echo json_encode($output);
		
	}
	public function ins_peminjaman()
	{
		$arr = array(
			'NAMA_PEMINJAM'		=>	$this->input->post('namapeminjam'),
			'NAMA_ORGANISASI'		=>	$this->input->post('namorgan'),
			'TANGGAL_PLOT'			=>	$this->input->post('Tplot'),
			'TANGGAL_PEMINJAMAN'	=>	$this->input->post('Tpinjam'),
			'TANGGAL_PENGEMBALIAN'	=>	$this->input->post('Tbali'),
			'UNTUK_KEPERLUAN'		=>	$this->input->post('keperluan'),
			'JAMINAN'				=>	$this->input->post('jaminan'),
		);
		$this->a->insert('plot',$arr);
		
		$id = $this->a->getLastId('ID_PEMINJAMAN','plot',1)->row();
		$nm = $_POST['namabarang'];
		$jm = $_POST['jumlah'];
		var_dump($jm,$id,$nm);
		$detail = array();
		$n = 0;
		foreach ($nm as $e) {
			array_push($detail,array(
				'id_peminjaman' => $id->ID_PEMINJAMAN,
				'ALAT_ID'	=> 	$e,
				'JUMLAH'	=>  $jm[$n]
			));
			$n++;
		}

		$this->a->insertBatch('plot_detail',$detail);
		redirect("Peminjaman/listPeminjaman");
	}

	public function ins_barangP()
	{
		$arr = array(
			'ALAT_NAMA'		=>	$this->input->post('namabarang'),
			'JUMLAH_ALAT'	=>	$this->input->post('jumlah'),
		);
		$this->a->insert('list_alat',$arr);
		redirect("Peminjaman");
	}

	public function del_peminjaman()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ID_PEMINJAMAN', $dt[$i], 'plot');
		}

		redirect('Peminjaman/listPeminjaman');
	}

	public function del_barangP()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ALAT_ID', $dt[$i], 'list_alat');
		}

		redirect('Peminjaman');
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
