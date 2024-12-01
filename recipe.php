<?php

require "functions.php";

// Cek apakah pengguna melakukan pencarian
$recipes = [];
$keyword = ''; // Inisialisasi $keyword agar tidak undefined

if (isset($_POST["cari"])) {
    $keyword = htmlspecialchars($_POST["keyword"]); // Sanitasi input
    // Mengambil resep berdasarkan pencarian kata kunci
    $recipes = searchRecipes($keyword);
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piring Lokal - Cari Resep</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <?php include "header.php" ?>
    <!-- Header End -->

    <!-- Search -->

    <div class="hero-search">
    <div class="overlay"></div>
    <div class="content">
        <div class="s003">
            <form action="#" method="POST" class="inner-form">
                <div class="input-field second-wrap">
                    <input id="search" type="text" name="keyword" placeholder="Temukan resep...">
                </div>
                <div class="input-field third-wrap">
                    <button class="btn-search" type="submit" name="cari">
                        <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Hero Section */
    .hero-search {
        position: relative;
        background-image: url('assets/img/search-bgr.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.103);
        z-index: 1;
    }
    .content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    /* Form pencarian */
    .s003 .inner-form {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0px;
        width: 100%;
        flex-wrap: wrap;
        background: rgba(255, 255, 255, 0.9);
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Input pencarian */
    .input-field.second-wrap input {
        width: 100%;
        padding: 10px;
        font-size: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-align: left;
    }

    .input-field.second-wrap input:focus {
        outline: none;
        border-color: #ff6f61; /* Warna fokus */
    }

    /* Tombol pencarian */
    .input-field.third-wrap .btn-search {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background-color: #970747;
        color: white;
        padding: 12px 15px;
        border: 2px solid transparent;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    /* Hover: Warna tombol dan border berubah */
    .input-field.third-wrap .btn-search:hover {
        background-color: #FC0254;
        color: #fff;
        border-color: #FF6F61; /* Warna border saat hover */
    }

    /* Ikon di tombol */
    .svg-inline--fa {
        width: 18px;
        height: 18px;
        fill: white;
        transition: fill 0.3s ease;
    }

    /* Ikon berubah saat hover */
    .input-field.third-wrap .btn-search:hover .svg-inline--fa {
        fill: #fff;
    }
</style>

    <!-- Search End -->

    <!-- Resep -->
    <div class="container pt-4 pb-2" style="max-width: 1200px;">
        <div class="row justify-content-center">
            <?php if (count($recipes) > 0): ?>
                <?php foreach ($recipes as $row): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <a href="detail_recipe.php?keyword=<?= urlencode($row->title) ?>" style="text-decoration: none; color: inherit;">
                            <div class="team-item bg-dark text-white" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                <div class="team-img position-relative overflow-hidden" style="border-radius: 10px 10px 0 0;">
                                    <img class="img-fluid w-100" src="<?= htmlspecialchars($row->photo) ?>" alt="Recipe Photo" style="height: 200px; object-fit: cover; transition: transform 0.3s ease, filter 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.filter='brightness(0.85)';" onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';">
                                </div>
                                <div class="text-center py-3" style="background-color: #970747; border-radius: 0 0 10px 10px;">
                                    <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 16px;"><?= htmlspecialchars($row->title) ?></h5>
                                    <p class="m-0 text-white" style="font-size: 12px;"><?= htmlspecialchars($row->categoryName) ?></p> 
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Pesan kosong jika tidak ada resep -->
                <p></p>
            <?php endif; ?>
        </div>
    </div>
    <!-- Resep End -->

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
