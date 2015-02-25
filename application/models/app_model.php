<?php 
/**
* Author : Kevin Magdareva 
* Date : February 16, 2015
* Model ini sebagai tempat untuk nampung query-query 
* Semua query untuk mengoperasikan database di tampung disini
*/

class App_model extends CI_Model
{
	public function selectLogin($username,$password)
	{
		$param['username'] = $username;
		$param['password'] = $password;
		$sl = $this->db->get_where('pengguna',$param);
		return $sl;
	}
	public function selectPengguna()
	{
		$sp = $this->db->get('pengguna');
		return $sp;
	}
	public function detailPengguna($id)
	{
		$dm = $this->db->get_where('pengguna',array('kode_pengguna'=>$id));
		return $dm;
	}
	public function insertPengguna($parameter)
	{
		$ip = $this->db->insert('pengguna',$parameter);
		return $ip;
	}
	public function deletePengguna($paramID)
	{
		$dp = $this->db->delete('pengguna',$paramID);
		return $dp;
	}
	public function updatePengguna($param,$id)
	{
		$up = $this->db->update('pengguna',$param,array('kode_pengguna'=>$id));
		return $up;
	}
	public function selectMobil()
	{
		$sp = $this->db->get('mobil');
		return $sp;
	}
	public function detailMobil($id)
	{
		$dm = $this->db->get_where('mobil',array('kode_mobil'=>$id));
		return $dm;
	}
	public function insertMobil($parameter)
	{
		$ip = $this->db->insert('mobil',$parameter);
		return $ip;
	}
	public function deleteMobil($paramID)
	{
		$dp = $this->db->delete('mobil',$paramID);
		return $dp;
	}
	public function updateMobil($param,$id)
	{
		$up = $this->db->update('mobil',$param,array('kode_mobil'=>$id));
		return $up;
	}
	public function selectPaketKredit()
	{
		$sp = $this->db->get('paket_kredit');
		return $sp;
	}
	public function insertPaketKredit($parameter)
	{
		$ip = $this->db->insert('paket_kredit',$parameter);
		return $ip;
	}
	public function deletePaketKredit($paramID)
	{
		$dp = $this->db->delete('paket_kredit',$paramID);
		return $dp;
	}
	public function updatePaketKredit($param,$id)
	{
		$up = $this->db->update('paket_kredit',$param,$id);
		return $up;
	}

	public function selectPembeli()
	{
		$sp = $this->db->get('pembeli');
		return $sp;
	}
	public function insertPembeli($parameter)
	{
		$ip = $this->db->insert('pembeli',$parameter);
		return $ip;
	}
	public function deletePembeli($paramID)
	{
		$dp = $this->db->delete('pembeli',$paramID);
		return $dp;
	}
	public function updatePembeli($param,$id)
	{
		$up = $this->db->update('pembeli',$param,$id);
		return $up;
	}
	public function selectCash()
	{
		$sp = $this->db->get('beli_cash');
		return $sp;
	}
	public function insertCash($parameter)
	{
		$ip = $this->db->insert('beli_cash',$parameter);
		return $ip;
	}
	public function deleteCash($paramID)
	{
		$dp = $this->db->delete('beli_cash',$paramID);
		return $dp;
	}
	public function updateCash($param,$id)
	{
		$up = $this->db->update('beli_cash',$param,$id);
		return $up;
	}

