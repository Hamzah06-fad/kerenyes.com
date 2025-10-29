<?php
    $currentPage = 'promo';
    include 'partials/header.php';
?>

<section class="py-5" id="promo" style="background: linear-gradient(135deg, #F5FF00 0%, #fff 100%);">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 text-danger">Promo Spesial Kerenyes</h2>
        <p class="text-center mb-5">Jangan lewatkan promo menarik kami! Hemat lebih banyak dengan penawaran spesial.</p>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 promo-card">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="assets/img/paket-1.jpeg" class="img-fluid rounded-start" alt="Promo Senin">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Promo Senin Hemat</h5>
                                <p class="card-text">Setiap Senin, beli 2 Paket Kerenyes 1 GRATIS 1 Es Teh Manis.</p>
                                <p class="card-text"><small class="text-muted">Berlaku s/d 30 Nov 2025</small></p>
                                <a href="keranjang.php" class="btn btn-danger btn-sm">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 promo-card">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="assets/img/ayam-potong.png" class="img-fluid rounded-start" alt="Promo Keluarga">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Paket Keluarga</h5>
                                <p class="card-text">5 Ayam, 3 Nasi, 3 Es Teh. Hanya Rp 99.000! Lebih hemat untuk
                                    rame-rame.</p>
                                <p class="card-text"><small class="text-muted">Berlaku setiap hari</small></p>
                                <a href="keranjang.php" class="btn btn-danger btn-sm">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 promo-card">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="assets/img/Ayam-1.png" class="img-fluid rounded-start" alt="Promo Weekend">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Promo Weekend</h5>
                                <p class="card-text">Sabtu & Minggu, diskon 10% untuk semua paket! Minimal pembelian Rp
                                    50.000.</p>
                                <p class="card-text"><small class="text-muted">Berlaku setiap weekend</small></p>
                                <a href="keranjang.php" class="btn btn-danger btn-sm">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-0 promo-card">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="assets/img/OIP (1).jpg" class="img-fluid rounded-start" alt="Promo Student">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold text-danger">Promo Mahasiswa</h5>
                                <p class="card-text">Tampilkan KTM, dapatkan diskon 15% untuk semua menu! Maksimal Rp
                                    20.000.</p>
                                <p class="card-text"><small class="text-muted">Berlaku dengan KTM</small></p>
                                <a href="keranjang.php" class="btn btn-danger btn-sm">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-5">
            <h4 class="fw-bold text-danger">Ingin Promo Lainnya?</h4>
            <p>Ikuti akun sosial media kami untuk update promo terbaru!</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-outline-danger me-2"><i class="bi bi-instagram"></i> Instagram</a>
                <a href="#" class="btn btn-outline-danger"><i class="bi bi-facebook"></i> Facebook</a>
            </div>
        </div>
    </div>
</section>

<?php
    include 'partials/footer.php';
?>