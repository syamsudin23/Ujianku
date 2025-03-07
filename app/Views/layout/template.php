<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'UjianKu' ?></title>

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Link css template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/template-style.css') ?>">

    <!-- Link css jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <?= $this->renderSection('styles') ?>
    
</head>
<body>

    <!-- Navbar -->
    <?= $this->include('layout/navbar') ?>


    <div class="container">
        <!-- Sidebar -->
        <?= $this->include('layout/sidebar') ?>


        <!-- Konten Halaman -->
        <div class="content">
            <?= $this->renderSection('content') ?>
        </div>

        
    </div>


    <!-- Footer -->
    <?= $this->include('layout/footer') ?>

</body>
</html>
