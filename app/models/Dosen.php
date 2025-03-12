<?php
class Dosen {
    private $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=dosen", "root", "");
    }
    
    public function list() {
        $dosen = $this->db->query("SELECT * FROM dosen");
        return $dosen->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function tambah($data) {
        $query = "INSERT INTO dosen (nama_lengkap, jenis_kelamin, asal_prodi) 
                 VALUES (:nama_lengkap, :jenis_kelamin, :asal_prodi)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_lengkap', $data['nama_lengkap']);
        $stmt->bindParam(':jenis_kelamin', $data['jenis_kelamin']);
        $stmt->bindParam(':asal_prodi', $data['asal_prodi']);
        return $stmt->execute();
    }
    
    public function getById($id) {
        $query = "SELECT * FROM dosen WHERE dosen_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update($data) {
        $query = "UPDATE dosen SET 
                  nama_lengkap = :nama_lengkap, 
                  jenis_kelamin = :jenis_kelamin, 
                  asal_prodi = :asal_prodi 
                  WHERE dosen_id = :dosen_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_lengkap', $data['nama_lengkap']);
        $stmt->bindParam(':jenis_kelamin', $data['jenis_kelamin']);
        $stmt->bindParam(':asal_prodi', $data['asal_prodi']);
        $stmt->bindParam(':dosen_id', $data['dosen_id']);
        return $stmt->execute();
    }
    
    public function hapus($id) {
        $query = "DELETE FROM dosen WHERE dosen_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}