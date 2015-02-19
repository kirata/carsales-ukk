<?php 
/**
* Author : Kevin Magdareva
* Date : February, 12 2015
*
* Controller yang pertama di load
* Pengguna harus melakukan autentikasi terlebih dahulu
* Filter dilakukan menggunakan session
* 
*/
class Login extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('user_id')) {
			$this->load->view('login');
		}
		else{
			redirect('app');
		}
	}
	public function authenticating()
	{
		if ($this->input->post('username') && $this->input->post('password')) {
			$username	= $this->input->post('username');
			$password	= md5($this->input->post('password'));
			$cek = $this->app_model->selectLogin($username,$password);
			if ($cek->num_rows() > 0) {
				foreach ($cek->result() as $d) {
					$ses['user_id'] = $d->kode_pengguna;
					$ses['username'] = $d->username;
					$ses['nama'] = $d->nama;
					$ses['email'] = $d->email;
					$ses['level'] = $d->level;

					if ($this->input->post('remember')) {
						$this->session->sess_expiration = 10800; // 3 hours
    					$this->session->sess_expire_on_close = FALSE;
					}
					$this->session->set_userdata($ses);
					redirect();
				}				
			}
			else{
				$mssg = "Username dan Password tidak cocok";
				$this->session->set_flashdata('mssg',$mssg);
				redirect();
			}
		}
		else{
			$mssg	= "Username dan Password harus diisi";
			$this->session->set_flashdata('mssg',$mssg);
			redirect();
		}
	}
	public function destroy()
	{
		$this->session->sess_destroy();
		redirect();
	}
}