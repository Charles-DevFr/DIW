<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The district Contact</title>
    <link rel="shortcut icon" type="image/png" href="images_the_district/the_district_brand/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="TheDistrict_Contact.css">
</head>
<body id="body">
    <div class="container">
        <?php
        require_once("TheDistrict_header.php");
        ?>
      <section class="row">
        <div>
          <svg  class="d-none d-md-block animation h-25 position-absolute bottom-50">
                <text x="50%" y="50%" dy= "68px" text-anchor="middle">
                    The District
                </text>
            </svg>
        </div>
        <img src="images_the_district/bg2.jpeg" id="image">
    </section>
      <br><br>
      <div class="container">
        <form id="formulaire">
        <div class="row">
          <div class="mb-4 col-6">
            <label for="InputName" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom">
            <p>Ce champ est obligatoire</p>
          </div>
          <div class="mb-4 col-6">
            <label for="InputName" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom">
          </div>
          <div class="mb-4 col-6">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="email" placeholder="Charles-DevFr@Gmail.com">
          </div>
          <div class="mb-4 col-6">
            <label for="phone" class="form-label">Téléphone</label>
            <input type="text" class="form-control" id="telephone">
            <p>Ce champ est obligatoire</p>
          </div>
          <div class="mb-4 col-12">
            <label for="exampleFormControlTextarea1" class="form-label">Votre demande</label>
            <textarea class="form-control" id="demande" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="container">
        <button type="submit" class="btn btn-secondary btn-lg" id="bouton" >Envoyer</button>
      </div>
    </form>
  </div>
      <br><br>
      <div class="container">
        <?php
        require_once("TheDistrict_footer.php");
        ?>
      </div>
    </div>
    <script src="TheDistrict_Contact.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>