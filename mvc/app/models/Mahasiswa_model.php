<?php
class Mahasiswa_model
{
  // database handler
  private $dbh;
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=mvc';
    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
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
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
