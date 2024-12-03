<div class="wrapper mt-3">
    <!-- Step 1: Data Diri Responden -->
    <div class="card p-3 border-top border-0 border-5 border-primary shadow">
        <h4 class="mb-0 mt-3 fw-semibold">Data Diri Responden</h4>
        <hr class="mb-4">
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">unit kerja</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan unit kerja">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">nama</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan nama lengkap">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">divisi</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan divisi">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan jabatan">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="statusPegawai" class="form-label col-sm-3 col-form-label">Status Pegawai</label>
            <div class="col-sm-9">
                <select class="form-select" id="statusPegawai" required>
                    <option selected disabled>Pilih Status Pegawai</option>
                    <option>PNS</option>
                    <option>Honorer</option>
                    <option>Kontrak</option>
                </select>
            </div>
        </div>
        <div class="mb-4 row">
            <label for="jenisJabatan" class="form-label col-sm-3 col-form-label">Jenis Jabatan</label>
            <div class="col-sm-9">
                <select class="form-select" id="jenisJabatan" required>
                    <option selected disabled>Pilih Jenis Jabatan</option>
                    <option>Pejabat Fungsional (fungsional tertentu)</option>
                    <option>Pejabat Struktural</option>
                    <option>Pelaksana</option>
                </select>
            </div>
        </div>
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">nama jabatan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan jabatan">
            </div>
        </div>
        <div class="mb-4 row">
            <label for="pendidikanTerakhir" class="col-sm-3 col-form-label form-label">Tingkat Pendidikan Terakhir</label>
            <div class="col-sm-9">
                <select class="form-select" id="pendidikanTerakhir" required>
                    <option selected disabled>Pilih Tingkat Pendidikan</option>
                    <option>S-1/Sarjana</option>
                    <option>S-2/Magister</option>
                    <option>S-3/Doktor</option>
                </select>
            </div>
        </div>
        <div class="mb-4 row">
            <label for="institusiPemerintah" class="col-sm-3 col-form-label form-label">Instansi Pemerintah</label>
            <div class="col-sm-9">
                <select class="form-select" id="institusiPemerintah" required>
                    <option selected disabled>Pilih Instansi</option>
                    <option>Pemerintah Kota Surabaya</option>
                    <option>Pemerintah Provinsi Jawa Timur</option>
                    <option>Kementerian Dalam Negeri</option>
                </select>
            </div>
        </div>
        <div class="mb-4 row">
            <label for="unitKerja" class="col-sm-3 col-form-label text-capitalize">unit kerja</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="unitKerja" placeholder="Masukan unit kerja">
            </div>
        </div>
        <hr>
        <d class="d-flex flex-column">
            <small class="text-secondary">*Periksa kembali form yang sudah di input sebelum di submit</small>
            <div class="d-flex justify-content-between">
                <button class="my-3 me-3 btn btn-primary align-self-start">Simpan</button>
                <div class="d-flex align-items-center justify-content-end w-100">
                    <div class="progress w-50">
                        <div class="progress-bar w-50" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="ms-3 mb-0 text-muted" style="font-size: 14px;">Page 1 of 2</p>
                </div>
            </div>
        </d>
    </div>
    

    <!-- Step 2: Profil Responden -->
    <div id="page2" class="page d-none">
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