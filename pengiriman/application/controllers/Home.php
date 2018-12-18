<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->API="http://localhost:8080/pengiriman_server/index.php/";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['cabang'] = json_decode($this->curl->simple_get($this->API.'/Cabang'));
		$this->load->view('home',$data);
	}

	function cekResi(){
		$param = array(
			'noResi' => $this->input->post('noResi')
			);
		$data['lokasi'] = json_decode($this->curl->simple_get($this->API.'/Lokasi', $param));
		$data['cabang'] = json_decode($this->curl->simple_get($this->API.'/Cabang'));
		$this->load->view('lokasi', $data);

	}
	function cekHarga(){
		$param = array(
  		'asal' =>$this->input->post('asal'),
  		'tujuan' => $this->input->post('tujuan'),
  		'berat' =>$this->input->post('berat')
  		);

		$data['cabang'] = json_decode($this->curl->simple_get($this->API.'/Cabang'));
		$data['harga'] = json_decode($this->curl->simple_get($this->API.'/CekHarga',$param));

		$this->load->view('cekHarga', $data);
	}
}
