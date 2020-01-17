<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		redirect('/home');
	}

	public function home(){
		$this->load->view('home');
	}

	public function sobre(){
		$this->load->view('sobre');
	}

	public function convenios(){
		$this->load->view('convenios');
	}

	public function contato(){
		$this->load->view('contato');
	}

}
