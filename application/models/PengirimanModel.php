<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PengirimanModel extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->API="http://localhost:8080/pengiriman_server/index.php/";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}
	function savePengiriman(){
		
    $data="14670000";
    $kode= json_decode($this->curl->simple_get($this->API.'/KodePengiriman'));
  	 //foreach ($kode as $key) {
    if(is_null($kode[0]->noResi)){
      $id="0001";
    }else{
       $data= $kode[0]->noResi;
    $lastid = (int) substr($data, -4);
    $newid = $lastid+1;
    $id = substr("0000".$newid, -4);
    }
       
  	$no="1456".$id;
  	$tgl= date('Y-m-d');
  	$status ="Cek";

  	$param = array(
  		'idCabang' =>$this->session->userdata('logged_in')['idCabang'],
  		'tujuan' => $this->input->post('tujuan'),
  		'jenis' => $this->input->post('jenis')
  		);
  	$harga0 = json_decode($this->curl->simple_get($this->API.'/HargaPengiriman',$param));
  	$harga1=$harga0[0]->harga;
  	$jenis=$harga0[0]->idJenis;

    $totalharga = (int)$harga1 * (int)($this->input->post('berat'));
   

  	$object = array(
 		'noResi' => $no,
                'pengirim' => $this->input->post('pengirim'),
                'alamatPengirim' => $this->input->post('alamatPengirim'),
                'teleponPengirim' => $this->input->post('teleponPengirim'),
                'penerima' => $this->input->post('penerima'),
                'alamatPenerima' => $this->input->post('alamatPenerima'),
                'teleponPenerima' => $this->input->post('teleponPenerima'),
                'Tanggal' => $tgl,
                'jenisBarang' => $this->input->post('jenisBarang'),
                'berat' => $this->input->post('berat'),
                'idCabang' =>  $this->session->userdata('logged_in')['idCabang'],
                'idJenis' => $jenis,
                'status' => $status,
                'totalHarga'=> $totalharga,
                'namaPenerima' =>"-"
 		);
 $insert = $this->curl->simple_post($this->API.'/Pengiriman', $object,array(CURLOPT_BUFFERSIZE => 10));

 redirect('Client/belumKirim','refresh');

	}

  function saveKirim(){
    $object=array(
      'noResi' => $this->input->post('noResi'),
      'status' => "On Process",
      'namaPenerima' => "-"
      );
    $update = $this->curl->simple_put($this->API.'/Pengiriman', $object,
array(CURLOPT_BUFFERSIZE => 10));
       $data=array(
        'noResi' => $this->input->post('noResi'),
        'asal' => $this->session->userdata('logged_in')['idCabang'],
        'tujuan' => $this->input->post('tujuan'),
       'tanggal' =>  $this->input->post('tanggal'),
        'idKurir' => $this->input->post('kurir'),
        'status' => "On Process"
         );
       $insert = $this->curl->simple_post($this->API.'/Kirim', $data,array(CURLOPT_BUFFERSIZE => 10));
 redirect('Client/savePengiriman','refresh');

  }

  function lanjutKirim(){
    $object=array(
      'noResi' => $this->input->post('noResi'),
      'status' => "Delivered"
      );
    $update = $this->curl->simple_put($this->API.'/Kirim', $object,array(CURLOPT_BUFFERSIZE => 10));
    $data=array(
        'noResi' => $this->input->post('noResi'),
        'asal' => $this->session->userdata('logged_in')['idCabang'],
        'tujuan' => $this->session->userdata('logged_in')['idCabang'],
       'tanggal' =>  $this->input->post('tanggal'),
        'idKurir' => $this->input->post('kurir'),
        'status' => "On Process"
         );
       $insert = $this->curl->simple_post($this->API.'/Kirim', $data,array(CURLOPT_BUFFERSIZE => 10));
redirect('Client/savePengiriman','refresh');
  }

  function diterima(){
     $object=array(
      'noResi' => $this->input->post('noResi'),
      'status' => "Delivered"
      );
    $update = $this->curl->simple_put($this->API.'/Kirim', $object,array(CURLOPT_BUFFERSIZE => 10));
    $object=array(
      'noResi' => $this->input->post('noResi'),
      'status' => "Delivered",
      'namaPenerima' => $this->input->post('namaPenerima')
      );
    $update = $this->curl->simple_put($this->API.'/Pengiriman', $object,
array(CURLOPT_BUFFERSIZE => 10));

  }
}