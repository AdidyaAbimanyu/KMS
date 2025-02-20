<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMS Kereta Api Indonesia</title>

    <!-- Favicon -->
    <link rel="icon" type="image" href="assets/img/favicon.jpg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
     <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="text-center py-5">
        <div class="container">
            <!-- Carousel dengan tombol di luar -->
            <div class="carousel-container">
                <button class="carousel-control-prev" type="button" data-bs-target="#announcementCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <div id="announcementCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="announcement-box">
                                <img src="assets/img/hero/hero-1.jpg" alt="Slide 1" class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="announcement-box">
                                <img src="assets/img/hero/hero-2.jpg" alt="Slide 2" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>

            <!-- Two Columns with Icons -->
            <div class="row text-center mt-4">
                <div class="col-md-6">
                    <img src="assets/img/course.svg" alt="Course Icon" class="img-fluid section-icon mb-3" width="100">
                    <h4>Pusat Pelatihan Kereta Api Indonesia</h4>
                    <p>Temukan pelatihanmu!</p>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/knowledge.svg" alt="Knowledge Icon" class="img-fluid section-icon mb-3"
                        width="100">
                    <h4>Pusat Pengetahuan Kereta Api Indonesia</h4>
                    <p>Jelajahi seluruh pengetahuan!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Apa itu KMS -->
    <section class="section-klc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="https://klc2.kemenkeu.go.id/shared/assets/images/apa-itu-klc-2.jpg" alt="Apa itu KLC?"
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6 offset-md-1 text-light">
                    <div class="icon-subtitle">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h2 class="fw-bold">Apa itu KMS?</h2>
                    <div class="title-divider"></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ut cum ex, ad esse temporibus
                        cupiditate, dignissimos obcaecati animi eveniet, voluptatibus ipsum? Vel omnis illum, similique
                        non consectetur laboriosam nam.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori -->
    <div class="container py-5">
        <h2 class="category-title mb-5">Kategori</h2>
        <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-evenly">
            <?php
            $categories = [
                ["name" => "Kebijakan Fiskal", "icon" => "assets/img/kategori/kategori-1.svg"],
                ["name" => "Penerimaan Negara", "icon" => "assets/img/kategori/kategori-2.svg"],
                ["name" => "Profesi Keuangan", "icon" => "assets/img/kategori/kategori-3.svg"],
                ["name" => "Pengembangan SDM", "icon" => "assets/img/kategori/kategori-4.svg"],
                ["name" => "PSIAP", "icon" => "assets/img/kategori/kategori-5.svg"],
                ["name" => "Belanja Negara", "icon" => "assets/img/kategori/kategori-6.svg"],
                ["name" => "Dukungan Manajemen K/L", "icon" => "assets/img/kategori/kategori-7.svg"],
                ["name" => "Perbendaharaan dan Risiko", "icon" => "assets/img/kategori/kategori-8.svg"]
            ];

            foreach ($categories as $category) {
                echo '<div class="col d-flex justify-content-evenly">';
                echo '  <div class="category-item d-flex flex-column align-items-center">';
                echo '    <div class="category-icon rounded-circle d-flex align-items-center justify-content-center">';
                echo '      <img src="' . $category["icon"] . '" alt="' . $category["name"] . '" class="icon-img">';
                echo '    </div>';
                echo '    <p class="category-name mt-2 text-center">' . $category["name"] . '</p>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Kategori Pelatihan -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Pelatihan Open Access -->
                <div class="col-md-4 mb-3">
                    <a href="/listcourse" class="text-decoration-none" style="height: 200px;">
                        <div class="klc-home-box has-background-open-access">
                            <h5 class="fw-bold">Pelatihan "Open Access"</h5>
                            <p>Terdapat <strong>0</strong> e-Learning & microlearning terbuka untuk siapa saja!</p>
                        </div>
                    </a>
                </div>

                <!-- Pelatihan Atase Keuangan -->
                <div class="col-md-4 mb-3">
                    <a href="/listcourse" class="text-decoration-none">
                        <div class="klc-home-box has-background-atase-access">
                            <h5 class="fw-bold">Pelatihan untuk "Atase Keuangan"</h5>
                            <p>Terdapat <strong>0</strong> e-Learning & microlearning untuk para Atase Keuangan</p>
                        </div>
                    </a>
                </div>

                <!-- Pelatihan UMKM -->
                <div class="col-md-4 mb-3">
                    <a href="/listcourse" class="text-decoration-none">
                        <div class="klc-home-box has-background-umkm-access">
                            <h5 class="fw-bold">Pelatihan untuk "UMKM"</h5>
                            <p>Terdapat <strong>0</strong> e-Learning & microlearning untuk para UMKM</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pelatihan Terbaru -->
    <div class="container py-5">
        <h2 class="section-title">Pelatihan Terbaru</h2>
        <div id="carouselTerbaru" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $pelatihanTerbaru = [
                    ["title" => "E-Learning Keselamatan Operasional Kereta Api", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.98", "peserta" => "1200 peserta"],
                    ["title" => "Manajemen Pemeliharaan Sarana Perkeretaapian", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.95", "peserta" => "890 peserta"],
                    ["title" => "Sistem Persinyalan Kereta Api Digital", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.97", "peserta" => "750 peserta"],
                    ["title" => "Pelatihan Keamanan di Stasiun dan Jalur Kereta", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "5.00", "peserta" => "1320 peserta"],
                    ["title" => "Perawatan dan Troubleshooting Lokomotif Diesel", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.92", "peserta" => "980 peserta"],
                    ["title" => "Manajemen Pelayanan Penumpang Kereta Api", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.96", "peserta" => "1450 peserta"],
                    ["title" => "Teknik Dasar Perawatan Rel dan Bantalan", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.94", "peserta" => "670 peserta"],
                    ["title" => "Analisis Kinerja dan Efisiensi Perkeretaapian", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.99", "peserta" => "810 peserta"]
                ];

                $chunks = array_chunk($pelatihanTerbaru, 4);
                foreach ($chunks as $index => $group) {
                    $active = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '">';
                    echo '<div class="row">';
                    foreach ($group as $pelatihan) {
                        echo '<div class="col-md-3">';
                        echo '  <div class="card mx-auto">';
                        echo '    <img src="' . $pelatihan["image"] . '" class="card-img-top" alt="' . $pelatihan["title"] . '">';
                        echo '    <div class="card-body">';
                        echo '      <h5 class="card-title">' . $pelatihan["title"] . '</h5>';
                        echo '      <p class="text-muted">' . $pelatihan["peserta"] . '</p>';
                        echo '      <span class="badge bg-warning text-dark mb-2">⭐ ' . $pelatihan["rating"] . '</span>';
                        echo '      <a href="#" class="btn btn-success btn-sm btn-lihat">Lihat</a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTerbaru" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTerbaru" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <!-- Pelatihan Terpopuler -->
    <div class="container py-5">
        <h2 class="section-title">Pelatihan Terpopuler</h2>
        <div id="carouselPopuler" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $pelatihanPopuler = [
                    ["title" => "E-Learning Keselamatan dan SOP Masinis", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.98", "peserta" => "17000 peserta"],
                    ["title" => "Manajemen Pemeliharaan Rel dan Jembatan", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.95", "peserta" => "13450 peserta"],
                    ["title" => "Teknologi Transportasi Perkeretaapian", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.96", "peserta" => "12890 peserta"],
                    ["title" => "E-Learning Manajemen Stasiun & Layanan Penumpang", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.97", "peserta" => "14560 peserta"],
                    ["title" => "Sistem Persinyalan Kereta Berbasis AI", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.99", "peserta" => "13820 peserta"],
                    ["title" => "Pelatihan Perawatan Lokomotif Elektrik", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.95", "peserta" => "12375 peserta"],
                    ["title" => "Strategi Pengelolaan Risiko Operasional Kereta", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.98", "peserta" => "11050 peserta"],
                    ["title" => "E-Learning Perencanaan Rute dan Jadwal Kereta", "image" => "assets/img/pelatihan/pelatihan-1.jpeg", "rating" => "4.96", "peserta" => "10580 peserta"]
                ];

                $chunks = array_chunk($pelatihanPopuler, 4);
                foreach ($chunks as $index => $group) {
                    $active = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '">';
                    echo '<div class="row">';
                    foreach ($group as $pelatihan) {
                        echo '<div class="col-md-3">';
                        echo '  <div class="card">';
                        echo '    <img src="' . $pelatihan["image"] . '" class="card-img-top" alt="' . $pelatihan["title"] . '">';
                        echo '    <div class="card-body">';
                        echo '      <h5 class="card-title">' . $pelatihan["title"] . '</h5>';
                        echo '      <p class="text-muted">' . $pelatihan["peserta"] . '</p>';
                        echo '      <span class="badge bg-warning text-dark mb-2">⭐ ' . $pelatihan["rating"] . '</span>';
                        echo '      <a href="#" class="btn btn-sm btn-success btn-lihat">Lihat</a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPopuler" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselPopuler" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>