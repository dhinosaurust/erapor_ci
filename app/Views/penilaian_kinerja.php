<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<body>
    <div class="container my-5 p-5">
        <div class="row my-4">
        <h2 class="text-center mb-3 fw-bold">Survei Penilaian E-Rapor</h2>
        <p class="text-center text-secondary">Survei berikut ini dirancang untuk individu sebagai alat penilaian kinerja pegawai sekaligus evaluasi perilaku kerja. Tujuan dari survei ini adalah untuk mengukur dan memahami kontribusi, produktivitas, serta sikap kerja pegawai dalam lingkungan kerja.</p>
        </div>
    <div class="container mt-5">
        <!-- Step 1: Data Diri Responden -->
        <div id="page1" class="page active">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">1. Data Diri Responden</h5>
                    <div class="alert alert-info">
                        <strong>Hi, <span id="displayNama"></span>!</strong> Silakan periksa data jika terdapat kesalahan.
                    </div>
                    <form id="formPage1">
                        <div class="mb-3">
                            <label for="unitKerja" class="form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="unitKerja" placeholder="Masukkan Unit Kerja" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi</label>
                            <input type="text" class="form-control" id="divisi" placeholder="Masukkan divisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="statusPegawai" class="form-label">Status Pegawai</label>
                            <select class="form-select" id="statusPegawai" required>
                                <option selected disabled>Pilih Status Pegawai</option>
                                <option>PNS</option>
                                <option>Honorer</option>
                                <option>Kontrak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenisJabatan" class="form-label">Jenis Jabatan</label>
                            <select class="form-select" id="jenisJabatan" required>
                                <option selected disabled>Pilih Jenis Jabatan</option>
                                <option>Pejabat Fungsional (fungsional tertentu)</option>
                                <option>Pejabat Struktural</option>
                                <option>Pelaksana</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="namaJabatan" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" id="namaJabatan" placeholder="Masukkan nama jabatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikanTerakhir" class="form-label">Tingkat Pendidikan Terakhir</label>
                            <select class="form-select" id="pendidikanTerakhir" required>
                                <option selected disabled>Pilih Tingkat Pendidikan</option>
                                <option>S-1/Sarjana</option>
                                <option>S-2/Magister</option>
                                <option>S-3/Doktor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="institusiPemerintah" class="form-label">Instansi Pemerintah</label>
                            <select class="form-select" id="institusiPemerintah" required>
                                <option selected disabled>Pilih Instansi</option>
                                <option>Pemerintah Kota Surabaya</option>
                                <option>Pemerintah Provinsi Jawa Timur</option>
                                <option>Kementerian Dalam Negeri</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="unitKerja" class="form-label">Unit Kerja</label>
                            <input type="text" class="form-control" id="unitKerja" placeholder="Masukkan unit kerja" required>
                        </div>
                        <button type="button" class="btn btn-primary w-100" onclick="goToPage(2)">Lanjut ke Halaman 2</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Step 2: Profil Responden -->
        <div id="page2" class="page">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">2. Profile Responden</h5>
                    
                    <form id="formPage2">
                        
                        <button type="submit" class="btn btn-danger w-100">Submit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function goToPage(pageNumber) {
            // Menyembunyikan semua halaman
            document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));

            // Menampilkan halaman yang dipilih
            document.getElementById(`page${pageNumber}`).classList.add('active');

            // Menampilkan nama di halaman 2
            if (pageNumber === 2) {
                const nama = document.getElementById('nama').value;
                document.getElementById('displayNama').textContent = nama;
            }
        }

        // Event listener untuk form di halaman pertama
        document.getElementById('formPage1').onsubmit = (e) => {
            e.preventDefault(); // Mencegah form submit
            alert('Data berhasil disubmit!');
            goToPage(2);
        };
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


<?= $this->endSection() ?>
