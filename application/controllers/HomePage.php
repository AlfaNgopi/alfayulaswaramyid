<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	
	public function index()
	{

		$data = array();

		$data['nama'] = "Alfa Nada Yulaswara";
		$data['nohp'] = "089601469880";
		$data['email'] = "alfayulaswra@gmail.com";
		$data['alamat'] = "Doplang, Purworejo, Kabutpaten Purworejo, Jawa Tengah";
		

		$toview['content'] = $this->load->view('homepage', $data, true);
        $toview['title'] = "Klasifikasi AI";
        


        $this->load->view('main', $toview);
	}
}
