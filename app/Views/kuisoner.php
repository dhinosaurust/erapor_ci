<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<main class="p-3 m-3">
    <nav class="bg-light p-4 rounded-2">
        <div class="text-capitalize mb-3 fs-3 fw-semibold ">
            survei budaya kerja
        </div>
        <p class="kuisoner-info mb-0">
            Survei Budaya Kerja terdiri dari Survei indeks BerAKHLAK, Survei <i>Employee Engagement</i>, dan Survei <i>Employer Branding.</i> Survei tersebut diperuntukkan untuk ASN dan umum 
        </p>
    </nav>

    <div class="kuisoner-content row mx-0 mt-3 gap-3">
        <div class="card col-4 p-4 d-flex justify-content-center flex-column">
            <span class="bi bi-clipboard2-check bg-primary fs-3 p-3 text-white text-center rounded-2"></span>
            <h5 class="mt-4 fw-semibold">Penilaian Kinerja</h5>
            <ul class="list-unstyled text-secondary">
                <li>Penilaian Kinerja</li>
                <li>Penilaian Perilaku</li>
            </ul>
            <button class="d-none btn btn-link text-decoration-none px-0 text-start">Lihat Selengkapnya</button>
        </div>
        <div class="card col-4 p-4 d-flex justify-content-between flex-column">
            <span class="bi bi-person-fill-check bg-primary fs-3 p-3 text-white text-center rounded-2"></span>
            <div class="wrap">
                <h5 class="mt-4 fw-semibold">Penilaian Perilaku Kerja</h5>
                <p class="mb-1 mt-2 text-secondary">Langkah-langkah :</p>
                <ul class="list-unstyled text-secondary">
                    <li>Login dengan NIP dan PIN</li>
                    <li>Mengisi Survei</li>
                </ul>
            </div>
            <button class="d-none btn btn-link text-decoration-none px-0 text-start">Lihat Selengkapnya</button>            
        </div>
    </div>


</main>


<?= $this->endSection() ?>