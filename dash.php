<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SIPBAR-SI | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>

    <div class="d-flex">

    <!-- Sidebar -->
    <aside class="sidebar bg-white text-dark " style="width: 300px;">
<div class="p-3 border-bottom">
    <div class="d-flex align-items-center gap-2">
        <img src="assets/img/Background.svg" alt="Logo SIPBAR-SI" class="app-logo">
        <div>
        <h5 class="fw-bold mb-0">SIPBAR-SI</h5>
        </div>
    </div>
</div>


        <ul class="nav flex-column p-2">
        <li class="nav-item">
            <div class="d-flex align-items-center gap-3 p-3">
                <img 
                    src="assets/img/avatar.jpg" 
                    alt="Foto Profil" 
                    class="profile-avatar"
                >

                <div>
                    <h5 class="fw-bold mb-1">Budi Santoso</h5>
                    <span class="text-primary fw-medium">Mahasiswa - SI</span>
                </div>
                </div>

        </li>
        <li class="nav-item">
            <a class="nav-link active text-dark" href="#">
            <i class="bi bi-columns-gap me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">
            <i class="bi bi-box-seam me-2"></i> Katalog Barang
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">
            <i class="bi bi-journal-text me-2"></i> Peminjaman
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">
            <i class="bi bi-arrow-repeat me-2"></i> Pengembalian
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#">
            <i class="bi bi-file-earmark-bar-graph me-2"></i> Laporan
            </a>
        </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-fill">

        <!-- Topbar -->
        <nav class="navbar navbar-light bg-white shadow-sm px-4">
        <span class="navbar-text fw-semibold">
            Dashboard
        </span>
        <form class="d-flex m-1">
            <input class="form-control me-2" type="text" placeholder="Cari barang...">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        </nav>

        <!-- Content -->
        <div class="container-fluid p-4">

        <!-- Cards -->
        <div class="row g-3 mb-4">
        
            <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                <h6>Peminjaman Aktif</h6>
                <h3 class="fw-bold">18</h3>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                <h6>Menunggu Persetujuan</h6>
                <h3 class="fw-bold">18</h3>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                <h6>Sudah Dikembalikan</h6>
                <h3 class="fw-bold">35</h3>
                </div>
            </div>
            </div>
            
<div class="col-md-12">
    <div class="card shadow-sm" style="background-color: #EAEEF7;">
        <div class="card-body d-flex justify-content-between align-items-center">
            
            <!-- Bagian Teks -->
            <div>
                <h6 class="fw-bold mb-1">Ingin Meminjam Sesuatu?</h6>
                <p class="card-text mb-0">
                    Butuh proyektor, kunci laboratorium, atau ruang rapat?
                    Ajukan permintaan peminjaman Anda di sini untuk proses yang lebih cepat.
                </p>
            </div>

            <!-- Tombol -->
            <a href="#" class="btn btn-primary">
                Ajukan Peminjaman
            </a>

        </div>
    </div>
</div>


        </div>

        <!-- Table -->
        <div class="card shadow-sm">
            <div class="card-header bg-white fw-semibold">
            Peminjaman Terbaru
            </div>
            <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-light">
                <tr>
                    <th>Barang</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><i class="bi bi-camera me-2"></i> Kamera</td>
                    <td>12-01-2026</td>
                    <td><span class="badge bg-warning">Menunggu</span></td>
                </tr>
                <tr>
                    <td><i class="bi bi-laptop me-2"></i> Laptop</td>
                    <td>11-01-2026</td>
                    <td><span class="badge bg-success">Disetujui</span></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>

        </div>
    </main>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
