// File: app.js
// Ini adalah "otak" untuk semua fungsi keranjang di website Anda.

// Fungsi untuk memformat angka menjadi Rupiah
function formatRupiah(angka) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(angka);
}

// Tunggu hingga seluruh halaman web (HTML) selesai dimuat
document.addEventListener("DOMContentLoaded", function() {

    // --- INISIALISASI ---
    // Ambil data keranjang dari localStorage, atau buat array kosong jika tidak ada
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartCountElement = document.getElementById('cart-count');

    // --- FUNGSI UTAMA KERANJANG ---

    // 1. Fungsi untuk MENYIMPAN keranjang ke localStorage
    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // 2. Fungsi untuk UPDATE hitungan di ikon keranjang (di header)
    function updateCartCount() {
        if (cartCountElement) {
            let totalItems = 0;
            // Kita hitung total kuantitas, bukan cuma jumlah produk
            cart.forEach(item => {
                totalItems += item.qty;
            });
            cartCountElement.innerText = totalItems;
        }
    }

    // 3. Fungsi untuk MENAMBAHKAN item ke keranjang
    function addToCart(id, nama, harga) {
        // Cek apakah produk sudah ada di keranjang
        let existingProduct = cart.find(item => item.id === id);

        if (existingProduct) {
            // Jika sudah ada, tambahkan jumlahnya (quantity)
            existingProduct.qty += 1;
        } else {
            // Jika belum ada, tambahkan sebagai item baru
            const product = { id: id, nama: nama, harga: harga, qty: 1 };
            cart.push(product);
        }
        
        saveCart();         // Simpan ke localStorage
        updateCartCount();  // Update angka di header
        alert(nama + ' berhasil ditambahkan ke keranjang!');
    }

    // 4. Fungsi untuk MENGHAPUS item dari keranjang
    function removeItemFromCart(id) {
        // Buat ulang array 'cart' tanpa item yang matching dengan id
        cart = cart.filter(item => item.id !== id);
        saveCart();         // Simpan
        updateCartCount();  // Update header
        
        // PENTING: Render ulang halaman keranjang jika kita ada di sana
        if (document.getElementById('cart-items-list')) {
            renderCartPage();
        }
    }

    // 5. Fungsi untuk UPDATE KUANTITAS item di keranjang
    function updateQuantity(id, newQty) {
        let product = cart.find(item => item.id === id);
        if (product) {
            product.qty = newQty; // Ubah kuantitasnya
        }
        saveCart();
        updateCartCount();
        
        // Render ulang halaman keranjang
        if (document.getElementById('cart-items-list')) {
            renderCartPage();
        }
    }

    // 6. Fungsi untuk MERENDER/MENAMPILKAN halaman keranjang
    function renderCartPage() {
        // Cek apakah elemen-elemen ini ada di halaman
        const cartItemsList = document.getElementById('cart-items-list');
        if (!cartItemsList) return; // Keluar jika ini bukan halaman keranjang

        const subtotalElement = document.getElementById('cart-subtotal');
        const totalElement = document.getElementById('cart-total');
        const emptyMessage = document.getElementById('cart-empty-message');
        const checkoutButton = document.getElementById('checkout-button');
        const serviceFee = 2000; // Biaya layanan

        // Kosongkan daftar
        cartItemsList.innerHTML = ''; 

        if (cart.length === 0) {
            // Tampilkan pesan keranjang kosong
            if(emptyMessage) emptyMessage.style.display = 'block';
            if(checkoutButton) checkoutButton.disabled = true; // Matikan tombol checkout
        } else {
            // Sembunyikan pesan keranjang kosong
            if(emptyMessage) emptyMessage.style.display = 'none';
            if(checkoutButton) checkoutButton.disabled = false; // Aktifkan tombol checkout
        }

        let calculatedSubtotal = 0;

        cart.forEach(item => {
            let itemSubtotal = item.harga * item.qty;
            calculatedSubtotal += itemSubtotal;

            let row = `
                <tr>
                    <td>
                        <div class="fw-bold">${item.nama}</div>
                    </td>
                    <td>${formatRupiah(item.harga)}</td>
                    <td>
                        <input type="number" 
                               class="form-control input-qty" 
                               value="${item.qty}" 
                               style="width: 70px;" 
                               min="1" 
                               data-id="${item.id}">
                    </td>
                    <td class="fw-bold">${formatRupiah(itemSubtotal)}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-danger btn-remove-item" data-id="${item.id}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            `;
            cartItemsList.innerHTML += row;
        });

        // Update Total
        let calculatedTotal = calculatedSubtotal + serviceFee;
        if(subtotalElement) subtotalElement.innerText = formatRupiah(calculatedSubtotal);
        if(totalElement) totalElement.innerText = formatRupiah(calculatedTotal);
    }
    
    // 7. Fungsi untuk MERENDER/MENAMPILKAN halaman pembayaran
    function renderCheckoutPage() {
        const ringkasanItemEl = document.getElementById('ringkasan-item');
        if (!ringkasanItemEl) return; // Keluar jika ini bukan halaman pembayaran

        const ringkasanSubtotalEl = document.getElementById('ringkasan-subtotal');
        const ringkasanOngkirEl = document.getElementById('ringkasan-ongkir');
        const ringkasanLayananEl = document.getElementById('ringkasan-layanan');
        const ringkasanTotalEl = document.getElementById('ringkasan-total');
        const checkoutForm = document.getElementById('checkout-form');
        
        const ongkir = 5000;
        const layanan = 2000;

        // Kosongkan daftar item
        ringkasanItemEl.innerHTML = '';

        let calculatedSubtotal = 0;

        if (cart.length === 0) {
            ringkasanItemEl.innerHTML = '<div class="alert alert-warning small">Keranjang Anda kosong.</div>';
            if(checkoutForm) checkoutForm.querySelector('button[type="submit"]').disabled = true; // Matikan tombol
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
        if(ringkasanSubtotalEl) ringkasanSubtotalEl.innerText = formatRupiah(calculatedSubtotal);
        if(ringkasanOngkirEl) ringkasanOngkirEl.innerText = formatRupiah(ongkir);
        if(ringkasanLayananEl) ringkasanLayananEl.innerText = formatRupiah(layanan);
        if(ringkasanTotalEl) ringkasanTotalEl.innerText = formatRupiah(calculatedTotal);
    }

    // --- PENDAFTARAN EVENT (EVENT LISTENERS) ---

    // 1. Daftarkan event untuk SEMUA tombol "+ Tambah"
    const allAddButtons = document.querySelectorAll('.btn-add-to-cart');
    allAddButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah link '#' pindah halaman
            const id = this.dataset.id;
            const nama = this.dataset.nama;
            const harga = parseInt(this.dataset.harga);
            addToCart(id, nama, harga);
        });
    });

    // 2. Cek apakah kita ada di HALAMAN KERANJANG
    const cartItemsListElement = document.getElementById('cart-items-list');
    if (cartItemsListElement) {
        // Jika ya, render keranjang
        renderCartPage();

        // Daftarkan event untuk tombol Hapus dan Update Kuantitas
        cartItemsListElement.addEventListener('click', function(e) {
            if (e.target.closest('.btn-remove-item')) {
                const button = e.target.closest('.btn-remove-item');
                const id = button.dataset.id;
                if (confirm('Yakin ingin menghapus item ini?')) {
                    removeItemFromCart(id);
                }
            }
        });

        cartItemsListElement.addEventListener('change', function(e) {
            if (e.target.classList.contains('input-qty')) {
                const input = e.target;
                const id = input.dataset.id;
                const newQty = parseInt(input.value);
                if (newQty > 0) {
                    updateQuantity(id, newQty);
                } else {
                    if (confirm('Kuantitas 0 akan menghapus item. Lanjutkan?')) {
                        removeItemFromCart(id);
                    } else {
                        input.value = 1;
                        updateQuantity(id, 1); // Update juga di keranjang
                    }
                }
            }
        });
    }
    
