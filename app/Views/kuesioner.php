<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>


<p class = "mt-50">ini halaman isi kuesioner</p>

<body>

  <div class="container my-5 p-5">
    <div class="row my-4">
      <h2 class="text-center mb-3 fw-bold">Survei Penilaian E-Rapor</h2>
      <p class="text-center text-secondary">Survei berikut ini dirancang untuk individu sebagai alat penilaian kinerja pegawai sekaligus evaluasi perilaku kerja. Tujuan dari survei ini adalah untuk mengukur dan memahami kontribusi, produktivitas, serta sikap kerja pegawai dalam lingkungan kerja.</p>
    </div>
    <div class="row mt-4 justify-content-center">
      <!-- Penilaian Kinerja -->
      <div class="col-md-5 mb-5">
        <div class="card p-4 h-100">

          <div class="card-body d-flex flex-column justify-content-between">
            <div class="wrap-parent">
              <div class="mb-5 bg-primary text-white p-3 rounded-3 text-center" style="width: 80px">
              <i class="bi bi-clipboard-check fs-2 "></i>
              </div>
              <div class="wrap-child ">
                <h4 class="card-title mb-3 fw-bold">Penilaian Kinerja</h4>
                <p class="card-text text-secondary">Survei ini dilakukan untuk menilai hasil kinerja diri sendiri sebagai evaluasi untuk perbaikan kinerja dan pengembangan diri ke depannya.</p>
                <ul class="list-unstyled">
                  <li>✔ Penilaian Kinerja</li>
                  <li>✔ Penilaian Perilaku</li>
                </ul>
              </div>
            
            </div>
            <a href="<?php echo site_url( 'penilaian_kinerja'); ?>" class="btn btn-primary">PENILAIAN KINERJA</a>
          </div>
        
        </div>
      </div>

      <!-- Penilaian Perilaku Kerja -->
      <div class="col-md-5 mb-5">
        <div class="card p-4 h-100">
          <div class="card-body d-flex flex-column justify-content-between ">
            <div class="wrap-parent">
              <div class="mb-5 bg-primary text-white p-3 rounded-3 text-center" style="width: 80px">
                <i class="bi bi-file-earmark-person-fill fs-2"></i> <!-- icon -->
              </div>

              <div class="wrap-child">
                <h4 class="card-title mb-3 fw-bold">Penilaian Perilaku Kerja</h4>
                <p class="card-text text-secondary">Survei di bawah ini digunakan untuk menilai perilaku diri sendiri sebagai bahan evaluasi guna meningkatkan kualitas diri dan mencapai perkembangan yang lebih baik.</p>
                <h6>Langkah-langkah:</h6>
                <ul class="list-unstyled">
                  <li>✔ Login dengan NIP dan PIN</li>
                  <li>✔ Mengisi Survei</li>
                </ul>

              </div>
            </div>
            <a href="#" class="btn btn-outline-primary mt-3 px-4 py-2">MULAI EVALUASI</a>
          </div>
        </div>
      </div>

      <!-- Disiplin ASN -->
      <!-- <div class="col-md-4 mb-4">
        <div class="card p-4 h-100">
          <div class="card-body d-flex flex-column justify-content-between ">
            
            <div class="wrap-parent">
              <div class="mb-5 bg-primary text-white p-3 rounded-3 text-center" style="width: 80px">
              <i class="bi bi-person-lines-fill fs-2"></i>
              </div>
              
              <div class="wrap-child">
                <h4 class="card-title mb-3 fw-bold">Disiplin ASN</h4>
                <p class="card-text text-secondary">Hasil penilaian pelanggaran dan absensi pegawai selama satu tahun</p>
                <ul class="list-unstyled">
                  <li>✔ Survei Employer Branding</li>
                </ul>

              </div>
            </div>
            
            <a href="#" class="btn btn-outline-primary mt-3 px-4 py-2">LIHAT HASIL</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


<?= $this->endSection() ?>
