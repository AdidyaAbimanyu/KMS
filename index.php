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
    <link rel="stylesheet" href="assets/css/home.css">

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
                                <img src="assets/img/main/main-1.png" alt="Slide 1" class="img-fluid">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="announcement-box">
                                <img src="" alt="Slide 2" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#announcementCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>

            <div class="text-center mv-4">
                <img src="assets/img/main/knowledge.svg" alt="Knowledge Icon" class="img-fluid section-icon mb-3"
                    width="100">
                <h4>Pusat Pengetahuan Kereta Api Indonesia</h4>
                <p>Jelajahi seluruh pengetahuan!</p>
            </div>
        </div>
    </section>

    <!-- Apa itu KMS -->
    <section class="section-klc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="assets/img/kms.png" alt="Apa itu KLC?" class="img-fluid" width="700">
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
        <h2 class="category-title mb-5">Unit</h2>
        <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-evenly">
            <?php
            $units = [
                ["name" => "Direktorat Perdagangan", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 6L12 2L20 6M4 6V18H20V6M9 14H15M9 18H15M9 10H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Operasi", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12H21M3 12L6 9M3 12L6 15M21 12L18 9M21 12L18 15M9 21V14H15V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Infrastruktur", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 21V3H21V21H3ZM8 21V14H16V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Perencanaan Strategis dan Sarana", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12H21M3 12L6 9M3 12L6 15M21 12L18 9M21 12L18 15M10 3H14V21H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Keselamatan dan Keamanan", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7V17L12 22L22 17V7L12 2ZM12 12V16M12 8H12.01" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Sumber Daya Manusia dan Urusan Umum", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7V17L12 22L22 17V7L12 2ZM9 12H15M12 12V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Pengembangan Bisnis dan Hubungan Kelembagaan", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 21V3H21V21H3ZM7 10H17M7 14H14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
                ["name" => "Direktorat Keuangan dan Manajemen Risiko", "icon" => '<svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 3V21H19V3H5ZM9 21V14H15V21M9 10H15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'],
            ];

            foreach ($units as $unit) {
                echo '<div class="col d-flex justify-content-evenly">';
                echo '  <div class="category-item d-flex flex-column align-items-center">';
                echo '    <div class="category-icon rounded-circle d-flex align-items-center justify-content-center">';
                echo $unit["icon"];
                echo '    </div>';
                echo '    <p class="category-name mt-2 text-center">' . $unit["name"] . '</p>';
                echo '  </div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Pengetahuan Terbaru -->
    <div class="container py-5">
        <h2 class="section-title">Pengetahuan Terbaru</h2>
        <div id="carouselTerbaru" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $pengetahuanTerbaru = [
                    ["title" => "Profil Direktorat Perdagangan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1200 kali dilihat"],
                    ["title" => "Struktur Organisasi Perusahaan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "890 kali dilihat"],
                    ["title" => "Kebijakan Keselamatan Kerja", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "750 kali dilihat"],
                    ["title" => "SOP Penanganan Darurat", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1320 kali dilihat"],
                    ["title" => "Profil Direktorat Perdagangan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1200 kali dilihat"],
                    ["title" => "Struktur Organisasi Perusahaan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "890 kali dilihat"],
                    ["title" => "Kebijakan Keselamatan Kerja", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "750 kali dilihat"],
                    ["title" => "SOP Penanganan Darurat", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1320 kali dilihat"],
                ];

                $chunks = array_chunk($pengetahuanTerbaru, 4);
                foreach ($chunks as $index => $group) {
                    $active = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '"><div class="row">';
                    foreach ($group as $pengetahuan) {
                        echo '<div class="col-md-3">';
                        echo '  <div class="card mx-auto">';
                        echo '    <img src="' . $pengetahuan["image"] . '" class="card-img-top" alt="' . $pengetahuan["title"] . '">';
                        echo '    <div class="card-body">';
                        echo '      <h5 class="card-title">' . $pengetahuan["title"] . '</h5>';
                        echo '      <p class="text-muted">' . $pengetahuan["views"] . '</p>';
                        echo '      <a href="#" class="btn btn-success btn-sm btn-lihat">Lihat</a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                    echo '</div></div>';
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

    <!-- Pengetahuan Terpopuler -->
    <div class="container py-5">
        <h2 class="section-title">Pelatihan Terpopuler</h2>
        <div id="carouselPopuler" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $pelatihanPopuler = [
                    ["title" => "Profil Direktorat Perdagangan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1200 kali dilihat"],
                    ["title" => "Struktur Organisasi Perusahaan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "890 kali dilihat"],
                    ["title" => "Kebijakan Keselamatan Kerja", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "750 kali dilihat"],
                    ["title" => "SOP Penanganan Darurat", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1320 kali dilihat"],
                    ["title" => "Profil Direktorat Perdagangan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1200 kali dilihat"],
                    ["title" => "Struktur Organisasi Perusahaan", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "890 kali dilihat"],
                    ["title" => "Kebijakan Keselamatan Kerja", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "750 kali dilihat"],
                    ["title" => "SOP Penanganan Darurat", "image" => "https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/05/2024/06/22/22fkai-klt-dok-545781542.jpg", "views" => "1320 kali dilihat"],
                ];

                $chunks = array_chunk($pelatihanPopuler, 4);
                foreach ($chunks as $index => $group) {
                    $active = ($index === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '"><div class="row">';
                    foreach ($group as $pelatihan) {
                        echo '<div class="col-md-3">';
                        echo '  <div class="card">';
                        echo '    <img src="' . $pelatihan["image"] . '" class="card-img-top" alt="' . $pelatihan["title"] . '">';
                        echo '    <div class="card-body">';
                        echo '      <h5 class="card-title">' . $pelatihan["title"] . '</h5>';
                        echo '      <p class="text-muted">' . $pelatihan["views"] . '</p>';
                        echo '      <a href="#" class="btn btn-sm btn-success btn-lihat">Lihat</a>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                    echo '</div></div>';
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