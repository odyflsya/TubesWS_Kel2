<?php
require 'vendor/autoload.php';
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
                        <li class="nav-item"><a href="recipe.php">Resep</a></li>
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

    <!-- Card Start -->
    <div class="container pt-4 pb-2" style="max-width: 1200px; padding: 0;">
        <div class="text-center mb-4">
            <h1 class="text-dark" style="font-size: 50px;">Destinasi Piring Lokal</h1>
        </div>
        <div class="row justify-content-center">
            <!-- Papua -->
            <div class="col-12 mb-4">
                <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                    <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                        <img class="img-fluid w-100 h-100" 
                             src="https://i.pinimg.com/236x/b9/05/ee/b905ee4c20c628207dd7f607f03fa556.jpg" 
                             alt="Guide Photo 1" 
                             style="object-fit: cover;">
                    </div>
                    <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                        <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;">Papua</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Papua memiliki keanekaragaman budaya, kuliner yang beragam serta keindahan alam yang luar biasa. Papua merupakan provinsi yang letaknya di pesisir utara Tanah Papua, Indonesia yang berdiri sejak 1 Mei 1963. Papua bukan hanya kaya akan sumber daya alamnya saja, tetapi juga makanan khas yang tentu tidak boleh untuk dilewatkan.</p>
                    </div>
                </div>
            </div>
            <!-- Kalimantan -->
            <div class="col-12 mb-4">
                <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                    <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                        <img class="img-fluid w-100 h-100" 
                             src="https://i.pinimg.com/236x/c0/23/2f/c0232f2d2c285ca50747840515503bbc.jpg" 
                             alt="Guide Photo 2" 
                             style="object-fit: cover;">
                    </div>
                    <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                        <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;">Kalimantan</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Pulau Kalimantan terkenal dengan julukan “Pulau Seribu Sungai” karena banyaknya sungai yang mengalir di pulau ini. Selain itu, Kalimantan terkenal akan destinasi wisatanya yang menjadi surga para pecinta alam. Begitu juga dengan warisan budayanya yang masih kental. Di samping itu, makanan khas Kalimantan memiliki sajian yang berbeda di tiap daerah, salah satu keunikan tersebut terdapat pada olahan kulinernya. Memadukan antara berbagai sumber daya alam yang ada dengan rempah khasnya, membuat makanan khas Kalimantan memiliki cita rasa yang begitu lezat.</p>
                    </div>
                </div>
            </div>
            <!-- Sumatera -->
            <div class="col-12 mb-4">
                <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                    <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                        <img class="img-fluid w-100 h-100" 
                             src="https://i.pinimg.com/236x/80/f9/a2/80f9a2d0f8a5fd2cf8c2fa553ded2efa.jpg" 
                             alt="Guide Photo 3" 
                             style="object-fit: cover;">
                    </div>
                    <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                        <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;">Sumatera</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Sumatera adalah pulau terbesar keenam di dunia dan memiliki kekayaan budaya serta kuliner yang sangat beragam. Makanan-makanan khas Sumatera dipengaruhi oleh berbagai suku, agama, dan tradisi yang ada di pulau ini, yang membuat setiap daerah di Sumatera memiliki masakan yang unik.</p>
                    </div>
                </div>
            </div>
            <!-- Sulawresi -->
            <div class="col-12 mb-4">
                <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                    <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                        <img class="img-fluid w-100 h-100" 
                             src="https://i.pinimg.com/236x/b9/05/ee/b905ee4c20c628207dd7f607f03fa556.jpg" 
                             alt="Guide Photo 1" 
                             style="object-fit: cover;">
                    </div>
                    <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                        <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;">Sulawesi</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Sulawesi merupakan pulau yang terletak di sebelah timur Indonesia, tepatnya terletak di antara pulau Kalimantan di sebelah barat serta Kepulauan Maluku sebelah di sebelah timur. Penduduk pulau Sulawesi rata- rata didominasi oleh suku Bugis- Makassar yang mayoritas dari mereka merupakan orang dagang. Keelokan alam serta laut pulau Sulawesi memunculkan energi tarik yang begitu kokoh sehingga membuat sekian banyak orang berbondong- bondong tiba ke pulau tersebut. Tidak hanya keelokan pariwisatanya, pulau Sulawesi pula populer dengan suguhan kuliner yang bermacam-macam.</p>
                    </div>
                </div>
            </div>
            <!-- Jawa -->
            <div class="col-12 mb-4">
                <div class="team-item d-flex align-items-center" style="border-radius: 10px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); width: 100%; padding: 10px 20px; background: linear-gradient(135deg, rgba(151, 7, 71, 0.95), rgba(151, 7, 71, 0.9));">
                    <div class="team-img" style="flex-shrink: 0; width: 200px; height: 200px; overflow: hidden; border-radius: 10px 0 0 10px;">
                        <img class="img-fluid w-100 h-100" 
                             src="https://i.pinimg.com/236x/c0/23/2f/c0232f2d2c285ca50747840515503bbc.jpg" 
                             alt="Guide Photo 2" 
                             style="object-fit: cover;">
                    </div>
                    <div class="team-info pl-3 pr-3 py-3" style="flex-grow: 1;">
                        <h5 class="text-truncate text-white" style="margin-bottom: 5px; font-size: 28px;">Jawa</h5>
                        <p class="m-0 text-white" style="font-size: 14px;">Pulau Jawa, sebagai pusat pemerintahan dan ekonomi Indonesia, menawarkan keindahan alam yang luar biasa dengan pegunungan, pantai, serta kota-kota besar seperti Jakarta, Yogyakarta, dan Surabaya yang kaya akan budaya dan sejarah. Selain itu, kuliner Jawa juga sangat beragam dan menggugah selera, seperti Gudeg dari Yogyakarta, Sate Maranggi dari Jawa Barat, hingga Rawon khas Jawa Timur yang pedas dan gurih. Makanan di Jawa tidak hanya sekadar hidangan, tetapi juga mencerminkan tradisi dan keramahan masyarakat, menjadikannya bagian penting dari identitas budaya pulau ini yang tak boleh dilewatkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card End -->

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
                        <!-- Piring Lokal -->
                        <p style="text-align: justify; color: white !important; margin: 0; padding: 0 15px;">
                        Ruang untuk menggali lebih dalam keunikan masakan Nusantara yang kaya akan sejarah dan warisan tradisi yang tak ternilai. Melalui sajian yang autentik dan penuh makna, Piring Lokal menghubungkan kita dengan akar tradisi yang telah diwariskan dari generasi ke generasi. Ini adalah perjalanan kuliner yang tidak hanya memuaskan lidah, tetapi juga menguatkan rasa kebersamaan dan kebanggaan akan keberagaman budaya Indonesia yang luar biasa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Copyright -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Piring Lokal dibuat dengan 
                    <i class="fa fa-heart-o" aria-hidden="true" style="cursor: pointer; color: white;" onclick="this.className='fa fa-heart'; this.style.color='maroon';"></i> oleh 
                    <a href="about-me.php#team-section" style="color: white; text-decoration: none;" onmouseover="this.style.color='#0056b3'; this.style.textDecoration='underline';" onmouseout="this.style.color='white'; this.style.textDecoration='none';"> Si Kulinerie </a>
                    <!-- Copyright -->
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