<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Pengetahuan</title>
    <!-- Favicon -->
    <link rel="icon" type="image" href="assets/img/favicon.jpg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/pengetahuan.css">

    <!-- Custom JS -->
    <script src="assets/js/pengetahuan.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <div class="content">
            <h2 class="mb-3">Direktorat Perdagangan</h2>
            <p>Direktorat Perdagangan: Mengawasi kebijakan perdagangan dan ekspor-impor.</p>

            <div class="row" id="pengetahuan-container">
                <?php for ($i = 1; $i <= 9; $i++): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/pengetahuan<?= $i ?>.jpg" class="card-img-top" alt="Pengetahuan <?= $i ?>">
                            <div class="card-body">
                                <h5 class="card-title">Pengetahuan <?= $i ?></h5>
                                <p class="card-text">Deskripsi singkat mengenai topik pengetahuan <?= $i ?> di Direktorat
                                    Perdagangan.</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <!-- Tombol untuk memuat lebih banyak konten -->
            <div class="text-center mt-3">
                <button id="loadMore" class="btn btn-primary">Muat Lebih Banyak</button>
            </div>
        </div>
    </div>

</body>

</html>