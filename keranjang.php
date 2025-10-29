<?php
    $currentPage = 'keranjang'; // Meskipun bukan di nav utama, ini bisa dipakai
    include 'partials/header.php';
?>

<section class="py-5" id="keranjang">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Keranjang Belanja Anda</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Kuantitas</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody id="cart-items-list">
                        </tbody>
                    </table>
                </div>
                <div id="cart-empty-message" class="alert alert-info" style="display: none;">
                    Keranjang Anda masih kosong. Yuk, <a href="menu.php">mulai belanja</a>!
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Ringkasan Pesanan</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal Produk</span>
                            <span id="cart-subtotal">Rp 0</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Biaya Layanan</span>
                            <span>Rp 2.000</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold fs-5 mb-3">
                            <span>Total Bayar</span>
                            <span id="cart-total" class="text-danger">Rp 2.000</span>
                        </div>
                        <div class="d-grid">
                            <a href="pembayaran.php"><button class="btn btn-danger btn-lg">Lanjut ke
                                    Pembayaran</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Cek apakah kita ada di halaman keranjang
    const cartItemsList = document.getElementById('cart-items-list');
    if (cartItemsList) {

        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const subtotalElement = document.getElementById('cart-subtotal');
        const totalElement = document.getElementById('cart-total');
        const emptyMessage = document.getElementById('cart-empty-message');
        const serviceFee = 2000; // Biaya layanan

        // Fungsi untuk format mata uang
        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(angka);
        }

        function renderCart() {
            // Kosongkan daftar
            cartItemsList.innerHTML = '';

            if (cart.length === 0) {
                emptyMessage.style.display = 'block';
            } else {
                emptyMessage.style.display = 'none';
            }

            let calculatedSubtotal = 0;

            cart.forEach((item, index) => {
                let itemSubtotal = item.harga * item.qty;
                calculatedSubtotal += itemSubtotal;

                let row = `
                    <tr data-index="${index}">
                        <td>
                            <div class="fw-bold">${item.nama}</div>
                        </td>
                        <td>${formatRupiah(item.harga)}</td>
                        <td>
                            <input type="number" class="form-control qty-input" value="${item.qty}" style="width: 70px;" min="1" data-index="${index}">
                        </td>
                        <td class="fw-bold">${formatRupiah(itemSubtotal)}</td>
                        <td><button class="btn btn-sm btn-outline-danger remove-btn" data-index="${index}"><i class="bi bi-trash"></i></button></td>
                    </tr>
                `;
                cartItemsList.innerHTML += row;
            });

            // Update Total
            let calculatedTotal = calculatedSubtotal + serviceFee;
            subtotalElement.innerText = formatRupiah(calculatedSubtotal);
            totalElement.innerText = formatRupiah(calculatedTotal);

            // Attach event listeners after rendering
            attachEventListeners();
        }

        function attachEventListeners() {
            // Event listener for quantity changes
            document.querySelectorAll('.qty-input').forEach(input => {
                input.addEventListener('change', function() {
                    const index = parseInt(this.dataset.index);
                    const newQty = parseInt(this.value);
                    if (newQty > 0) {
                        cart[index].qty = newQty;
                        localStorage.setItem('cart', JSON.stringify(cart));
                        renderCart();
                    } else {
                        alert('Kuantitas harus lebih dari 0');
                        this.value = cart[index].qty;
                    }
                });
            });

            // Event listener for remove buttons
            document.querySelectorAll('.remove-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const index = parseInt(this.dataset.index);
                    cart.splice(index, 1);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                });
            });
        }

        // Panggil fungsi saat halaman dimuat
        renderCart();
    }
});
</script>

<?php
    include 'partials/footer.php';
?>