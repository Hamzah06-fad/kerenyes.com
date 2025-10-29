<?php
    // Memasukkan file header (navbar, dll)
    include 'partials/header.php';
?>

<header class="py-5" style="background-color: #F5FF00;">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 fw-bolder">Lapar? Pesan Sekarang!</h1>
                <p class="lead fw-normal text-dark-50 mb-4">Nikmati paket ayam krispi ter-kerenyes se-kota. Dijamin
                    panas, krispi, dan bumbu meresap!</p>
                <a class="btn btn-danger btn-lg px-4" href="menu.php">
                    <i class="bi bi-basket"></i> Lihat Semua Menu
                </a>
            </div>
            <div class="col-md-6 text-center d-none d-md-block">
                <img src="assets/img/logo-1.png" class="img-fluid rounded">
            </div>
        </div>
    </div>
</header>

<section class="py-5" id="menu">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Menu Terlaris</h2>

        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">

            <div class="col mb-5">
                <div class="card h-100 shadow-sm border-0">
                    <img class="card-img-top" src="assets/img/paket-1.jpeg" alt="Paket Ayam Nasi" />
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Paket Kerenyes 1</h5>
                        <p class="card-text small text-muted">Nasi + 1 Ayam Krispi (Paha/Dada)</p>
                        <div class="fs-5 fw-bold mb-3">Rp 17.000</div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-danger mt-auto" href="#"><i class="bi bi-plus-lg"></i> Tambah</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100 shadow-sm border-0">
                    <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">
                        Promo!</div>
                    <img class="card-img-top" src="assets/img/Burger-2.png" alt="Kerenyes Burger" />
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Kerenyes Burger</h5>
                        <p class="card-text small text-muted">Burger spesial dengan patty ayam krispi utuh.</p>
                        <div class="fs-5 fw-bold mb-3">
                            <span class="text-muted text-decoration-line-through">Rp 25.000</span>
                            Rp 22.000
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-danger mt-auto" href="#"><i class="bi bi-plus-lg"></i> Tambah</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100 shadow-sm border-0">
                    <img class="card-img-top" src="assets/img/Ayam-1.png" alt="Paket Rame" />
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold">Paket Rame-Rame</h5>
                        <p class="card-text small text-muted">3 Ayam + 2 Nasi + 2 Es Teh. Lebih hemat!</p>
                        <div class="fs-5 fw-bold mb-3">Rp 55.000</div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-danger mt-auto" href="#"><i class="bi bi-plus-lg"></i> Tambah</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5 bg-light" id="promo">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Kenapa Pilih Kerenyes Chicken?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-award-fill fs-1 text-danger"></i>
                <h4 class="fw-bold my-3">Dijamin Krispi</h4>
                <p class="text-muted">Resep rahasia kami menjamin ayam tetap krispi dan renyah sampai gigitan
                    terakhir.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-truck fs-1 text-danger"></i>
                <h4 class="fw-bold my-3">Pengantaran Cepat</h4>
                <p class="text-muted">Pesan online dan kami antar pesanan Anda dalam 30 menit. Panas dan cepat!</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-patch-check-fill fs-1 text-danger"></i>
                <h4 class="fw-bold my-3">100% Halal</h4>
                <p class="text-muted">Semua bahan baku kami pilih dari supplier terpercaya dan dijamin Halal.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <i class="bi bi-chat-quote-fill fs-1 text-danger mb-3"></i>
            <h2 class="fw-bold">Kata Pelanggan</h2>
            <p class="text-muted">Apa kata mereka yang sudah mencoba Kerenyes Chicken?</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselTestimoni" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselTestimoni" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselTestimoni" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card border-0 shadow-sm mx-auto" style="max-width: 600px;">
                                <div class="card-body text-center p-4">
                                    <p class="fs-5 fst-italic mb-3">"Ayamnya krispi dan bumbunya meresap!
                                        Pengantaran ke Sukabumi juga cepat. Puas banget!"</p>
                                    <h6 class="fw-bold text-danger">- Dimas, Sukabumi</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 shadow-sm mx-auto" style="max-width: 600px;">
                                <div class="card-body text-center p-4">
                                    <p class="fs-5 fst-italic mb-3">"Paket ramenya cocok untuk rame-rame. Hemat dan
                                        enak. Dari Mangga Besar, sering order!"</p>
                                    <h6 class="fw-bold text-danger">- Egi, Mangga Besar</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 shadow-sm mx-auto" style="max-width: 600px;">
                                <div class="card-body text-center p-4">
                                    <p class="fs-5 fst-italic mb-3">"Burgernya juara! Patty ayamnya tebal dan
                                        sausnya banyak. Promo nya juga bagus. Dari Pasar Baru, recommended!"</p>
                                    <h6 class="fw-bold text-danger">- Klaudius, Pasar Baru</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimoni"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimoni"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
    // Memasukkan file footer (info kontak, script)
    include 'partials/footer.php';
?>