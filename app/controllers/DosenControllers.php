<?php
require_once "../app/models/Dosen.php";

class DosenController {
    private $dosen;
    
    public function __construct() {
        $this->dosen = new Dosen();
    }
    
    public function index()
    {
        $data_dosen = $this->dosen->list();
        require_once "../app/views/dosen.php";
    }
    
    public function tambah()
    {
        require_once "../app/views/dosen_tambah.php";
    }
    
    public function simpan()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama_lengkap' => $_POST['nama_lengkap'],
                'jenis_kelamin' => $_POST['jenis_kelamin'],
                'asal_prodi' => $_POST['asal_prodi']
            ];
            
            $this->dosen->tambah($data);
            header("Location: ../public/index.php?action=index");
            exit;
        }
    }
    
    public function edit()
    {
        if (isset($_GET['dosen_id'])) {
            $dosen_id = $_GET['dosen_id'];
            $data_dosen = $this->dosen->getById($dosen_id);
            require_once "../app/views/dosen_edit.php";
        } else {
            header("Location: index.php?action=index");
            exit;
        }
    }
    
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'dosen_id' => $_POST['dosen_id'],
                'nama_lengkap' => $_POST['nama_lengkap'],
                'jenis_kelamin' => $_POST['jenis_kelamin'],
                'asal_prodi' => $_POST['asal_prodi']
            ];
            
            $this->dosen->update($data);
            header("Location: index.php?action=index");
            exit;
        }
    }
    
    public function hapus()
    {
        if (isset($_GET['dosen_id'])) {
            $dosen_id = $_GET['dosen_id'];
            $this->dosen->hapus($dosen_id);
            header("Location: index.php?action=index");
            exit;
        } else {
            header("Location: index.php?action=index");
            exit;
        }
    }
}