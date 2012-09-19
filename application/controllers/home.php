<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function show($id){

		$this->lang->load('home');
		$this->load->model('home_model');
		
		$data = array(
			'lid'		=> $this->lang->lang(),
			'lid_url'	=> $this->uri->segment(1),
			'page_id'  	=> $id
		);
		foreach( $this->home_model->getText($id) as $t){
			$data['name'] = $t;
		}
		
		$this->load->view('home', $data);
	}
}

