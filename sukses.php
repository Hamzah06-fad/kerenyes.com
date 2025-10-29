<?php
    $currentPage = 'sukses';
    include 'partials/header.php';
?>

<section class="py-5" id="sukses"
    style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); min-height: 70vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 text-center success-card">
                    <div class="card-body p-5">
                        <!-- Success Icon with Animation -->
                        <div class="success-icon mb-4">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 100px;"></i>
                        </div>

                        <!-- Main Message -->
                        <h1 class="fw-bold text-success mb-3">Pesanan Berhasil Dibuat!</h1>
                        <p class="lead text-muted mb-4">
                            Terima kasih telah memesan di <span class="fw-bold text-danger">Kerenyes Chicken</span>.<br>
                            Pesanan Anda sedang kami siapkan dengan penuh cinta dan akan segera diantar ke alamat Anda.
                        </p>

                        <!-- Order Number -->
                        <div class="order-number bg-light p-4 rounded mb-4">
                            <h5 class="fw-bold text-muted mb-2">Nomor Pesanan Anda:</h5>
                            <h2 class="fw-bold text-danger mb-0" id="order-number">
                                KYC-<?php echo date('Ymd') . '-' . rand(1000, 9999); ?></h2>
                            <small class="text-muted">Simpan nomor ini untuk tracking pesanan</small>
                        </div>

                        <!-- Order Details -->
                        <div class="order-details text-start mb-4">
                            <h6 class="fw-bold mb-3">Detail Pesanan:</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Waktu Pesan:</strong> <span
                                            id="order-time"><?php echo date('d M Y, H:i'); ?> WIB</span></p>
                                    <p class="mb-1"><strong>Estimasi Pengiriman:</strong> 30-45 menit</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Status:</strong> <span class="badge bg-success">Sedang
                                            Diproses</span></p>
                                    <p class="mb-0"><strong>Metode Pembayaran:</strong> <span
                                            id="payment-method">COD</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <a href="menu.php" class="btn btn-danger btn-lg w-100 fw-bold">
                                        <i class="bi bi-plus-circle me-2"></i>Pesan Lagi
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="index.php" class="btn btn-outline-secondary btn-lg w-100 fw-bold">
                                        <i class="bi bi-house me-2"></i>Kembali ke Beranda
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                        <div class="additional-info mt-4 pt-4 border-top">
                            <div class="row text-center">
                                <div class="col-md-4 mb-3">
                                    <i class="bi bi-telephone-fill text-danger fs-3 mb-2"></i>
                                    <p class="small text-muted mb-0">Butuh Bantuan?</p>
                                    <a href="tel:+62211234567" class="text-danger fw-semibold">021-123-4567</a>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <i class="bi bi-whatsapp text-success fs-3 mb-2"></i>
                                    <p class="small text-muted mb-0">Chat WhatsApp</p>
                                    <a href="https://wa.me/6281234567890" class="text-success fw-semibold"
                                        target="_blank">0812-3456-7890</a>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <i class="bi bi-envelope-fill text-primary fs-3 mb-2"></i>
                                    <p class="small text-muted mb-0">Email Support</p>
                                    <a href="mailto:support@kerenyeschicken.com"
                                        class="text-primary fw-semibold">support@kerenyeschicken.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Message -->
                        <div class="footer-message mt-4">
                            <p class="text-muted small mb-0">
                                Terima kasih atas kepercayaan Anda kepada Kerenyes Chicken.<br>
                                Kami berharap Anda menikmati setiap gigitan ayam krispi kami!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="menu.php" class="btn btn-danger btn-lg">Pesan Lagi</a>
<a href="index.php" class="btn btn-outline-secondary btn-lg">Kembali ke Beranda</a>

</div>
</section>

<script>
// Ini akan membersihkan keranjang setelah pesanan berhasil
// Sehingga jika pengguna belanja lagi, keranjangnya sudah kosong.
document.addEventListener("DOMContentLoaded", function() {
    localStorage.removeItem('cart');

    // Update hitungan di header (jika ada)
    const cartCountElement = document.getElementById('cart-count');
    if (cartCountElement) {
        cartCountElement.innerText = '0';
    }
});
</script>
<?php
    include 'partials/footer.php';
?>