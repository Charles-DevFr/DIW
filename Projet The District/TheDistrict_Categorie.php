<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The district Categorie</title>
    <link rel="shortcut icon" type="image/png" href="image/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TheDistrict_Categorie.css">
</head>
<body id="body">
    <div class="container">
        <?php
        require_once("TheDistrict_header.php");
        ?>
      <section class="row">
        <div>
          <svg  class="d-none d-md-block animation h-25 position-absolute bottom-50">
            <text x="50%" y="50%" dy= "60px" text-anchor="middle">
              The District
            </text>
          </svg>
        </div>
          <img src="image/bg2.jpeg" id="image">
      </section>
      <br><br>
      <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
                <div id="categoryaccueil" class="row">
                    <span class="allcategory col-4">
                      <div id="category01">
                        <a href="TheDistrict_CatBurger.php">
                        <img src="image/category/burger_cat.jpg" id="category1" class="image-fluid">
                        </a>
                        <p>Burger</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category02">
                        <a href="TheDistrict_CatPizza.php">
                        <img src="image/category/pizza_cat.jpg" id="category2" class="image-fluid">
                        </a>
                        <p>Pizza</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category03">
                        <a href="TheDistrict_CatWrap.php">
                        <img src="image/category/wrap_cat.jpg" id="category3" class="image-fluid">
                        </a>
                        <p>Wrap</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category04">
                        <a href="TheDistrict_CatPasta.php">
                        <img src="image/category/pasta_cat.jpg" id="category4" class="image-fluid">
                        </a>
                        <p>Pasta</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category05">
                        <a href="TheDistrict_CatAsian.php">
                        <img src="image/category/asian_food_cat.jpg" id="category5" class="image-fluid">
                        </a>
                        <p>Asian</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category06">
                        <a href="TheDistrict_CatSalade.php">
                        <img src="image/category/salade_cat.jpg" id="category6" class="image-fluid">
                        </a>
                        <p>Salade</p>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <div class="container"> 
                <div id="categoryaccueil" class="row">
                    <span class="allcategory col-4">
                      <div id="category01">
                        <a href="TheDistrcit_CatPlatduterroir.php">
                        <img src="image/category/Platduterroir_cat.jpg" id="category1" class="image-fluid">
                        </a>
                        <p>Plat du terroir</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category02">
                        <a href="TheDistrict_CatSandwich.php">
                        <img src="image/category/sandwich_cat.jpg" id="category2" class="image-fluid">
                        </a>
                        <p>Sandwich</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category03">
                        <a href="TheDistrict_CatSnack.php">
                        <img src="image/category/Snack_cat.jpg" id="category3" class="image-fluid">
                        </a>
                        <p>Snack</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category04">
                        <a href="TheDistrict_CatVeggie.php">
                        <img src="image/category/veggie_cat.jpg" id="category4" class="image-fluid">
                        </a>
                        <p>Veggie</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category05">
                        <a href="TheDistrict_CatDessert.php">
                        <img src="image/category/Dessert_cat.jpg" id="category5" class="image-fluid">
                        </a>
                        <p>Dessert</p>
                      </div>
                    </span>
                    <span class="allcategory col-4">
                      <div id="category06">
                        <a href="TheDistrict_CatFromage.php">
                        <img src="image/category/Fromage_cat.jpg" id="category6" class="image-fluid">
                        </a>
                        <p>Fromage</p>
                      </div>
                    </span>
                </div>
              </div>
          </div>
          <button class="carousel-control-prev d-none" id="bouton1" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class=""></span>
            </button>        
            <button class="carousel-control-next d-none" id="bouton2" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class=""></span>
            </button>
        </div>
        <br>
      </div>
      <br>
      <div class="container">
        <div class="row justify-content-around">
          <button type="button" class="btn btn-secondary btn-lg col-md-2 col-4" onclick="precedent()">Précédent</button>
          <button type="button" class="btn btn-secondary btn-lg col-md-2 col-4" onclick="suivant()">Suivant</button>
        </div>
      </div>
      <br><br>
      <div class="container">
        <?php
        require_once("TheDistrict_footer.php");
        ?>
      </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="js/TheDistrict_Categorie.js"></script>
</body>
</html>