<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">

    <h3 class="w3-padding-64"><b>Savon 4.0<br></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="maquette_site_produit.html" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Notre produit</a>
    <a href="maquette_site_usine.html" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">L'usine 4.0</a>
    <a href="maquette_site_propos.html" target="_blank"onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">A propos</a>
    <a href="https://www.univ-orleans.fr/polytech/sp%C3%A9cialite-g%C3%A9nie-indutriel-appliqu%C3%A9-%C3%A0-la-cosm%C3%A9tique-la-pharmacie-et-lagroalimentaire"target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Polytech</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Savon 4.0</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

<div class="w3-main" style="margin-left:320px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:0px" id="showcase">
 <h1 class="w3-jumbo"><b>Savon 4.0</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!-- Contact -->
  <div id="contact_form">
 	    <form name="form1" id="ff" method="post" action="script.php">
    <h1 class="w3-xxxlarge w3-text-red"><b>Coordonnées.</b></h1>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nom</label>
        <input class="w3-input w3-border" type="text" name="nom" required>
      </div>
      <div class="w3-section">
        <label>Prénom</label>
        <input class="w3-input w3-border" type="text" name="prenom" required>
      </div>
      <div class="w3-section">
        <label>Adresse mail</label>
        <input class="w3-input w3-border" type="text" name="adresse_mail" required>
      </div>
      <div class="w3-section">
        <label>Téléphone</label>
        <input class="w3-input w3-border" type="text" name="telephone" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" action= "maquette_site_personnalisation.html">Continuer</button>
    </form>
  </div>





</body>
</html>
