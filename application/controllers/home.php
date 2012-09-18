<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index(){

		$this->lang->load('home');
		$this->load->model('home_model');
		
		$data = array(
			'lid'		=> $this->lang->lang(),
			'lid_url'	=> $this->uri->segment(1)
		);
		
		foreach( $this->home_model->getText() as $t)
		  $data['text'] = $t->text; 
		

		$this->load->view('home', $data);

	}
	
	
}

