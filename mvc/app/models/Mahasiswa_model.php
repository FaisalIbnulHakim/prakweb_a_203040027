<?php
class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // private $mhs = [
  //   [
  //     "nama" => "Faisal",
  //     "nrp" => "202201",
  //     "email" => "Faisal@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ],
  //   [
  //     "nama" => "Ibnul",
  //     "nrp" => "202202",
  //     "email" => "Ibnul@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ],
  //   [
  //     "nama" => "Hakim",
  //     "nrp" => "202203",
  //     "email" => "Hakim@unpas.ac.id",
  //     "jurusan" => "Informatika"
  //   ]
  // ];
  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM mahasiswa ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}
