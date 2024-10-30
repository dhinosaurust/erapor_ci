<?= $this->extend('components/master_layout') ?>

<?= $this->section('content') ?>

<main class="p-3 m-3">
    
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success ">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <div class="mb-3 fs-3 fw-semibold "><?= $title ?></div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Overview</li>
        </ol>
    </nav>
        
    <?= view('components/dasbor/pns__summary') ?>
    <?= view('components/dasbor/pppk__summary') ?>
    <?= view('components/dasbor/non_asn__summary') ?>
</main>

<?= $this->endSection() ?>

