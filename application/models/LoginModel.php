<?php
defined('BASEPATH') or exit('No direct script access allowed');
class LoginModel extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->API="http://localhost:8080/pengiriman_server/index.php/";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}
	function login($username, $password){
		$param = array(
			'username' => $username,
			'password' => $password
			);
		$data = json_decode($this->curl->simple_get($this->API.'/LoginRest', $param));
		if($data){
			return $data;
		}else{
			return false;
		}

	}
}