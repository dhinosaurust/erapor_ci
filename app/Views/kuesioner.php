<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<main class="p-3 m-3">

  <nav>
      <div class="text-capitalize mb-3 fs-3 fw-semibold ">
          survei penilaian e-rapor
      </div>
      <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kuisoner</li>
      </ol>
      <div class="callout bg-light border rounded-2 p-4">
        <p class="text-capitalize fs-5 text-primary"><span class="bi bi-info-circle-fill me-2"></span>Information</p>
        <p class="text-secondary mb-0">Survei berikut ini dirancang untuk individu sebagai alat penilaian kinerja pegawai sekaligus evaluasi perilaku kerja. Tujuan dari survei ini adalah untuk mengukur dan memahami kontribusi, produktivitas, serta sikap kerja pegawai dalam lingkungan kerja.</p>
      </div>
  </nav>


  <div class="row mt-4">
    <div class="col-md-5">
      <div id="penilaianKinerja" class="card menu-kuisoner mb-3 mb-sm-0" style="height: 550px;">
        <div class="card-body p-4 d-flex flex-column justify-content-center">
          <div class="bg-primary shadow text-white mb-4 p-3 rounded-3 text-center" style="width: 80px">
            <i class="bi bi-clipboard-check fs-2 "></i>
          </div>
          <div class="wrap-child ">
            <h4 class="card-title mb-3 fw-bold">Penilaian Kinerja</h4>
            <p class="card-text text-secondary text-truncate">Survei ini dilakukan untuk menilai hasil kinerja diri sendiri sebagai evaluasi untuk perbaikan kinerja dan pengembangan diri ke depannya.</p>
            <ul class="list-unstyled mb-0">
              <li>✔ Penilaian Kinerja</li>
              <li>✔ Penilaian Perilaku</li>
            </ul>
          </div>
          
        </div>
        <div class="card-footer p-3 text-center text-primary">
          <p class="text-capitalize mb-0">lihat selengkapnya<span class="bi bi-arrow-right ms-2"></span></p>
        </div>
      
      </div>
    </div>

    <div class="col-md-5">
      <div id="penilaianPerilaku" class="card menu-kuisoner" style="height: 550px;">
        <div class="card-body p-4 d-flex flex-column justify-content-center ">
          <div class="bg-primary shadow text-white mb-4 p-3 rounded-3 text-center" style="width: 80px">
            <i class="bi bi-file-earmark-person-fill fs-2"></i>
          </div>

          <div class="wrap-child">
            <h4 class="card-title mb-3 fw-bold">Penilaian Perilaku Kerja</h4>
            <p class="card-text text-secondary text-truncate">Survei di bawah ini digunakan untuk menilai perilaku diri sendiri sebagai bahan evaluasi guna meningkatkan kualitas diri dan mencapai perkembangan yang lebih baik.</p>
            <h6>Langkah-langkah:</h6>
            <ul class="list-unstyled mb-0">
              <li>✔ Login dengan NIP dan PIN</li>
              <li>✔ Mengisi Survei</li>
            </ul>

          </div>
        </div>
        <div class="card-footer p-3 text-center text-primary">
          <p class="text-capitalize mb-0">lihat selengkapnya<span class="bi bi-arrow-right ms-2"></span></p>
        </div>
      </div>
    </div>

    <div class="d-none col-md-4">
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
    </div>
  </div>

</main>

<?= $this->endSection() ?>
