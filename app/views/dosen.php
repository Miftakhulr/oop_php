<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen | Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="konten-dashboard">
        <!-- Header Halaman -->
        <div class="kotak">
            <div class="header-dashboard">
                <div>
                    <h2 class="judul-dashboard">Data Dosen</h2>
                    <p>Kelola data dosen fakultas dengan mudah</p>
                </div>
                <a href="../public/index.php?action=tambah" class="tombol tombol-hijau">
                    <i class="fas fa-plus ikon"></i> Tambah Data Dosen
                </a>
            </div>
        </div>

        <!-- Isi Utama -->
        <div class="kotak">
            <div class="pembungkus-tabel">
                <table>
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Prodi</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($data_dosen)): ?>
                            <tr>
                                <td colspan="5" class="data-kosong">
                                    <div>
                                        <i class="fas fa-folder-open" style="font-size: 48px; opacity: 0.3; margin-bottom: 16px;"></i>
                                        <p>Belum ada data dosen yang tersedia</p>
                                    </div>
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php $counter = 1; ?>
                            <?php foreach ($data_dosen as $dosen): ?>
                                <tr>
                                    <td><?php echo $counter; ?></td>
                                    <td>
                                        <strong><?php echo $dosen['nama_lengkap']; ?></strong>
                                    </td>
                                    <td>
                                        <?php if ($dosen['jenis_kelamin'] == 'Laki-laki'): ?>
                                            <span class="label label-cowo">
                                                <i class="fas fa-mars"></i> Laki-laki
                                            </span>
                                        <?php else: ?>
                                            <span class="label label-cewe">
                                                <i class="fas fa-venus"></i> Perempuan
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $dosen['asal_prodi']; ?></td>
                                    <td class="kolom-aksi">
                                        <a href="../public/index.php?action=edit&dosen_id=<?php echo $dosen['dosen_id']; ?>" class="tombol tombol-biru">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="../public/index.php?action=hapus&dosen_id=<?php echo $dosen['dosen_id']; ?>"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            class="tombol tombol-merah">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                                <?php $counter++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>