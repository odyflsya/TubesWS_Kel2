<?php
require_once 'functions.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

$recipeDetails = getRecipeByKeyword($keyword);

if ($recipeDetails->count() > 0) {
    $recipe = $recipeDetails->current();
    $title = $recipe->title;
    $description = $recipe->description;
    $category = $recipe->category;
    $photo = $recipe->photo;
    $ingredients = $recipe->ingredients;
    $steps = $recipe->steps;
} else {
    echo "Resep tidak ditemukan.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep - <?= htmlspecialchars($title) ?></title>
    
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

    <section class="single-page-recipe spad">
        <div class="container">
            <div class="row">
                <!-- Kolom untuk gambar dan informasi resep -->
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="<?= htmlspecialchars($photo) ?>" alt="<?= htmlspecialchars($title) ?>">
                            <h2><?= htmlspecialchars($title) ?></h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="salad-list">
                                    <ul>
                                        <?php
                                        $ingredientsArray = explode(';', $ingredients); 
                                        foreach ($ingredientsArray as $ingredient) {
                                            echo "<li>" . htmlspecialchars(trim($ingredient)) . "</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kolom untuk deskripsi dan instruksi -->
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p><?= htmlspecialchars($description) ?></p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <?php
                                $stepsArray = explode('.', $steps);

                                foreach ($stepsArray as $index => $step) {
                                    $step = trim($step);
                                    if (!empty($step)) {
                                        echo "<li><span>" . sprintf('%02d', $index + 1) . ".</span> " . htmlspecialchars($step) . "</li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "footer.php" ?>
    <!-- Footer End -->

</body>
</html>
