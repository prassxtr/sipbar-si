    <aside class="sidebar bg-white text-dark " style="width: max-content; min-width: 300px;">
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
                            <li class="nav-item <?= ($currentPage == 'dashboard') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-grid"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($currentPage == 'katalog') ? 'active' : '' ?>">
                        <a class="nav-link" href="katalog.php">
                            <i class="bi bi-box"></i>
                            <span>Katalog</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($currentPage == 'peminjaman') ? 'active' : '' ?>">
                        <a class="nav-link" href="peminjaman.php">
                            <i class="bi bi-archive"></i>
                            <span>Peminjaman Saya</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($currentPage == 'riwayat') ? 'active' : '' ?>">
                        <a class="nav-link" href="riwayat.php">
                            <i class="bi bi-clock-history"></i>
                            <span>Riwayat</span>
                        </a>
                    </li>

                    <li class="nav-item <?= ($currentPage == 'laporan') ? 'active' : '' ?>">
                        <a class="nav-link" href="riwayat.php">
                            <i class="bi bi-file-earmark-bar-graph me-2"></i>
                            <span>Lapoaran</span>
                        </a>
                    </li>

        </ul>
    </aside>