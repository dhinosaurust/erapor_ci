<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi E-Rapor - BKPSDM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php echo $_SERVER['REQUEST_URI'] !== '/login' ? '<link rel="stylesheet" href="assets/css/style.css">' : '<link rel="stylesheet" href="assets/css/login.css">' ?>
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.min.css">
</head>
<body class="h-100">
    <div class="d-flex vh-100">
        <?php echo $_SERVER['REQUEST_URI'] !== '/login' ? view('components/template/sidebar__template') : '' ?>
        <div class="w-100 vh-100 <?= $_SERVER['REQUEST_URI'] !== '/login' ? 'overflow-auto' : '' ;?>">
            <?php echo $_SERVER['REQUEST_URI'] !== '/login' ? view('components/template/header__template') : '' ?>
            <!-- main -->
            
            <?= $this->renderSection('content') ?>

            <!-- main -->
            <?php echo $_SERVER['REQUEST_URI'] !== '/login' ? view('components/template/footer__template') : '' ?>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php echo $_SERVER['REQUEST_URI'] !== '/login' ? '<script src="assets/js/script.js"></script>' : '' ;?>
</body>
</html>