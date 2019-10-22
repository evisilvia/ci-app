<?php 

class Kerudung_model extends CI_model{
	public function getAllKerudung(){
		// $query = $this->db->get('mahasiswa');
		// return $query->result();
		return $this->db->get('kerudung')->result_array();
		

	}

	public function tambahDataKerudung(){
		$data = [
			"nama" => $this->input->post('nama',true),
			"stok" => $this->input->post('stok', true),
			"harga" => $this->input->post('harga', true),
			"bahan" => $this->input->post('bahan', true),
			"warna" => $this->input->post('warna', true),
			"ukuran" => $this->input->post('ukuran', true),
		];

		$this->db->insert("kerudung", $data);

	} 

	public function hapusDataKerudung($id){
		$this->db->where('id', $id);
		$this->db->delete('kerudung');
	}

	public function getKerudungById($id){
		return $this->db->get_where('kerudung', ['id' => $id])->row_array();
	}
	public function ubahDataKerudung(){
		$data = [
			"nama" => $this->input->post('nama',true),
			"stok" => $this->input->post('stok', true),
			"harga" => $this->input->post('harga', true),
			"bahan" => $this->input->post('bahan', true),
			"warna" => $this->input->post('warna', true),
			"ukuran" => $this->input->post('ukuran', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update("kerudung", $data);

	} 

public function cariDataKerudung(){
	$keyword = $this->input->post('keyword', true);
	$this->db->like('nama', $keyword);
	$this->db->or_like('stok', $keyword);
	$this->db->or_like('harga', $keyword);
	$this->db->or_like('bahan', $keyword);
	$this->db->or_like('warna', $keyword);
	$this->db->or_like('ukuran', $keyword);
	return $this->db->get('kerudung')->result_array();
}


	
}

 ?>