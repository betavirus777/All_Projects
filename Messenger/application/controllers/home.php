<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index(){

		$this->load->view('header', ['title' => 'Main Page']);
		$this->load->view('main', C::$TestVar);
		$this->load->view('footer');
	}
}
