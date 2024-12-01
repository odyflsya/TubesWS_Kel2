<?php

require "functions.php";

$recipes = getDefaultRecipes();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piring Lokal</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Carousel Item -->
            <div class="carousel-item active">
                <div style="position: relative; height: 100vh;">
                    <img class="d-block w-100" src="./assets/img/home.jpg" alt="Image" style="object-fit: cover; height: 100%; width: 100%;">
                    <!-- Overlay -->
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.6); padding: 20px; border-radius: 10px; 
                        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                       text-align: center; width: 100%; max-width: 500px;">
                        <a href="javascript:void(0);" id="scrollToLogo" style="text-decoration: none;">
                            <img src="assets/img/logo-home.png" alt="Logo" style="max-width: 100%; height: auto;">
                        </a>
                        <h1 class="display-4 text-white fw-bold mb-4">Temukan Resep Kelezatan Khas Indonesia Setiap Hari</h1>
                        <a href="#explore" class="btn btn-light btn-lg text-uppercase mt-4" id="exploreBtn">Jelajahi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<style>
    /* Styling untuk overlay */
    .overlay {
        background: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
        max-width: 500px;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    /* Hover efek pada overlay */
    .carousel-item:hover .overlay {
        transform: translate(-50%, -45%);
        opacity: 0.9;
    }

    /* Styling untuk teks utama */
    .carousel-item h1 {
        font-size: 1rem;
        font-weight: bold;
        line-height: 1.4;
        letter-spacing: 1px;
        margin-bottom: 30px;
        transition: color 0.3s ease;
    }

    /* Efek hover pada teks utama */
    .carousel-item:hover h1 {
        color: #ff6f61;
    }

    /* Tombol Explore More */
    .btn-light {
        background-color: #970747;
        color: white;
        padding: 8px 30px;
        border-radius: 30px;
        font-weight: bold;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Hover efek pada tombol */
    .btn-light:hover {
        background-color: #ff6f61;
        transform: scale(1.1);
    }

    /* Transisi yang halus untuk gambar */
    .carousel-inner img {
        transition: transform 0.5s ease;
    }

    /* Efek zoom in saat hover pada gambar */
    .carousel-item:hover img {
        transform: scale(1.1);
    }
</style>

<!-- Scrollable Content Section -->
<div id="explore" style="padding: 100px 0; background-color: #ffffff;">
    <div class="container text-center">
        <h2>Petualangan Rasa dari Pulau ke Pulau</h2>
        <p>Nikmati cita rasa asli dari berbagai pulau di Indonesia!</p>
        <div class="scrollable-cards" style="display: flex; gap: 20px; overflow-x: auto; padding: 20px;">
            <!-- Card: Papua Island -->
            <div class="card" onclick="showDetails('Pulau Papua', 'Papua memiliki keanekaragaman budaya, kuliner yang beragam serta keindahan alam yang luar biasa. Makanan khas Papua kaya akan cita rasa lokal dan bahan-bahan unik.')">
                <img src="https://i.pinimg.com/736x/5c/09/27/5c0927138144f6d9325a2eca60a0e020.jpg" alt="Pulau Papua">
                <h3>Pulau Papua</h3>
            </div>

            <!-- Card: Kalimantan Island -->
            <div class="card" onclick="showDetails('Pulau Kalimantan', 'Pulau Kalimantan terkenal dengan julukan “Pulau Seribu Sungai” karena banyaknya sungai yang mengalir di pulau ini. Kalimantan terkenal akan destinasi wisatanya yang menjadi surga para pecinta alam.')">
                <img src="https://i.pinimg.com/736x/f1/01/4a/f1014a539d540535b871268fc0288bfa.jpg" alt="Pulau Kalimantan">
                <h3>Pulau Kalimantan</h3>
            </div>

            <!-- Card: Sumatera Island -->
            <div class="card" onclick="showDetails('Pulau Sumatera', 'Sumatera adalah pulau terbesar keenam di dunia dan memiliki kekayaan budaya serta kuliner yang sangat beragam.')">
                <img src="https://i.pinimg.com/736x/93/c3/23/93c3233f7a3188cc9054ea1a0cdb0051.jpg" alt="Pulau Sumatera">
                <h3>Pulau Sumatera</h3>
            </div>

            <!-- Card: Sulawesi Island -->
            <div class="card" onclick="showDetails('Pulau Sulawesi', 'Sulawesi merupakan pulau yang terletak di sebelah timur Indonesia. Tidak hanya keelokan pariwisatanya, pulau Sulawesi pula populer dengan suguhan kuliner yang bermacam-macam.')">
                <img src="https://i.pinimg.com/736x/dd/82/08/dd820886d9054015fa3507ce98edc890.jpg" alt="Pulau Sulawesi">
                <h3>Pulau Sulawesi</h3>
            </div>

            <!-- Card: Java Island -->
            <div class="card" onclick="showDetails('Pulau Jawa', 'Pulau Jawa menawarkan keindahan alam yang luar biasa dengan pegunungan, pantai, serta kuliner yang menggugah selera.')">
                <img src="https://i.pinimg.com/736x/ba/08/5b/ba085b5917aedbf79e8c85475486cb91.jpg" alt="Pulau Jawa">
                <h3>Pulau Jawa</h3>
            </div>
        </div>
    </div>
    <div class="details-section" style="padding: 20px; margin-top: 20px; background-color:#bbdefb; border-radius: 10px;">
        <h3 id="details-title">Pilih sebuah pulau</h3>
        <p id="details-description">Deskripsi pulau akan muncul di sini.</p>
    </div>
</div>

<!-- JavaScript -->
<script>
    function showDetails(title, description) {
        document.getElementById('details-title').innerText = title;
        document.getElementById('details-description').innerText = description;
    }
</script>

<!-- CSS -->
<style>
    .card {
    flex: 0 0 auto;
    width: 200px;
    border: 1px solid #ddd;
    border-radius: 10px;
    background-color: #970747; /* Warna background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 10px;
    cursor: pointer; 
    transition: transform 0.2s;
    color: #0d47a1; /* Warna teks */ 
    font-family: 'Arial', sans-serif; /* Font teks */
}

.card h3 {
    font-size: 18px; /* Ukuran teks judul */
    font-weight: bold; /* Tebal teks judul */
    color: #ffffff; /* Warna teks judul */
    margin: 10px 0;
}

.card:hover {
    transform: scale(1.05);
    background-color: #bbdefb; /* Warna saat di-hover */
    color: #0d47a1; /* Warna teks saat di-hover */
}

.details-section {
    color: #424242; /* Warna teks untuk bagian detail */
    font-family: 'Georgia', serif; /* Font untuk bagian detail */
}


    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 150px; /* Menyamakan tinggi semua gambar */
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        border-radius: 10px;
    }

    .scrollable-cards {
        scrollbar-width: thin;
        scrollbar-color: #ccc #f8f9fa;
    }

    .scrollable-cards::-webkit-scrollbar {
        height: 8px;
    }

    .scrollable-cards::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 10px;
    }
