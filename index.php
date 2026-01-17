<?php
$currentPage = 'dashboard';
include 'includes/head.php';
?>


<div class="d-flex">

    <?php include 'includes/sidebar.php'; ?>

    <main class="flex-fill">

        <?php include 'includes/navbar.php'; ?>

        <div class="container-fluid p-4">
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
        </div>

    </main>
</div>

<?php include 'includes/footer.php'; ?>
