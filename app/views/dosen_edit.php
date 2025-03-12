<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen | Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk icon -->
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
                    <h2 class="judul-dashboard">Edit Data Dosen</h2>
                    <p>Perbarui informasi dosen: <strong><?php echo $data_dosen['nama_lengkap']; ?></strong></p>
                </div>
                <a href="../public/index.php?action=index" class="tombol tombol-biru">
                    <i class="fas fa-arrow-left ikon"></i> Kembali
                </a>
            </div>
        </div>

        <!-- Kotak Form -->
        <div class="kotak">
            <form action="../public/index.php?action=update" method="post" class="pembungkus-form">
                <input type="hidden" name="dosen_id" value="<?php echo $data_dosen['dosen_id']; ?>">

                <div class="grup-form">
                    <label for="nama_lengkap" class="label-form">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="kontrol-form" value="<?php echo $data_dosen['nama_lengkap']; ?>" required>
                </div>

                <div class="grup-form">
                    <label for="jenis_kelamin" class="label-form">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="kontrol-form pilihan-form" required>
                        <option value="Laki-laki" <?php echo ($data_dosen['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo ($data_dosen['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="grup-form">
                    <label for="asal_prodi" class="label-form">Asal Prodi</label>
                    <select id="asal_prodi" name="asal_prodi" class="kontrol-form pilihan-form" required>
                        <?php
                        $prodi_list = ["Informatika", "PTI", "PBSI", "PBI", "PAI", "PGMI", "Matematika", "Pendidikan Fisika", "Sains Pertanian", "Pendidikan Ekonomi"];
                        foreach ($prodi_list as $prodi) {
                            $selected = ($data_dosen['asal_prodi'] == $prodi) ? 'selected' : '';
                            echo "<option value='$prodi' $selected>$prodi</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="aksi-form">
                    <button type="submit" class="tombol tombol-hijau">
                        <i class="fas fa-check-circle ikon"></i> Update Data
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