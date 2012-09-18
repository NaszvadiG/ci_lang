<?php

class Home_model extends CI_model{


	public function getText(){
		$this->db->select('text_' .$this->lang->lang(). ' as text');

		$q = $this->db->get('pages');
		if($q->num_rows > 0){
			return $q->result();
		}
	}

}