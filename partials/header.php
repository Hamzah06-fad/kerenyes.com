<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerenyes Chicken - Pesan Online</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
        // Jika variabel $currentPage belum di-set, set sebagai string kosong
        if (!isset($currentPage)) {
            $currentPage = '';
        }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top" style="background-color: #F5FF00;">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning fs-4" href="index.php">
                <i class="bi bi-chicken-fried"></i> KERENYES CHICKEN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == 'beranda') { echo 'active'; } ?>"
                            href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == 'menu') { echo 'active'; } ?>"
                            href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == 'promo') { echo 'active'; } ?>"
                            href="promo.php">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($currentPage == 'kontak') { echo 'active'; } ?>"
                            href="kontak.php">Kontak</a>
                    </li>
                </ul>
                <a href="keranjang.php" class="btn btn-outline-danger ms-lg-3">
                    <i class="bi bi-cart"></i> Keranjang (<span id="cart-count">0</span>)
                </a>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
    // Tunggu sampai semua halaman HTML selesai dimuat
    document.addEventListener("DOMContentLoaded", function() {

        // 1. Inisialisasi Keranjang
        //    Kita akan simpan data keranjang di 'localStorage'
        //    supaya datanya tidak hilang saat di-refresh.
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        // 2. Seleksi Elemen
        const cartCountElement = document.getElementById('cart-count');
        const allAddButtons = document.querySelectorAll('.btn-add-to-cart');

        // 3. Fungsi untuk Update Tampilan Keranjang
        function updateCartDisplay() {
            // Hitung total item di keranjang
            // (Untuk sekarang, kita hitung jumlah produk unik saja)
            cartCountElement.innerText = cart.length;

            // Simpan data keranjang terbaru ke localStorage
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        // 4. Tambahkan 'Event Listener' ke setiap tombol
        allAddButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                // Mencegah link '#' me-refresh halaman
                event.preventDefault();

                // Ambil data produk dari tombol yang diklik
                const productId = this.dataset.id;
                const productName = this.dataset.nama;
                const productPrice = parseInt(this.dataset.harga); // Ubah jadi angka

                // Cek apakah produk sudah ada di keranjang
                let existingProduct = cart.find(item => item.id === productId);

                if (existingProduct) {
                    // Jika sudah ada, tambahkan jumlahnya (quantity)
                    // (Untuk sekarang kita buat simpel: biarkan saja, atau beri notif)
                    alert(productName + ' sudah ada di keranjang!');
                } else {
                    // Jika belum ada, tambahkan sebagai item baru
                    const product = {
                        id: productId,
                        nama: productName,
                        harga: productPrice,
                        qty: 1 // Tambahkan kuantitas
                    };
                    cart.push(product);

                    // Beri notifikasi
                    alert(productName + ' berhasil ditambahkan!');
                }

                // 5. Update tampilan keranjang
                updateCartDisplay();
            });
        });

        // 6. Update tampilan saat halaman pertama kali dimuat
        updateCartDisplay();
    });
    </script>
</body>

</html>