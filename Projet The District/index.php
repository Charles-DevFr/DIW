<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1.0">
        <title>The district Accueil</title>
        <link rel="shortcut icon" type="image/png" href="image/the_district_brand/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
        <link rel="stylesheet" href="css/TheDistrict_Accueil.css">
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
            <video autoplay muted loop id="video"> 
              <source src="image/Image_ajouté/BugerCut.mp4" type="video/mp4">
            </video>
            <div class="mb-3 d-none d-md-block">
              <label for="recherche" class="form-label"></label>
              <input type="text" class="form-control-lg" id="recherche" placeholder="Recherche...">
            </div>
        </section>
        <div class="parallax">
        <br>
        <div class="container"> 
            <div id="categoryaccueil" class="row">
                <span class="allcategory col-12 col-md-4">
                  <div id="category01">
                    <a href="TheDistrict_CatBurger.php">
                    <img src="image/category/burger_cat.jpg" width="280px" height="280px" id="category1" class="grow">
                    </a>
                    <p>Burger</p>
                  </div>
                </span>
                <span class="allcategory col-12 col-md-4">
                  <div id="category02">
                    <a href="TheDistrict_CatPizza.php">
                    <img src="image/category/pizza_cat.jpg" width="280px" height="280px" id="category2" class="grow">
                    </a>
                    <p>Pizza</p>
                  </div>
                </span>
                <span class="allcategory col-12 col-md-4">
                  <div id="category03">
                    <a href="TheDistrict_CatWrap.php">
                    <img src="image/category/wrap_cat.jpg" width="280px" height="280px" id="category3" class="grow">
                    </a>
                    <p>Wrap</p>
                  </div>
                </span>
                <span class="allcategory col-12 col-md-4">
                  <div id="category04">
                    <a href="TheDistrict_CatPasta.php">
                    <img src="image/category/pasta_cat.jpg" width="280px" height="280px" id="category4" class="grow">
                   </a>
                    <p>Pasta</p>
                  </div>
                </span>
                <span class="allcategory col-12 col-md-4">
                  <div id="category05">
                    <a href="TheDistrict_CatAsian.php">
                    <img src="image/category/asian_food_cat.jpg" width="280px" height="280px" id="category5" class="grow">
                    </a>
                    <p>Asian</p>
                  </div>
                </span>
                <span class="allcategory col-12 col-md-4">
                  <div id="category06">
                    <a href="TheDistrict_CatSalade.php">
                    <img src="image/category/salade_cat.jpg" width="280px" height="280px" id="category6" class="grow">
                    </a>
                    <p>Salade</p>
                  </div>
                </span>
            </div>
          </div>
        <br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner d-none d-md-block">
            <div class="carousel-item active">
              <div class="container">
                <div id="plataccueil" class="row">
                  <span class="col-3">
                  <div id="plat1">
                    <img src="image/food/Asian food/poulet-aigre-douce.png" width="280px" height="180px" id="plat01">
                    <p>Plat 1</p>
                  </div>
                  </span>
                  <span class="col-3">
                  <div id="plat2">
                    <img src="image/food/Boulangerie/PainBanane.jpg" width="280px" height="180px" id="plat02">
                    <p>Plat 2</p>
                  </div>
                </span>
                <span class="col-3">
                  <div id="plat3">
                    <img src="image/food/Burger/burger2.png" width="280px" height="180px"  id="plat03">
                    <p>Plat 3</p>
                  </div>
                </span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div id="plataccueil" class="row">
                  <span class="col-3">
                  <div id="plat1">
                    <img src="image/food/Dessert/TarteletteCitron.jpg" width="280px" height="180px" id="plat01">
                    <p>Plat 4</p>
                  </div>
                  </span>
                  <span class="col-3">
                  <div id="plat2">
                    <img src="image/food/Fromage/Mozza.jpg" width="280px" height="180px" id="plat02">
                    <p>Plat 5</p>
                  </div>
                </span>
                <span class="col-3">
                  <div id="plat3">
                    <img src="image/food/Pasta/SpaghettiBolo.jpg" width="280px" height="180px"  id="plat03">
                    <p>Plat 6</p>
                  </div>
                </span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div id="plataccueil" class="row">
                  <span class="col-3">
                  <div id="plat1">
                    <img src="image/food/Pizza/calzone.jpg" width="280px" height="180px" id="plat01">
                    <p>Plat 7</p>
                  </div>
                  </span>
                  <span class="col-3">
                  <div id="plat2">
                    <img src="image/food/Plat Traditionelle/BoeufBourguignon.jpg" width="280px" height="180px" id="plat02">
                    <p>Plat 8</p>
                  </div>
                </span>
                <span class="col-3">
                  <div id="plat3">
                    <img src="image/food/Salade/SaladeCesar.jpg" width="280px" height="180px"  id="plat03">
                    <p>Plat 9</p>
                  </div>
                </span>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div id="plataccueil" class="row">
                  <span class="col-3">
                  <div id="plat1">
                    <img src="image/food/Snack/CroqueMadame.jpg" width="280px" height="180px" id="plat01">
                    <p>Plat 10</p>
                  </div>
                  </span>
                  <span class="col-3">
                  <div id="plat2">
                    <img src="image/food/Veggie/CouscousVeggie.jpg" width="280px" height="180px" id="plat02">
                    <p>Plat 11</p>
                  </div>
                </span>
                <span class="col-3">
                  <div id="plat3">
                    <img src="image/food/Wrap/WrapBuffaloChiken.jpg" width="280px" height="180px"  id="plat03">
                    <p>Plat 12</p>
                  </div>
                </span>
                </div>
              </div>
            </div>
          </div>
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
  </body>
</html>