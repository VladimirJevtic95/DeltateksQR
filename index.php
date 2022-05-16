<?php

if ($_GET['PO'] == 1) {
  $poreklo = "Indija";
} else if ($_GET['PO'] == 2) {
  $poreklo = "Turska";
} else if ($_GET['PO'] == 3) {
  $poreklo = "Bugarska";
} else if ($_GET['PO'] == 4) {
  $poreklo = "Kina";
} else if ($_GET['PO'] == 5) {
  $poreklo = "Severna Makedonija";
} else if ($_GET['PO'] == 6) {
  $poreklo = "Pakistan";
} else {
  $poreklo = "Greška pri učitavanju QR koda";
}

$artikal = $_GET['ART'];

$proizvodjac = $_GET['PR'];

?>

<!DOCTYPE html>
<html lang="sr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="title" content="QR deklaracija | Deltateks DOO Beograd" />
  <meta name="description" content="Qr deklaracija proizvoda proizvedenih po specifikaciji i dizajnu preduzeća Deltateks D.O.O." />

  <title>Specifikacija | Deltateks DOO Beograd</title>

  <script src="https://kit.fontawesome.com/5219854683.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="card">
        <div class="card_image">
          <img src="info_img.png" alt="info image" />
        </div>

        <!-- https://qr-deklaracija.deltateks.rs?PR=Deltateks+D.O.O.&PO=2&ART=Peškir+Vez -->


        <div class="card_company">Deltateks D.O.O.</div>

        <div class="card_article"><?php echo $artikal; ?></div>

        <div class="card_article_description">
          <p>Artikal izrađen po specifikaciji i dizajnu preduzeća za proizvodnju, trgovinu i usluge Deltateks - EXPORT - IMPORT D.O.O.</p>
          <p style="padding-top: 10px">Adresa: Pilota Mihaila Petrovića 81, 11090 Beograd</p>
          <p style="padding-top: 10px"><strong>Proizvođač: </strong> <?php echo $proizvodjac; ?></p>
          <p style="padding-top: 6px"><strong>Zemlja porekla:</strong> <?php echo $poreklo; ?></p>
          <p style="padding-top: 6px"><strong>Uvoznik za Srbiju:</strong> Deltateks D.O.O.</p>
        </div>

        <div class="card_social clearfix">
          <div class="one-forth">
            <a href="https://www.instagram.com/deltateks/"> <i class="card_soc_icon fa-brands fa-instagram"></i></a>
          </div>

          <div class="one-forth">
            <a href="https://www.facebook.com/deltateks"> <i class="card_soc_icon fa-brands fa-facebook"></i></a>
          </div>

          <div class="one-forth">
            <a href="https://deltateks.rs/"> <i class="card_soc_icon fa-solid fa-earth-europe"></i></a>
          </div>

          <div class="one-forth no-border">
            <a href="https://deltateks.rs/kontakt.html"> <i class="card_soc_icon fa-solid fa-message"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>