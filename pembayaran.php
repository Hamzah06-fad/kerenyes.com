<?php
    $currentPage = 'pembayaran'; // Halaman ini tidak ada di nav, tapi untuk logika
    include 'partials/header.php';
?>

<section class="py-5 bg-light" id="pembayaran">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-center fw-bold mb-5 text-danger">Checkout Pembayaran</h2>
                <p class="text-center text-muted mb-5">Lengkapi detail pesanan Anda untuk melanjutkan pembayaran.</p>
            </div>
        </div>

        <form id="checkout-form">
            <div class="row g-4">
                <!-- Form Section -->
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 mb-4 checkout-card">
                        <div class="card-body p-4">
                            <!-- Step 1: Customer Details -->
                            <div class="step-section mb-4">
                                <div class="step-header d-flex align-items-center mb-3">
                                    <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; font-weight: bold;">1</div>
                                    <h5 class="fw-bold ms-3 mb-0">Detail Pelanggan</h5>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="namaPelanggan" class="form-label fw-semibold">Nama Lengkap *</label>
                                        <input type="text" class="form-control form-control-lg" id="namaPelanggan"
                                            placeholder="Masukkan nama lengkap" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="hpPelanggan" class="form-label fw-semibold">Nomor WhatsApp *</label>
                                        <input type="tel" class="form-control form-control-lg" id="hpPelanggan"
                                            placeholder="0812-3456-7890" required>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Step 2: Delivery Address -->
                            <div class="step-section mb-4">
                                <div class="step-header d-flex align-items-center mb-3">
                                    <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; font-weight: bold;">2</div>
                                    <h5 class="fw-bold ms-3 mb-0">Alamat Pengiriman</h5>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatPelanggan" class="form-label fw-semibold">Alamat Lengkap *</label>
                                    <textarea class="form-control form-control-lg" id="alamatPelanggan" rows="3"
                                        placeholder="Jl. Contoh No. 123, RT/RW 01/02, Kelurahan, Kecamatan, Kota"
                                        required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="catatanPesanan" class="form-label fw-semibold">Catatan Pesanan
                                        (Opsional)</label>
                                    <textarea class="form-control form-control-lg" id="catatanPesanan" rows="2"
                                        placeholder="Contoh: Paha atas, jangan pakai saus, dll."></textarea>
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Step 3: Payment Method -->
                            <div class="step-section">
                                <div class="step-header d-flex align-items-center mb-3">
                                    <div class="step-number bg-danger text-white rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; font-weight: bold;">3</div>
                                    <h5 class="fw-bold ms-3 mb-0">Metode Pembayaran</h5>
                                </div>
                                <div class="payment-methods">
                                    <div class="form-check mb-3 p-3 border rounded payment-option" data-method="cod">
                                        <input class="form-check-input" type="radio" name="metodePembayaran"
                                            id="bayarCOD" value="COD" checked>
                                        <label class="form-check-label d-flex align-items-center" for="bayarCOD">
                                            <i class="bi bi-cash-coin fs-4 text-success me-3"></i>
                                            <div>
                                                <strong>Bayar di Tempat (COD)</strong>
                                                <br><small class="text-muted">Bayar tunai saat pesanan tiba</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-3 p-3 border rounded payment-option"
                                        data-method="ewallet">
                                        <input class="form-check-input" type="radio" name="metodePembayaran"
                                            id="bayarEwallet" value="Ewallet">
                                        <label class="form-check-label d-flex align-items-center" for="bayarEwallet">
                                            <i class="bi bi-qr-code fs-4 text-primary me-3"></i>
                                            <div>
                                                <strong>E-Wallet</strong>
                                                <br><small class="text-muted">Gopay, OVO, ShopeePay, Dana</small>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check mb-3 p-3 border rounded payment-option"
                                        data-method="transfer">
                                        <input class="form-check-input" type="radio" name="metodePembayaran"
                                            id="bayarTransfer" value="Transfer">
                                        <label class="form-check-label d-flex align-items-center" for="bayarTransfer">
                                            <i class="bi bi-bank fs-4 text-info me-3"></i>
                                            <div>
                                                <strong>Virtual Account Bank</strong>
                                                <br><small class="text-muted">BCA, BNI, Mandiri, BRI</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 sticky-top" style="top: 20px;">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-4 text-danger">
                                <i class="bi bi-receipt me-2"></i>Ringkasan Pesanan
                            </h5>

                            <div id="ringkasan-item" class="mb-4">
                                <!-- Items will be populated by JavaScript -->
                            </div>

                            <hr class="my-3">

                            <div class="summary-breakdown">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Subtotal Produk</span>
                                    <span id="ringkasan-subtotal" class="fw-semibold">Rp 0</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Biaya Pengiriman</span>
                                    <span id="ringkasan-ongkir" class="fw-semibold">Rp 5.000</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Biaya Layanan</span>
                                    <span id="ringkasan-layanan" class="fw-semibold">Rp 2.000</span>
                                </div>
                            </div>

                            <hr class="my-3">

                            <div class="d-flex justify-content-between fw-bold fs-5 mb-4">
                                <span>Total Pembayaran</span>
                                <span id="ringkasan-total" class="text-danger">Rp 7.000</span>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-lg fw-bold" id="submit-btn">
                                    <i class="bi bi-check-circle me-2"></i>Buat Pesanan
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <small class="text-muted">
                                    Dengan melanjutkan, Anda menyetujui <a href="#" class="text-danger">Syarat &
                                        Ketentuan</a> kami.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            document.addEventListener("DOMContentLoaded", function() {

                // Ambil data dari keranjang
                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                // Seleksi elemen di ringkasan
                const ringkasanItemEl = document.getElementById('ringkasan-item');
                const ringkasanSubtotalEl = document.getElementById('ringkasan-subtotal');
                const ringkasanOngkirEl = document.getElementById('ringkasan-ongkir');
                const ringkasanLayananEl = document.getElementById('ringkasan-layanan');
                const ringkasanTotalEl = document.getElementById('ringkasan-total');
                const checkoutForm = document.getElementById('checkout-form');

                // Biaya-biaya
                const ongkir = 5000;
                const layanan = 2000;

                // Fungsi format Rupiah
                function formatRupiah(angka) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(angka);
                }

                // Fungsi untuk render ringkasan
                function renderRingkasan() {
                    // Kosongkan daftar item
                    ringkasanItemEl.innerHTML = '';

                    let calculatedSubtotal = 0;

                    if (cart.length === 0) {
                        ringkasanItemEl.innerHTML =
                            '<div class="alert alert-warning small">Keranjang Anda kosong.</div>';
                        checkoutForm.querySelector('button[type="submit"]').disabled = true; // Matikan tombol
                    }

                    cart.forEach(item => {
                        let itemSubtotal = item.harga * item.qty;
                        calculatedSubtotal += itemSubtotal;

                        let itemHtml = `
                <div class="d-flex justify-content-between small mb-1">
                    <span>${item.nama} (x${item.qty})</span>
                    <span class="fw-bold">${formatRupiah(itemSubtotal)}</span>
                </div>
            `;
                        ringkasanItemEl.innerHTML += itemHtml;
                    });

                    // Hitung Total
                    let calculatedTotal = calculatedSubtotal + ongkir + layanan;

                    // Tampilkan di HTML
                    ringkasanSubtotalEl.innerText = formatRupiah(calculatedSubtotal);
                    ringkasanOngkirEl.innerText = formatRupiah(ongkir);
                    ringkasanLayananEl.innerText = formatRupiah(layanan);
                    ringkasanTotalEl.innerText = formatRupiah(calculatedTotal);
                }

                // Panggil fungsi saat halaman dimuat
                renderRingkasan();

                // === SIMULASI PROSES PESANAN ===
                checkoutForm.addEventListener('submit', function(event) {
                    // Mencegah form mengirim data (karena ini cuma simulasi)
                    event.preventDefault();

                    // Validasi simpel
                    const nama = document.getElementById('namaPelanggan').value;
                    const hp = document.getElementById('hpPelanggan').value;
                    const alamat = document.getElementById('alamatPelanggan').value;

                    if (nama === '' || hp === '' || alamat === '') {
                        alert('Mohon isi Nama, HP, dan Alamat dengan lengkap.');
                        return;
                    }

                    // --- SIMULASI BERHASIL ---
                    alert('Pesanan Berhasil Dibuat!\nKami akan segera memproses pesanan Anda.');

                    // 1. Kosongkan keranjang di localStorage
                    localStorage.removeItem('cart');

                    // 2. Pindahkan pengguna ke halaman "Sukses"
                    window.location.href = 'sukses.php';
                });

            });
            </script>

            <?php
    include 'partials/footer.php';
?>