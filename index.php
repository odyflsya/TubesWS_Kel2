<?php

require "functions.php";

$recipes = getDefaultRecipes();

use EasyRdf\Graph;

$graph = new Graph();

// Load RDF data from a file
$graph->parseFile('inc/PiringLokal.rdf');

$categories = $graph->allOfType('https://example.org/schema/piringlokal#Category');

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

    /* Ensure the cards are displayed side by side with flexbox */
    .scrollable-cards {
        display: flex; /* Align items in a row */
        gap: 20px; /* Space between the cards */
        overflow-x: auto; /* Enable horizontal scrolling if content overflows */
        padding: 20px; /* Space inside the container */
    }

    /* Style for individual cards */
    .card {
        flex: 0 0 auto; /* Prevent cards from shrinking and ensure they don't grow */
        width: 200px; /* Set a fixed width for the cards */
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #970747; /* Card background color */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 10px;
        cursor: pointer;
        transition: transform 0.2s; 
        color: #ffffff; /* Text color */
        font-family: 'Arial', sans-serif;
    }

    .card img {
        width: 100%; /* Ensure the image takes up the full width of the card */
        height: 150px; /* Set the height for the images */
        object-fit: cover; /* Maintain aspect ratio */
        border-radius: 10px;
    }

    .card h3 {
        font-size: 18px; /* Font size for title */
        font-weight: bold;
        margin: 10px 0;
    }

    .card:hover {
        transform: scale(1.05); /* Scale up card on hover */
        background-color: #bbdefb; /* Change background on hover */
    }

    .scrollable-cards::-webkit-scrollbar {
        height: 8px; /* Custom scrollbar height */
    }

    .scrollable-cards::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 10px;
    }

    .details-section {
        color: #424242; /* Warna teks untuk bagian detail */
        font-family: 'Georgia', serif; /* Font untuk bagian detail */
    }
</style>

<!-- Scrollable Content Section -->
<div id="explore" style="padding: 100px 0; background-color: #ffffff;">
    <div class="container text-center">
        <h2>Petualangan Rasa dari Pulau ke Pulau</h2>
        <p>Nikmati cita rasa asli dari berbagai pulau di Indonesia!</p>
        <div class="scrollable-cards">
            <?php foreach ($categories as $category): ?>
                <div class="card" onclick="showDetails('<?php echo $category->getLiteral('dc:title'); ?>', '<?php echo $category->getLiteral('dc:description'); ?>')">
                    <img src="<?php echo $category->getResource('piringlokal:photo'); ?>" alt="<?php echo $category->getLiteral('dc:title'); ?>">
                    <h3><?php echo $category->getLiteral('dc:title'); ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="details-section">
        <h3 id="details-title">Pilih sebuah kategori</h3>
        <p id="details-description">Deskripsi kategori akan muncul di sini.</p>
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