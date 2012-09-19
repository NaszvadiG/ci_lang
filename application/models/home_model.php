<?php

class Home_model extends CI_model{

	public function getText($id){
		$q = $this->db->get_where(
				'pages_i18n',
				array(
					'i18n_locale' 		=> $this->lang->lang(),
					'i18n_foreing_key'	=> $id
				)
			 );

		if($q->num_rows > 0)
			return $q->result();
	}

}