<?php
    $currentPage = 'kontak';
    include 'partials/header.php';
?>

<section class="py-5" id="kontak" style="background-color: #F5FF00;">
    <div class="container">
        <h2 class="text-center fw-bold mb-5 text-danger">Hubungi Kami</h2>
        <p class="text-center mb-5">Ada pertanyaan atau keluhan? Jangan ragu untuk menghubungi kami!</p>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="fw-bold text-danger mb-4"><i class="bi bi-geo-alt-fill"></i> Outlet Kerenyes Chicken
                        </h4>
                        <p class="mb-3">
                            <strong>Alamat:</strong><br>
                            Jl. H. Muhidin RT.01/RW.02, No. 123<br>
                            Jakarta, Indonesia
                        </p>
                        <p class="mb-3">
                            <i class="bi bi-telephone-fill text-danger"></i> <strong>Telepon:</strong>
                            0822-8877-08027<br>
                            <i class="bi bi-whatsapp text-success"></i> <strong>WhatsApp:</strong> 0822-8877-0802
                        </p>
                        <p class="mb-3">
                            <strong>Jam Buka:</strong><br>
                            Senin - Minggu<br>
                            10:00 - 22:00 WIB
                        </p>
                        <div class="d-flex">
                            <a href="https://wa.me/6282288770802" class="btn btn-success me-2" target="_blank">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp
                            </a>
                            <a href="tel:+62211234567" class="btn btn-outline-danger">
                                <i class="bi bi-telephone"></i> Telepon
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="fw-bold mb-4"><i class="bi bi-envelope-fill text-danger"></i> Ada Pertanyaan?</h4>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="namaKontak" class="form-label">Nama Anda *</label>
                                <input type="text" class="form-control" id="namaKontak" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailKontak" class="form-label">Email Anda *</label>
                                <input type="email" class="form-control" id="emailKontak" required>
                            </div>
                            <div class="mb-3">
                                <label for="teleponKontak" class="form-label">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="teleponKontak">
                            </div>
                            <div class="mb-3">
                                <label for="pesanKontak" class="form-label">Pesan Anda *</label>
                                <textarea class="form-control" id="pesanKontak" rows="5" required
                                    placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg w-100">
                                <i class="bi bi-send"></i> Kirim Pesan
                            </button>
                        </form>
                        <div id="formMessage" class="mt-3" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Placeholder -->
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="fw-bold text-center mb-4 text-danger">Temukan Lokasi Kami</h4>
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.816666!3d-6.200000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNDknMDAuMCJF!5e0!3m2!1sen!2sid!4v1630000000000!5m2!1sen!2sid"
                        allowfullscreen="" loading="lazy" class="rounded shadow-sm"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const messageDiv = document.getElementById('formMessage');
    messageDiv.style.display = 'block';
    messageDiv.className = 'alert alert-success';
    messageDiv.innerHTML =
        '<i class="bi bi-check-circle"></i> Terima kasih! Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.';
    this.reset();
});
</script>

<?php
    include 'partials/footer.php';
?>