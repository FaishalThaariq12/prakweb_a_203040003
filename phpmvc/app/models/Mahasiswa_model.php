<?php

class Mahasiswa_model
{
  // database handler
  private $dbh;
  private $stmt;

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  // private $mhs = [
  //     [
  //         "nama" => "M. Faishal Thariqulhaq",
  //         "nrp" => "203040003",
  //         "email" => "isalthoriq@gmail.com",
  //         "jurusan" => "Teknik Informatika"
  //     ],
  //     [
  //         "nama" => "Maestro",
  //         "nrp" => "203040001",
  //         "email" => "Maestro@gmail.com",
  //         "jurusan" => "Teknik Lingkungan"
  //     ],
  //     [
  //         "nama" => "Mamang daya",
  //         "nrp" => "203040002",
  //         "email" => "MamangD@gmail.com",
  //         "jurusan" => "Teknik Industri"
  //     ],
  //     [
  //         "nama" => "Poppy",
  //         "nrp" => "203040026",
  //         "email" => "Poppy@gmail.com",
  //         "jurusan" => "Teknik Mesin"
  //     ],
  //     ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
