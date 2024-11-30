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

    <!-- Header Section Begin -->
    <?php include "header.php" ?>
    <!-- Header End -->

    <!-- Kuliner Start -->
    <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <h2>Pulau</h2>
                </div>
            </div>
    </div>
        <div class="container pt-4 pb-2" style="max-width: 1200px;">
            <div class="row justify-content-center">
                <!-- Kuliner 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <div class="team-item bg-dark text-white" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                        <div class="team-img position-relative overflow-hidden" style="border-radius: 10px 10px 0 0;">
                            <img class="img-fluid w-100" 
                                src="https://i.pinimg.com/236x/b9/05/ee/b905ee4c20c628207dd7f607f03fa556.jpg" 
                                alt="Guide Photo 1" 
                                style="height: 200px; object-fit: cover; transition: transform 0.3s ease, filter 0.3s ease;"
                                onmouseover="this.style.transform='scale(1.05)'; this.style.filter='brightness(0.85)';"
                                onmouseout="this.style.transform='scale(1)'; this.style.filter='brightness(1)';">
                        </div>
                        <div class="text-center py-3" style="background-color: #970747; border-radius: 0 0 10px 10px;">
                            <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 16px;">Lisa</h5>
                            <p class="m-0 text-white" style="font-size: 12px;">Kuliner 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kuliner End -->

    <!-- Footer Section Begin -->
    <?php include "footer.php" ?>
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