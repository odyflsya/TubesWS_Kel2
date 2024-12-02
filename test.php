<?php
require "functions.php";
use EasyRdf\Graph;

// Load RDF data
$graph = new Graph();
$graph->parseFile('inc/PiringLokal.rdf');

// Get categories from RDF data
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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

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
                        <li class="nav-item"><a href="recipe.php">Resep</a></li>
                        <li class="nav-item"><a href="about-me.php">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Card Start -->
<!-- Scrollable Content Section -->
<div id="explore" style="padding: 100px 0; background-color: #ffffff;">
    <div class="container text-center">
        <h2>Petualangan Rasa dari Pulau ke Pulau</h2>
        <p>Nikmati cita rasa asli dari berbagai pulau di Indonesia!</p>
        <div class="row justify-content-center">
            <?php foreach ($categories as $category): ?>
                <div class="col-12 mb-4">
                    <!-- Link to categories.php with the category name as a query parameter -->
                    <a href="categories.php?category=<?php echo urlencode($category->getLiteral('dc:title')); ?>">
                    <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                            <!-- Gambar kategori -->
                            <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                                <img class="img-fluid w-100 h-100" 
                                     src="<?php echo $category->getResource('piringlokal:photo'); ?>" 
                                     alt="<?php echo $category->getLiteral('dc:title'); ?>" 
                                     style="object-fit: cover;">
                            </div>
                            <!-- Info kategori -->
                            <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                                <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;"><?php echo $category->getLiteral('dc:title'); ?></h5>
                                <p class="m-0 text-white" style="font-size: 14px;"><?php echo $category->getLiteral('dc:description'); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


    <!-- Card End -->

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
                        Ruang untuk menggali lebih dalam keunikan masakan Nusantara yang kaya akan sejarah dan warisan tradisi yang tak ternilai.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
