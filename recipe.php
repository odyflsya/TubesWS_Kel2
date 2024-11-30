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
    <div class="hero-search" style="display: flex; justify-content: center; align-items: center; min-height: 300px; background: url('assets/img/search-bg.jpg') no-repeat center center/cover; width: 100%;">
        <div class="container" style="display: flex; justify-content: center; align-items: center; width: 100%;">
            <form action="#" method="POST" class="filter-search" style="display: flex; justify-content: center; align-items: center; gap: 15px;">
                <input type="text" name="keyword" placeholder="Temukan Resep" style="padding: 15px 20px; font-size: 18px; width: 300px; border: 1px solid #ccc; border-radius: 5px;">
                <button type="submit" name="cari" style="padding: 15px 20px; font-size: 18px; background-color: #970747; color: white; border: none; border-radius: 5px; cursor: pointer;">Temukan</button>
            </form>
        </div>
    </div>
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
