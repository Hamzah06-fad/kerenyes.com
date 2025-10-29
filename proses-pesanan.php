<?php

// --- PENGATURAN DASAR ---
// GANTI INI DENGAN EMAIL ANDA
$tujuan_email_anda = "hamzahfadhila0906@gmail.com"; 

// --- FUNGSI FORMAT RUPIAH ---
function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Cek apakah data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- 1. AMBIL DATA FORMULIR (DAN AMANKAN) ---
    $nama = strip_tags(htmlspecialchars($_POST['namaPelanggan']));
    $hp = strip_tags(htmlspecialchars($_POST['hpPelanggan']));
    $alamat = strip_tags(htmlspecialchars($_POST['alamatPelanggan']));
    $catatan = strip_tags(htmlspecialchars($_POST['catatanPesanan']));
    $metode_bayar = strip_tags(htmlspecialchars($_POST['metodePembayaran']));

    // --- 2. AMBIL DATA KERANJANG (DARI HIDDEN INPUT) ---
    $cart_json = $_POST['cart_data'];
    $cart_items = json_decode($cart_json, true); // Ubah JSON jadi array PHP

    if (empty($nama) || empty($hp) || empty($alamat) || empty($cart_items)) {
        // Jika data penting kosong, kembalikan ke halaman pembayaran
        echo "Data tidak lengkap. Silakan kembali dan isi semua field.";
        // header('Location: pembayaran.php?error=1');
        exit;
    }

    // --- 3. SIAPKAN ISI EMAIL (FORMAT HTML AGAR RAPI) ---
    $subjek = "Pesanan Baru Kerenyes Chicken - Atas Nama: " . $nama;
    
    $body_email = "
    <html>
    <head>
        <title>Pesanan Baru Kerenyes Chicken</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { width: 90%; margin: auto; padding: 20px; border: 1px solid #F5FF00; border-radius: 5px; }
            h2 { color: #d9534f; }
            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
            th { background-color: #f2f2f2; }
            .total { font-weight: bold; font-size: 1.2em; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Pesanan Baru Telah Masuk!</h2>
            <p>Seseorang telah memesan melalui website Kerenyes Chicken.</p>
            
            <h3>Detail Pelanggan:</h3>
            <ul>
                <li><strong>Nama:</strong> $nama</li>
                <li><strong>No. HP (WA):</strong> $hp</li>
                <li><strong>Alamat:</strong> $alamat</li>
                <li><strong>Metode Bayar:</strong> $metode_bayar</li>
                <li><strong>Catatan:</strong> $catatan</li>
            </ul>

            <h3>Detail Pesanan:</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>";

    $total_belanja = 0;
    foreach ($cart_items as $item) {
        $subtotal_item = $item['harga'] * $item['qty'];
        $total_belanja += $subtotal_item;
        
        $body_email .= "
                    <tr>
                        <td>" . htmlspecialchars($item['nama']) . "</td>
                        <td>" . formatRupiah($item['harga']) . "</td>
                        <td>" . $item['qty'] . "</td>
                        <td>" . formatRupiah($subtotal_item) . "</td>
                    </tr>";
    }

    // Hitung biaya lainnya (samakan dengan di frontend)
    $ongkir = 5000;
    $layanan = 2000;
    $grand_total = $total_belanja + $ongkir + $layanan;

    $body_email .= "
                </tbody>
            </table>

            <h3 style='text-align: right; margin-top: 20px;'>Rincian Biaya:</h3>
            <table style='width: 50%; float: right;'>
                <tr>
                    <td>Subtotal Produk</td>
                    <td class='total'>" . formatRupiah($total_belanja) . "</td>
                </tr>
                <tr>
                    <td>Ongkir</td>
                    <td>" . formatRupiah($ongkir) . "</td>
                </tr>
                <tr>
                    <td>Biaya Layanan</td>
                    <td>" . formatRupiah($layanan) . "</td>
                </tr>
                <tr>
                    <td>GRAND TOTAL</td>
                    <td class='total'>" . formatRupiah($grand_total) . "</td>
                </tr>
            </table>

        </div>
    </body>
    </html>
    ";

    // --- 4. KIRIM EMAIL ---
    
    // Header wajib untuk kirim email HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: order@kerenyeschicken.com" . "\r\n"; // Email "dari" (bisa fiktif)

    // Fungsi mail() PHP
    mail($tujuan_email_anda, $subjek, $body_email, $headers);

    // --- 5. REDIRECT KE HALAMAN SUKSES ---
    // Setelah email terkirim, lempar pengguna ke halaman sukses.
    header('Location: sukses.php');
    exit;

} else {
    // Jika file diakses langsung tanpa POST, lempar ke index
    header('Location: index.php');
    exit;
}
?>