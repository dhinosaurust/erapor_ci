<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<main id="content" class="container-fluid">

    <?php if (session()->getFlashdata('error')) : ?>
        <?php echo view('components\template\attempt_login_not_success') ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const modal = new bootstrap.Modal(document.getElementById('modalAttemptLogin'));
                modal.show();
            });
        </script>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">

            <div class="card shadow-lg login-container my-5 p-2">
                <div class="card-body">
                    <h2 class="text-center font-weight-bolder text-gray-900">E-Rapor</h2>
                    <?= form_open('login'); ?>
                        <?= csrf_field() ?>
                        <p class="mb-4 text-center">Selamat datang di portal E-Rapor ASN & Non-ASN</p>

                        <?= validation_list_errors() ?>

                        <div class="form-group">
                            <input class="form-control form-control-user text-center mb-3" type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ; ?>" placeholder="Masukkan NIP atau NIK" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-user text-center" type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ; ?>" placeholder="Masukkan password" required>
                        </div>

                        <input class="border-0 font-weight-bolder mt-4 w-100 fw-semibold" name="btn_login" type="submit" value="Login">
            
            
                    <?= form_close(); ?>

                </div>

            </div>
        </div>
        
    </div>

</main>

<?= $this->endSection() ?>
