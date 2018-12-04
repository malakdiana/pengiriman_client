<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Client extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->API="http://localhost:8080/pengiriman_server/index.php/";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	function belumKirim(){
		$param = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		$data['pengiriman'] = json_decode($this->curl->simple_get($this->API.'/BelumKirim', $param));
		$data['kurirr']= json_decode($this->curl->simple_get($this->API.'/Kurir', $param));
		$data['tujuan']= json_decode($this->curl->simple_get($this->API.'/Tujuan', $param));
		$this->load->view('header');
		$this->load->view('belumkirim', $data);
	}
	function generate_to_pdf($index){
		$this->load->library('pdf');
		$param = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		$data['data'] = json_decode($this->curl->simple_get($this->API.'/BelumKirim', $param))[$index];
		$this->pdf->load_view('print_resi',$data);
		$this->pdf->render();
		$this->pdf->stream("laporan.pdf");
	}
	function prosesKirim(){
		$param = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		$data['pengiriman'] = json_decode($this->curl->simple_get($this->API.'/KirimOnProcess', $param));
		$data['kurirr']= json_decode($this->curl->simple_get($this->API.'/Kurir', $param));
		$data['tujuan']= json_decode($this->curl->simple_get($this->API.'/Tujuan', $param));
		$this->load->view('header');
		$this->load->view('proseskirim', $data);
	}
	function suksesKirim(){
		$param = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		$data['pengiriman'] = json_decode($this->curl->simple_get($this->API.'/KirimSukses', $param));
		$data['kurirr']= json_decode($this->curl->simple_get($this->API.'/Kurir', $param));
		$data['tujuan']= json_decode($this->curl->simple_get($this->API.'/Tujuan', $param));
		$this->load->view('header');
		$this->load->view('sukseskirim', $data);
	}

	function barangDatang(){
		$param = array(
			'asal' => $this->session->userdata('logged_in')['idCabang']
			);
		$param2 = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		
		$data['pengiriman'] = json_decode($this->curl->simple_get($this->API.'/BarangDatang', $param));
		$data['kurirr']= json_decode($this->curl->simple_get($this->API.'/Kurir', $param2));
		$this->load->view('header');
		$this->load->view('barangdatang', $data);
	}
	function konfirmasiBarang(){
		$param = array(
			'asal' => $this->session->userdata('logged_in')['idCabang']
			);
		$param2 = array(
			'idCabang' => $this->session->userdata('logged_in')['idCabang']
			);
		
		$data['pengiriman'] = json_decode($this->curl->simple_get($this->API.'/KonfirmasiBarang', $param));
		$data['kurirr']= json_decode($this->curl->simple_get($this->API.'/Kurir', $param2));
		$this->load->view('header');
		$this->load->view('konfirmasibarang', $data);
	}
	function savePengiriman(){
		$this->load->helper('url','form');
		$this->load->library('form_validation');
$this->form_validation->set_rules('pengirim', 'NAMA PENGIRIM', 'trim|required');
		$this->form_validation->set_rules('alamatPengirim', 'ALAMAT PENGIRIM', 'trim|required');
		$this->form_validation->set_rules('teleponPengirim', 'TELEPON PENGIRIM', 'trim|required');
		$this->form_validation->set_rules('penerima', 'NAMA PENERIMA', 'trim|required');
		$this->form_validation->set_rules('alamatPenerima', 'ALAMAT PENERIMA', 'trim|required');
		$this->form_validation->set_rules('teleponPenerima', 'TELEPON PENERIMA', 'trim|required');
		$this->form_validation->set_rules('tujuan', 'TUJUAN', 'trim|required');
		$this->form_validation->set_rules('berat', 'BERAT', 'trim|required');
		$this->form_validation->set_rules('jenisBarang', 'JENIS BARANG', 'trim|required');
		$this->form_validation->set_rules('jenis', 'JENIS PENGIRIMAN', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
		$data['kota'] = json_decode($this->curl->simple_get($this->API.'/Cabang'));
		$this->load->view('header');
		$this->load->view('formPengiriman',$data);
		}else{
				
				$this->load->model('PengirimanModel');
				$this->PengirimanModel->savePengiriman();
		}
	}

	function saveKirim(){
		$this->load->model('PengirimanModel');
		$this->PengirimanModel->saveKirim();	
	}
	function lanjutKirim(){
		$this->load->model('PengirimanModel');
		$this->PengirimanModel->lanjutKirim();	
	}
	function diterima(){
		$this->load->model('PengirimanModel');
		$this->PengirimanModel->diterima();
	}


	
}