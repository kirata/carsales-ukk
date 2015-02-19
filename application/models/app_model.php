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
}