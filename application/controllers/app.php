<?php 
/**
* Author : Kevin Magdareva
* Date : February 17 2015
* Controller app menjadi satu controller untuk melakukan seluruh operasi
* Mulai dari operasi frontend hingga backend
*/
class App extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('user_id')) {
			$d['username_loggedin'] = $this->session->userdata('username');
			$d['nama_loggedin'] = $this->session->userdata('nama');
			$d['level_loggedin'] = $this->session->userdata('level');
			$this->load->view('default',$d);
		}
		else{
			$mssg = "Anda Harus Masuk Dahulu";
			$this->session->set_flashdata("mssg",$mssg);
			redirect();
		}
	}
	public function page()
	{
		if ($this->session->userdata('user_id')) {
			$d['titnow'] = humanize($this->uri->segment(3));
			$d['username_loggedin'] = $this->session->userdata('username');
			$d['nama_loggedin'] = $this->session->userdata('nama');
			$d['level_loggedin'] = $this->session->userdata('level');
			$d['mobil_mobil'] = $this->app_model->selectMobil();
			$d['mobil'] = $this->app_model->detailMobil($this->uri->segment(5));
			$d['pengguna_pengguna'] = $this->app_model->selectPengguna();
			$d['pengguna'] = $this->app_model->detailPengguna($this->uri->segment(5));

			$this->load->view('default',$d);
		}
		else{
			$mssg = "Anda Harus Masuk Dahulu";
			$this->session->set_flashdata("mssg",$mssg);
			redirect();
		}
	}
	public function load404()
	{
		$this->load->view("404");
	}


	// fungsi-fungsi untuk proses-------------------------------------------------
	public function simpanMobil()
	{
		if ($this->session->userdata('user_id')) {
			//nanti pake form validation
			if ($this->input->post('merk')) {
				//load library upload dengan configurasinya
				$conf['upload_path'] = './assets/img/mobil';
				$conf['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload',$conf);

				if ($this->upload->do_upload('fotomobil')) {
					$img = $this->upload->data();

					$d['merk'] = $this->input->post('merk');
					$d['type'] = $this->input->post('tipe');
					$d['warna'] = humanize($this->input->post('warna'));
					$d['harga_mobil'] = $this->input->post('harga');
					$d['gambar'] = $img['file_name'];
					$d['stok'] = $this->input->post('stok');

					if ($this->app_model->insertMobil($d)) {
						$mssg = "insert-success";
						$this->session->set_flashdata("mssg",$mssg);
						redirect('app/page/tambah_mobil');
					}
					else{
						$mssg = "insert-failed";
						$this->session->set_flashdata("mssg",$mssg);
						redirect('app/page/tambah_mobil');
					}
				}
				else{
						$mssg = "insert-failed";
						$this->session->set_flashdata("mssg",$mssg);
						redirect('app/page/tambah_mobil');
				}
			}
			else{
				$mssg = "unknown-parameter";
				$this->session->set_flashdata("mssg",$mssg);
				redirect('app/page/tambah_mobil');
			}
		}
		else{
			$this->load404();
		}
	}
	public function ubahMobil()
	{
		if ($this->session->userdata('user_id')) {
				if ($this->input->post('mobil_id')) {
					//load library upload dengan configurasinya
					$conf['upload_path'] = './assets/img/mobil';
					$conf['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload',$conf);

					if ($this->upload->do_upload('fotomobil')) {
						$img = $this->upload->data();
						$id = $this->input->post('mobil_id');

						$d['merk'] = $this->input->post('merk');
						$d['type'] = $this->input->post('tipe');
						$d['warna'] = humanize($this->input->post('warna'));
						$d['harga_mobil'] = $this->input->post('harga');
						$d['gambar'] = $img['file_name'];
						$d['stok'] = $this->input->post('stok');

						if ($this->app_model->updateMobil($d,$id)) {
							$mssg = "update-success";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/edit/mobil/'.$id);
						}
						else{
							$mssg = "update-failed";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/edit/mobil/'.$id);
						}
				}
				else{
						$id = $this->input->post('mobil_id');
						$d['merk'] = $this->input->post('merk');
						$d['type'] = $this->input->post('tipe');
						$d['warna'] = humanize($this->input->post('warna'));
						$d['harga_mobil'] = $this->input->post('harga');
						$d['stok'] = $this->input->post('stok');

						if ($this->app_model->updateMobil($d,$id)) {
							$mssg = "update-success";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/edit/mobil/'.$id);
						}
						else{
							$mssg = "update-failed";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/edit/mobil/'.$id);
						}
					}
			}
			else{
				$this->load404();
			}
		}
	}
	public function hapusMobil()
	{
		if ($this->session->userdata('user_id')) {
			if ($this->uri->segment(3)) {
				$p['kode_mobil'] = $this->uri->segment(3);
				if ($this->app_model->deleteMobil($p)) {
					$mssg = "success-delete";
					$this->session->set_flashdata('mssg',$mssg);
					redirect('app/page/kelola_mobil');
				}
				else{
					$mssg = "failed-delete";
					$this->session->set_flashdata('mssg',$mssg);
					redirect('app/page/kelola_mobil');
				}
				
			}
			else if($this->input->post('mobil_id')){
				
			}
			else{
				$mssg = "unknown-parameter";
				$this->session->set_flashdata('mssg',$mssg);
				redirect('app/page/kelola_mobil');
			}
		}
		else{
			$this->load404();
		}
	}
	public function simpanPengguna()
	{
		// nanti pake form validation
		// simpan pengguna baru hanya admin yang bisa
		if ($this->session->userdata('level')=="Admin") {
			if ($this->input->post('nama')) {
			$p['username'] = $this->input->post('username');
			$p['password'] = md5($this->input->post('password'));
			$p['email'] = $this->input->post('email');
			$p['nama'] = $this->input->post('nama');
			$p['level'] = $this->input->post('level');
			$p['status'] = $this->input->post('status');

				if ($this->app_model->insertPengguna($p)) {
					$mssg = "insert-success";
					$this->session->set_flashdata("mssg",$mssg);
					redirect('app/page/tambah_pengguna');
				}
				else{
					$mssg = "insert-failed";
					$this->session->set_flashdata("mssg",$mssg);
					redirect('app/page/tambah_pengguna');
				}
			}
			else{
				$mssg = "unknown-parameter";
				$this->session->set_flashdata("mssg",$mssg);
				redirect('app/page/tambah_pengguna');
			}
		}
		else{
			$this->load404();
		}
	}
	public function ubahPengguna()
	{
		if ($this->session->userdata('level')=="Admin") {
				if ($this->input->post('pengguna_id')) {
					$id = $this->input->post('pengguna_id');
					if ($this->input->post('password')) {$p['password'] = md5($this->input->post('password'));}

					$p['email'] = $this->input->post('email');
					$p['nama'] = $this->input->post('nama');
					$p['level'] = $this->input->post('level');
					$p['status'] = $this->input->post('status');

					if ($this->app_model->updatePengguna($p,$id)) {
						$mssg = "update-success";
						$this->session->set_flashdata("mssg",$mssg);
						redirect('app/page/edit/pengguna/'.$id);
					}
					else{
						$mssg = "update-failed";
						$this->session->set_flashdata("mssg",$mssg);
						redirect('app/page/edit/pengguna/'.$id);
					}
				}
		}
		else{
			$this->load404();
		}
	}	
	public function hapusPengguna()
	{
		if ($this->session->userdata('level')=="Admin") {
			if ($this->uri->segment(3)) {
				$p['kode_pengguna'] = $this->uri->segment(3);
				if ($this->app_model->deletePengguna($p)) {
					$mssg = "success-delete";
					$this->session->set_flashdata('mssg',$mssg);
					redirect('app/page/kelola_pengguna');
				}
				else{
					$mssg = "failed-delete";
					$this->session->set_flashdata('mssg',$mssg);
					redirect('app/page/kelola_pengguna');
				}
			}
			else if($this->input->post('pengguna_id')){
				
			}
			else{
				$mssg = "unknown-parameter";
				$this->session->set_flashdata('mssg',$mssg);
				redirect('app/page/kelola_pengguna');
			}
		}
		else{
			$this->load404();
		}
	}
}