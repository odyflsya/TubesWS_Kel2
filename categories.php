<?php
require "functions.php";
use EasyRdf\Graph;

// Load RDF data
$graph = new Graph();
$graph->parseFile('inc/PiringLokal.rdf');

// Get the category from the query parameter (if it exists)
$categoryTitle = isset($_GET['category']) ? $_GET['category'] : null;

// Get categories from RDF data
$categories = $graph->allOfType('https://example.org/schema/piringlokal#Category');

// Prepare the filtered recipes array
$recipes = [];

// Check if a category is selected
if ($categoryTitle) {
    // Find the category resource based on the title
    $categoryResource = null;
    foreach ($categories as $category) {
        if ($category->getLiteral('dc:title') == $categoryTitle) {
            $categoryResource = $category;
            break;
        }
    }

    // If the category is found, filter the recipes for that category
    if ($categoryResource) {
        // Get all recipes and filter by the selected category
        $recipes = $graph->resourcesMatching('piringlokal:category', $categoryResource);
    }
} else {
    // If no category is selected, show all recipes
    $recipes = $graph->allOfType('https://example.org/schema/piringlokal#Recipe');
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Piring Lokal - Resep Nusantara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piring Lokal - <?php echo $categoryTitle ? $categoryTitle : 'Semua Resep'; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>

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
                        <li class="nav-item"><a href="recipe.php">Resep</a></li>
                        <li class="nav-item"><a href="about-me.php">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Recipe Display Section -->
    <div id="explore" style="padding: 100px 0; background-color: #ffffff;">
        <div class="container text-center">
            <h2><?php echo $categoryTitle ? $categoryTitle : 'Semua Resep'; ?></h2>
            <p>Nikmati cita rasa asli dari berbagai pulau di Indonesia!</p>
            <div class="row justify-content-center">
                <?php foreach ($recipes as $recipe): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="detail_recipe.php?keyword=<?= urlencode($graph->get($recipe, 'dc:title')); ?>" style="text-decoration: none; color: inherit;">
                            <div class="team-item bg-dark text-white" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                <div class="team-img position-relative overflow-hidden" style="border-radius: 10px 10px 0 0;">
                                    <img class="img-fluid w-100" 
                                         src="<?= htmlspecialchars($graph->get($recipe, 'piringlokal:photo')) ?>" 
                                         alt="<?= htmlspecialchars($graph->get($recipe, 'dc:title')) ?>" 
                                         style="height: 200px; object-fit: cover; transition: transform 0.3s ease, filter 0.3s ease;" 
                                         onmouseover="this.style.transform='scale(1.05)'; this.style.filter='brightness(0.85)';" 
                                         onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';">
                                </div>
                                <div class="text-center py-3" style="background-color: #970747; border-radius: 0 0 10px 10px;">
                                    <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 16px;"><?= htmlspecialchars($graph->get($recipe, 'dc:title')) ?></h5>
                                    <p class="m-0 text-white" style="font-size: 12px;"><?= htmlspecialchars($graph->get($recipe, 'piringlokal:category')->getLiteral('dc:title')) ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Footer Section Begin -->
    <footer class="footer-section" style="background-color: #970747; padding: 50px 0;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="fs-left d-flex align-items-center justify-content-start">
                        <div class="logo mr-4">
                            <a href="">
                                <img src="assets/img/footer-logoo.png" alt="Logo" style="max-width: 150px;">
                            </a>
                        </div>
                        <p style="text-align: justify; color: white !important; margin: 0; padding: 0 15px;">
                            Ruang untuk menggali lebih dalam keunikan masakan Nusantara yang kaya akan sejarah dan warisan tradisi yang tak ternilai.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