// 3. Cek apakah kita ada di HALAMAN PEMBAYARAN
    const checkoutFormElement = document.getElementById('checkout-form');
    if(checkoutFormElement) {
        // Render ringkasan pesanan di sisi kanan
        renderCheckoutPage();
        
        // Tambahkan event listener untuk form submit
        checkoutFormElement.addEventListener('submit', function(event) {
            
            // Validasi frontend (tetap kita lakukan)
            const nama = document.getElementById('namaPelanggan').value;
            const hp = document.getElementById('hpPelanggan').value;
            const alamat = document.getElementById('alamatPelanggan').value;

            if (nama === '' || hp === '' || alamat === '') {
                // HENTIKAN PENGIRIMAN FORM jika data kosong
                event.preventDefault(); 
                alert('Mohon isi Nama, HP, dan Alamat dengan lengkap.');
                return;
            }

            // JIKA LOLOS VALIDASI:
            // 1. Ambil keranjang dari localStorage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            // 2. Ambil hidden input yang kita buat di HTML
            const hiddenInput = document.getElementById('cart-data-input');
            
            // 3. Masukkan data keranjang (sebagai string JSON) ke dalam input tersebut
            hiddenInput.value = JSON.stringify(cart);
            
            // 4. BIARKAN FORM MELANJUTKAN PROSES SUBMIT
            // (Kita tidak panggil event.preventDefault() di sini)
            // Form sekarang akan mengirim data ke 'proses-pesanan.php'
        });
        }
    }
)