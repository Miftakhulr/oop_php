<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen | Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk icon-icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="konten-dashboard">
        <!-- Header Dashboard -->
        <div class="kotak">
            <div class="header-dashboard">
                <div>
                    <h2 class="judul-dashboard">Tambah Data Dosen</h2>
                    <p>Lengkapi formulir di bawah ini untuk menambahkan data dosen baru</p>
                </div>
                <a href="../public/index.php?action=index" class="tombol tombol-biru">
                    <i class="fas fa-arrow-left ikon"></i> Kembali
                </a>
            </div>
        </div>

        <!-- Kotak Form -->
        <div class="kotak">
            <form action="../public/index.php?action=simpan" method="post" class="pembungkus-form">
                <div class="grup-form">
                    <label for="nama_lengkap" class="label-form">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="kontrol-form" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="grup-form">
                    <label for="jenis_kelamin" class="label-form">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="kontrol-form pilihan-form" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="grup-form">
                    <label for="asal_prodi" class="label-form">Asal Prodi</label>
                    <select id="asal_prodi" name="asal_prodi" class="kontrol-form pilihan-form" required>
                        <option value="">Pilih Prodi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="PTI">PTI</option>
                        <option value="PBSI">PBSI</option>
                        <option value="PBI">PBI</option>
                        <option value="PAI">PAI</option>
                        <option value="PGMI">PGMI</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                        <option value="Sains Pertanian">Sains Pertanian</option>
                        <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                    </select>
                </div>

                <div class="aksi-form">
                    <button type="submit" class="tombol tombol-hijau">
                        <i class="fas fa-save ikon"></i> Simpan Data
                    </button>
                    <a href="../public/index.php?action=index" class="tombol tombol-merah">
                        <i class="fas fa-times ikon"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>