	public function selectMaxCash()
	{
		$this->db->select_max('kode_cash');
		$smc = $this->db->get('beli_cash');
		return $smc;
	}
	public function selectCompleteCash()
	{
		$this->db->select('*');
		$this->db->from('beli_cash');
		$this->db->join('mobil', 'mobil.kode_mobil = beli_cash.kode_mobil');
		$this->db->join('pembeli', 'pembeli.ktp = beli_cash.ktp');

		$scc = $this->db->get();
		return $scc;
	}
	public function selectCompleteDetailCash($id)
	{
		$this->db->select('*');
		$this->db->from('beli_cash');
		$this->db->join('mobil', 'mobil.kode_mobil = beli_cash.kode_mobil');
		$this->db->join('pembeli', 'pembeli.ktp = beli_cash.ktp');
		$this->db->where('kode_cash',$id);

		$scdc = $this->db->get();
		return $scdc;
	}
	public function selectKredit()
	{
		$sp = $this->db->get('beli_kredit');
		return $sp;
	}
	public function insertKredit($parameter)
	{
		$ip = $this->db->insert('beli_kredit',$parameter);
		return $ip;
	}
	public function deleteKredit($paramID)
	{
		$dp = $this->db->delete('beli_kredit',$paramID);
		return $dp;
	}
	public function updateKredit($param,$id)
	{
		$up = $this->db->update('beli_kredit',$param,$id);
		return $up;
	}
	public function selectMaxKredit()
	{
		$this->db->select_max('kode_kredit');
		$smc = $this->db->get('beli_kredit');
		return $smc;
	}
	public function selectCompleteKredit()
	{
		$this->db->select('*');
		$this->db->from('beli_kredit');
		$this->db->join('mobil', 'mobil.kode_mobil = beli_kredit.kode_mobil');
		$this->db->join('pembeli', 'pembeli.ktp = beli_kredit.ktp');

		$scdc = $this->db->get();
		return $scdc;
	}
	public function selectActiveKredit()
	{
		$this->db->select('*');
		$this->db->from('beli_kredit');
		$this->db->join('mobil', 'mobil.kode_mobil = beli_kredit.kode_mobil');
		$this->db->join('pembeli', 'pembeli.ktp = beli_kredit.ktp');
		$this->db->where('status','Belum Lunas');

		$scdc = $this->db->get();
		return $scdc;
	}
	public function selectCompleteDetailKredit($id)
	{
		$this->db->select('*');
		$this->db->from('beli_kredit');
		$this->db->join('mobil', 'mobil.kode_mobil = beli_kredit.kode_mobil');
		$this->db->join('pembeli', 'pembeli.ktp = beli_kredit.ktp');
		$this->db->where('kode_kredit',$id);

		$scdc = $this->db->get();
		return $scdc;
	}
	public function selectCicilan()
	{
		$sp = $this->db->get('bayar_cicilan');
		return $sp;
	}
	public function detailCicilan($id)
	{
		$dm = $this->db->get_where('bayar_cicilan',array('kode_cicilan'=>$id));
		return $dm;
	}
	public function insertCicilan($parameter)
	{
		$ip = $this->db->insert('bayar_cicilan',$parameter);
		return $ip;
	}
	public function deleteCicilan($paramID)
	{
		$dp = $this->db->delete('bayar_cicilan',$paramID);
		return $dp;
	}
	public function updateCicilan($param,$id)
	{
		$up = $this->db->update('bayar_cicilan',$param,array('kode_cicilan'=>$id));
		return $up;
	}
	public function selectCompleteCicilan()
	{
		$this->db->select('*');
		$this->db->from('bayar_cicilan');
		$this->db->join('beli_kredit', 'bayar_cicilan.kode_kredit = beli_kredit.kode_kredit');
		$this->db->join('pembeli', 'pembeli.ktp = beli_kredit.ktp');

		$scdc = $this->db->get();
		return $scdc;
	}

	public function selectCekPernahCicil($id)
	{
		$scpc = $this->db->get_where('bayar_cicilan',array('kode_kredit'=>$id));
		return $scpc;
	}
	public function selectAllMerk()
	{
		$sam = $this->db->query("SELECT DISTINCT kode_mobil,merk FROM mobil");
		return $sam;
	}
	public function selectPasswordSama($id,$opw)
	{
		$sp = $this->db->get_where('pengguna',array('kode_pengguna'=>$id,'password'=>$opw));
		return $sp;
	}
	public function updatePasswordLogin($param,$id)
	{
		$up = $this->db->update('pengguna',$param,array('kode_pengguna'=>$id));
		return $up;
	}
}