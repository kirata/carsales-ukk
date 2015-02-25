<?php 
date_default_timezone_set("Asia/Jakarta");
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
			$d['current_cash_trans'] = $this->app_model->selectCompleteDetailCash($this->uri->segment(5));
			$d['current_kredit_trans'] = $this->app_model->selectCompleteDetailKredit($this->uri->segment(5));
			$d['merk'] = $this->app_model->selectAllMerk();
			$d['cash_cash'] = $this->app_model->selectCompleteCash();
			$d['kredit_kredit'] = $this->app_model->selectActiveKredit();
			$d['complete_kredit'] = $this->app_model->selectCompleteKredit();
			$d['pembeli_pembeli'] = $this->app_model->selectPembeli();

			$this->load->view('default',$d);
		}
		else{
			$mssg = "Anda Harus Masuk Dahulu";
			$this->session->set_flashdata("mssg",$mssg);
			redirect();
		}
	}
	public function component()
	{
		if ($this->session->userdata('user_id')) {
			$x = $this->uri->segment(3);
			if ($x == 'kwitansi') {
				if ($this->input->post('cash_id') && $this->uri->segment(4) == "cash") {
					$y['data'] = $this->app_model->selectCompleteDetailCash($this->input->post('cash_id'));

					$this->load->view('components/invoice',$y);
				}
				else if ($this->input->post('kredit_id') && $this->uri->segment(4) == "kredit") {
					$y['data'] = $this->app_model->selectCompleteDetailKredit($this->input->post('kredit_id'));

					$this->load->view('components/invoice',$y);
				}
				else{
					$this->load404();
				}
			}
			else if ($x == 'pdf') {
				# code...
			}
		}
		else{
			$this->load404();
		}
	}
	public function json()
	{
		if ($this->input->post('jparam')) {
			
		}
		else{
			$this->load404();	
		}
	}
	public function load404()
	{
		$this->load->view("404");
	}


	// fungsi-fungsi untuk proses-------------------------------------------------
	public function prosesTransaksi()
	{
			if ($this->session->userdata('user_id')) {
				if ($this->input->post('opsi_bayar')) {
					// parameter insert tabel cash
					$a['ktp'] = $this->input->post('ktp');
					$a['kode_mobil'] = $this->input->post('mobil');
					$a['cash_tgl'] = date('Y-m-d H:i:s');
					$a['cash_bayar'] = $this->input->post('bayar');

					// parameter insert table pembeli
					if ($this->input->post('opsi_pembeli')=="baru") {
						$b['ktp'] = $a['ktp'];
						$b['nama_pembeli'] = $this->input->post('nama');
						$b['alamat_pembeli'] = $this->input->post('alamat');
						$b['telp_pembeli'] = $this->input->post('telepon');

						$ip = $this->app_model->insertPembeli($b);
					}
					else{
						$ip = 1;
					}

					// kalkulasi kredit sekaligus parameter tabel kredit
					$c['ktp'] = $a['ktp'];
					$c['kode_mobil'] = $a['kode_mobil'];
					$c['tgl_kredit'] = date("Y-m-d H:i:s");
					$c['status'] = "Belum Lunas";

					// upload fotokopi
					$conf['upload_path'] = './assets/img/fotokopi';
					$conf['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload',$conf);
					if ($this->upload->do_upload('fk_ktp')) {
						$img = $this->upload->data();
						$c['fotokopi_ktp'] = $img['file_name'];
					}
					if ($this->upload->do_upload('fk_kk')) {
						$img = $this->upload->data();
						$c['fotokopi_kk'] = $img['file_name'];
					}
					if ($this->upload->do_upload('fk_slip_gaji')) {
						$img = $this->upload->data();
						$c['fotokopi_slip_gaji'] = $img['file_name'];
					}


					if ($this->input->post('opsi_bayar') == "cash") {
						$ic = $this->app_model->insertCash($a);
						if ($ip && $ic) {
							$cash_id = $this->app_model->selectMaxCash();
							foreach ($cash_id->result() as $d) {
								$id = $d->kode_cash;
							}
							$mssg = "insert-success";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/transaksi/cash/'.$id);
							//echo $b['ktp'];
						}
						else{
							$mssg = "insert-failed";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/form_transaksi');
						}
					}
					else if ($this->input->post('opsi_bayar') == "kredit") {
						// pehitungan berdasarkan paket
						if ($this->input->post('pilih_kredit') == "1") {
							$detailMobil = $this->app_model->detailMobil($c['kode_mobil']);
							foreach ($detailMobil->result() as $k) {
								$c['uang_muka'] = $k->harga_mobil * 20/100;
								$c['jumlah_cicilan'] = "12";
								$c['bunga'] = ($k->harga_mobil - $c['uang_muka']) * 15/100;
								$c['nilai_cicilan'] = (($k->harga_mobil - $c['uang_muka']) / 12) + $c['bunga']; 
							}
						}
						else if ($this->input->post('pilih_kredit') == "2") {
							$detailMobil = $this->app_model->detailMobil($c['kode_mobil']);
							foreach ($detailMobil->result() as $k) {
								$c['uang_muka'] = $k->harga_mobil * 25/100;
								$c['jumlah_cicilan'] = "24";
								$c['bunga'] = ($k->harga_mobil - $c['uang_muka']) * 20/100;
								$c['nilai_cicilan'] = (($k->harga_mobil - $c['uang_muka']) / 24) + $c['bunga']; 
							}
						}
						else {
							echo "Harus Pilih Paket";
						}
						$ic = $this->app_model->insertKredit($c);
						if ($ip && $ic) {
							$kredit_id = $this->app_model->selectMaxKredit();
							foreach ($kredit_id->result() as $d) {
								$id = $d->kode_kredit;
							}
							$mssg = "insert-success";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/transaksi/kredit/'.$id);
						}
						else{
							$mssg = "insert-failed";
							$this->session->set_flashdata("mssg",$mssg);
							redirect('app/page/form_transaksi');
						}
					}
					else if($this->input->post('opsi_bayar')=="cicilan") {
						$cek = $this->app_model->selectCekPernahCicil($this->input->post('kredit_id'));
						$ci['kode_kredit'] = $this->input->post('kredit_id');
						$getKred = $this->app_model->selectKredit();
						$ci['tgl_cicilan'] = date('Y-m-d H:i:s');
						if ($cek->num_rows > 0) {
							// udah pernah nyicil sebelumnya
							foreach ($getKred->result() as $cz) {
							$ci['jumlah_cicilan'] = $cz->jumlah_cicilan;
							$ci['cicilan_ke'] = $cek->num_rows + 1;
							$ci['cicilan_sisa_ke'] = $cz->jumlah_cicilan - $ci['cicilan_ke'];
							$ci['cicilan_sisa_harga'] = $cz->nilai_cicilan * $cz->jumlah_cicilan - $cz->nilai_cicilan * $ci['cicilan_ke'];
							}
						}
						else{
							// pertama kali nyicil
							foreach ($getKred->result() as $cz) {
								$ci['jumlah_cicilan'] = $cz->jumlah_cicilan;
								$ci['cicilan_ke'] = '1';
								$ci['cicilan_sisa_ke'] = $cz->jumlah_cicilan - $ci['cicilan_ke'];
								$ci['cicilan_sisa_harga'] = ($cz->nilai_cicilan * $ci->jumlah_cicilan) - ($cz->nilai_cicilan * $ci['cicilan_ke']);
							}
							
						}
						$save = $this->app_model->insertCicilan($ci);
						if ($save) {
							echo "Berhasil";
						}
						else{
							echo "Gagal";
						}
					}
					else {

					}
				}
				else{
					$mssg = "unknown-parameter";
					$this->session->set_flashdata("mssg",$mssg);
					redirect('app/page/form_transaksi');
				}
		}
		else{
				$this->load404;
		}
	}
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
	public function ubahPasswordLogin()
	{
		if ($this->session->userdata('level')) {
				if ($this->session->userdata('user_id')) {
					$id = $this->session->userdata('user_id');
					$a = md5($this->input->post('password_lama'));
					$b = md5($this->input->post('password_baru'));
					if ($a && $b) {
						$check = $this->app_model->selectPasswordSama($id,$a);
						if ($check->num_rows() > 0) {
							$d['password'] = $b;
							if ($this->app_model->updatePasswordLogin($d,$id)) {
								$mssg = "update-success";
								$this->session->set_flashdata("mssg",$mssg);
								redirect('app/page/pengaturan/'.$id);
							}
							else{
								$mssg = "update-failed";
								$this->session->set_flashdata("mssg",$mssg);
								redirect('app/page/pengaturan/'.$id);
							}
						}
					}
					else {
						echo "Harus Diisi Semua";
					}

					
				}
		}
		else{
			$this->load404();
		}
	}
	public function backupAllData()
	{
		// untuk membackup data yang ada pada aplikasi
		if ($this->session->userdata('level') == "Admin") {
			$this->load->dbutil(); 
			$prefs = array( 'format' => 'zip', 'filename' => 'db_ci_carsales.sql' ); 
			$backup =& $this->dbutil->backup($prefs); 
			$db_name = 'carsales-app-data-'. date("Y-m-d-H-i-s") .'.zip'; 
			force_download($db_name, $backup);
		}
		else {
			$this->load404();
		} 
	}
}