</style>

<!-- Add Scroll Behavior with JavaScript -->
<script>
    // Get the button and scroll to the explore section
    document.getElementById("exploreBtn").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default anchor behavior
        const exploreSection = document.getElementById("explore");
        
        // Scroll smoothly to the 'explore' section
        exploreSection.scrollIntoView({ behavior: "smooth", block: "start" });
    });
</script>

<!-- Carousel End -->

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Header Section -->
    <header class="header-section">
        <div class="container">
            <div class="logo" id="logo">
                <a href="./index.php"><img src="assets/img/logon.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li class="nav-item"><a href="index.php">Beranda</a></li>
                        <li class="nav-item"><a href="recipe.php">Cari Resep</a></li>
                        <li class="nav-item"><a href="about-me.php">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <script>
        document.getElementById('scrollToLogo').addEventListener('click', function() {
        const logo = document.getElementById('logo');

        window.scrollTo({
            top: logo.offsetTop - 20,
            behavior: 'smooth'
        });
        });

        const navItems = document.querySelectorAll('.nav-item');

        navItems.forEach(item => {
            item.addEventListener('click', function () {
                navItems.forEach(nav => nav.classList.remove('active'));

                this.classList.add('active');
            });
        });
    </script>
    <!-- Header Section -->

    <!-- Resep -->
    <div class="container pt-4 pb-2" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <?php if ($recipes && $recipes->numRows() > 0): ?>
                <?php foreach ($recipes as $row): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <a href="detail_recipe.php?keyword=<?= urlencode($row->title) ?>" style="text-decoration: none; color: inherit;">
                            <div class="team-item bg-dark text-white" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                <div class="team-img position-relative overflow-hidden" style="border-radius: 10px 10px 0 0;">
                                    <img class="img-fluid w-100" src="<?= htmlspecialchars($row->photo) ?>" alt="Recipe Photo" style="height: 200px; object-fit: cover; transition: transform 0.3s ease, filter 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.filter='brightness(0.85)';" onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';">
                                </div>
                                <div class="text-center py-3" style="background-color: #970747; border-radius: 0 0 10px 10px;">
                                    <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 16px;"><?= htmlspecialchars($row->title) ?></h5>
                                    <p class="m-0 text-white" style="font-size: 12px;"><?= htmlspecialchars($row->categoryName) ?></p> <!-- Gunakan categoryName -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No recipes found.</p>
            <?php endif; ?>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; padding: 20px; background-color: #f9f9f9; font-family: Arial, sans-serif;">
    <!-- Resep Autentik -->
    <div style="display: flex; flex-direction: column; align-items: center; width: 45%; text-align: center;">
        <div style="background-color: rgba(151, 7, 71, 0.95); width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; border-radius: 50%; margin-bottom: 10px;">
            <div style="font-size: 28px; color: white;">📖</div>
        </div>
        <h3 style="margin: 10px 0 5px; font-size: 18px; color: #333;">Resep Autentik</h3>
        <p style="margin: 0; font-size: 14px; color: #666;">Panduan memasak untuk menciptakan hidangan khas dari Sabang sampai Merauke.</p>
    </div>                          
    <!-- Inspirasi Kuliner -->
    <div style="display: flex; flex-direction: column; align-items: center; width: 45%; text-align: center;">
        <div style="background-color: rgba(151, 7, 71, 0.95); width: 60px; height: 60px; display: flex; justify-content: center; align-items: center; border-radius: 50%; margin-bottom: 10px;">
            <div style="font-size: 28px; color: white;">🍴</div>
        </div>
        <h3 style="margin: 10px 0 5px; font-size: 18px; color: #333;">Inspirasi Kuliner</h3>
        <p style="margin: 0; font-size: 14px; color: #666;">Artikel menarik tentang keunikan di balik hidangan Nusantara.</p>
    </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Footer End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>


</html>