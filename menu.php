<?php
    // Set variabel ini untuk menandai halaman 'active' di navbar
    $currentPage = 'menu';
    include 'partials/header.php';
?>

<section class="py-5" id="menu" style="background: linear-gradient(135deg, #F5FF00 0%, #fff 100%);">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Semua Menu Kami</h2>

        <!-- Menu Categories -->
        <ul class="nav nav-pills justify-content-center mb-5" id="menu-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="paket-tab" data-bs-toggle="pill" data-bs-target="#paket"
                    type="button" role="tab" aria-controls="paket" aria-selected="true">Paket Hemat</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="ayam-tab" data-bs-toggle="pill" data-bs-target="#ayam" type="button"
                    role="tab" aria-controls="ayam" aria-selected="false">Ayam Krispi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="minuman-tab" data-bs-toggle="pill" data-bs-target="#minuman" type="button"
                    role="tab" aria-controls="minuman" aria-selected="false">Minuman</button>
            </li>
        </ul>

        <div class="tab-content" id="menu-tab-content">
            <!-- Paket Hemat -->
            <div class="tab-pane fade show active" id="paket" role="tabpanel" aria-labelledby="paket-tab">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/paket-1.jpeg" alt="Paket Ayam Nasi" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Paket Kerenyes 1</h5>
                                <p class="card-text small text-muted">Nasi + 1 Ayam Krispi (Paha/Dada) + Es Teh</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 25.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="p1"
                                        data-nama="Paket Kerenyes 1" data-harga="25000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <div class="badge bg-warning text-dark position-absolute"
                                style="top: 0.5rem; right: 0.5rem">Promo!</div>
                            <img class="card-img-top" src="assets/img/ayam-geprek.jpg" alt="Kerenyes Burger" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Ayam Geprek</h5>
                                <p class="card-text small text-muted">Sambel Geprek spesial dengan ayam krispi utuh.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">
                                    <span class="text-muted text-decoration-line-through">Rp15.000</span> Rp 14.000
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="p2"
                                        data-nama="Kerenyes Burger" data-harga="14000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/Ayam-1.png" alt="Paket Rame" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Paket Rame-Rame</h5>
                                <p class="card-text small text-muted">3 Ayam + 2 Nasi + 2 Es Teh. Lebih hemat!</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 55.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="p3"
                                        data-nama="Paket Rame-Rame" data-harga="55000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ayam-celup.jpg" alt="Ayam Celup" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Ayam Celup</h5>
                                <p class="card-text small text-muted">1 ayam + Saus Celup
                                </p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 14.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="p4"
                                        data-nama="Paket Keluarga" data-harga="14000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ayam Krispi -->
            <div class="tab-pane fade" id="ayam" role="tabpanel" aria-labelledby="ayam-tab">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ayam-2.jpeg" alt="Ayam Paha" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Ayam Paha Krispi</h5>
                                <p class="card-text small text-muted">1 Potong Ayam Paha Krispi, renyah dan gurih.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 8.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="a1"
                                        data-nama="Ayam Paha Krispi" data-harga="8000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ayam-dada.jpg" alt="Ayam Dada" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Ayam Dada Krispi</h5>
                                <p class="card-text small text-muted">1 Potong Ayam Dada Krispi, juicy di dalam.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 10.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="a2"
                                        data-nama="Ayam Dada Krispi" data-harga="10000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ayam-keju.jpg" alt="Ayam Whole" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Ayam Celup Keju Krispi</h5>
                                <p class="card-text small text-muted">1 Ayam Celup Keju, untuk yang lapar berat.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 14.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="a3"
                                        data-nama="Ayam Whole Krispi" data-harga="14000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Minuman -->
            <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
                <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ESTEH.jpg" alt="Es Teh" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Es Teh Manis</h5>
                                <p class="card-text small text-muted">Teh manis dingin, segar untuk menemani ayam.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 5.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="m1"
                                        data-nama="Es Teh Manis" data-harga="5000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/ESJERUK.jpg" alt="Jus Jeruk" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Jus Jeruk</h5>
                                <p class="card-text small text-muted">Jus jeruk segar, vitamin C untuk kesehatan.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 8.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="m2"
                                        data-nama="Jus Jeruk" data-harga="8000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100 shadow-sm border-0 menu-card">
                            <img class="card-img-top" src="assets/img/KOPI.jpg" alt="Kopi Hitam" />
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold">Kopi Hitam</h5>
                                <p class="card-text small text-muted">Kopi hitam pekat, untuk yang suka kopi.</p>
                                <div class="fs-5 fw-bold mb-3 text-danger">Rp 7.000</div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto btn-add-to-cart" href="#" data-id="m3"
                                        data-nama="Kopi Hitam" data-harga="7000">
                                        <i class="bi bi-plus-lg"></i> Tambah ke Keranjang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'partials/footer.php';
?>