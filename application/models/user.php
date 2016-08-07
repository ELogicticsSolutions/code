<?php
class User extends Model
{
	function validate()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', $this->input->post('password'));
		$query=$this->db->get('User');
		if($query->num_rows	== 1)
		{
			return true;	
		}	
		else 
		{
			<?php echo Wrong email passwprd combination ?>
		}
	}
}
?>
