<?php
class Sign_up_model extends Model
{
	function create_user()
	{
		$this->load->model	
		$new_member_insert_data = array(
				'firstname' => $this->input->post('first_name'),
				'lastname' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				);
			$this->db->insert('User',$new_member_insert_data)\
			return $insert;
	}
}
?>
