<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Front extends Parent_Controller {
 

 	public function __construct(){
 		parent::__construct();
 		$this->load->model('m_front');
 	}
 

	public function index(){
		 
 	 
		$data['judul'] = $this->data['judul'];  
		$get_categori = $this->db->query("select * from m_barang order by id asc")->result();
		foreach ($get_categori as $key => $value) {
			$list_cat[] = '"'.$value->nama_barang.'"';
		}

		$getjkt = $this->db->query("select * from m_barang order by id asc")->result();
		foreach ($getjkt as $key => $value) {
			$list_jkt[] = $value->qty_jkt;
		}

		$getsbg = $this->db->query("select * from m_barang order by id asc")->result();
		foreach ($getsbg as $key => $value) {
			$list_sbg[] = $value->qty_subang;
		}
	 
		$data['datacat'] =  '['.implode(",", $list_cat).']';
		$data['datajkt'] =  '['.implode(",", $list_jkt).']';
		$data['datasbg'] =  '['.implode(",", $list_sbg).']';
		$this->load->view('front_view',$data);
	}
}
 