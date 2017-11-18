<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index(){
		$this->load->view('Hello');
	}

	public function Programming(){
		$this->load->view('Programming');
	}

	public function Marketing(){
		$this->load->view('Marketing');
	}

	public function Design(){
		$this->load->view('Design');
	}

	public function Content(){
		$this->load->view('Content');
	}

}

/* End of file Hello.php */
/* Location: ./application/controllers/Hello.php */