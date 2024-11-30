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
    <div id="header-carousel" class="carousel" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Carousel Item -->
            <div class="carousel-item active">
                <div style="position: relative; height: 100vh;">
                    <img class="w-100" src="./assets/img/home-m.jpg" alt="Image" style="object-fit: cover; height: 100%; width: 100%;">
                    <!-- Overlay -->
                    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;
                        position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                        text-align: center; width: auto;">
                        <a href="javascript:void(0);" id="scrollToLogo" style="text-decoration: none;">
                            <h3 class="text-white text-uppercase mb-3">PIRING LOKAL</h3>
                        </a>
                        <h1 class="display-3 text-white fw-bold mb-4">Jelajahi Kelezatan Khas Indonesia Setiap Hari</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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