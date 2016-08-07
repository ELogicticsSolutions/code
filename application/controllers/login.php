<?php>

class Login extends Controller
{
	function validate()
	{
		$this->load->models('user');
		$query=$this->user->validate();
		if($query)
		{
			$data=array(
				'email'=> $this->input->post('email'),
				'is_logged_in' => 'true'
				);
				$this->session->set_userdata($data);
				redirect("site/member")
		}	
		else
		{
			$this-> login_page();
		}
	}
	function signup()
	{
		$this->load->model('sign_up_model');
		if ($query=$this->sign_up_model->create_user())
		{
			$this->load->view('sign	up_success');
		}
		else
		{
			$this->load->view('login_page');
		}
		
		
	}
	

}

?>
