<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<script type="text/javascript" src="Script.js"></script>
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
    <a href="maquette_site_produit.html" target="_blank"onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Notre produit</a>
    <a href="maquette_site_usine.html" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">L'usine 4.0</a>
    <a href="maquette_site_propos.html" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">A propos</a>
    <a href="https://www.univ-orleans.fr/polytech/sp%C3%A9cialite-g%C3%A9nie-indutriel-appliqu%C3%A9-%C3%A0-la-cosm%C3%A9tique-la-pharmacie-et-lagroalimentaire" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Polytech</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:0px" id="showcase">
    <h1 class="w3-jumbo"><b>Savon 4.0</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>L'usine 4.0.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>

  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
     <form name="form1" id="ff" method="post" action="scriptbis.php">
    <div class="w3-half" "w3-left">
      <h1> Choisir une couleur </h1>
      <img src="couleur1.png" style="width:20%" onclick="Couleur1()"/>
      <img src="couleur2.png" style="width:20%" onclick="Couleur2()"/>
      <img src="couleur3.png" style="width:20%" onclick="Couleur3()"/>
      <img src="couleur4.png" style="width:20%" onclick="Couleur4()"/>
      <br>
      <p> &nbsp; &nbsp;couleur1    &nbsp; &nbsp; &nbsp;&nbsp;    couleur2   &nbsp; &nbsp;&nbsp;  &nbsp;      couleur3   &nbsp;&nbsp;   &nbsp;     couleur4</p>
      <input type="text" id="couleur" readonly value="Cliquez sur une couleur"  name="couleur" required>
      <br>
      <br>
      </form>
    </div>


      <div class="w3-half""w3-right">

      <h1> Choisir son parfum </h1>


      <input type="range" id="range" value="50" min="0" max="100" step="25" onclick="Parfum()">
      <br>
    Rose  <input type="text"size=15 id="parfumrose" readonly value="Quantité de parfum" name="parfumrose" required>
    <br>
    <br>
    Pivoine  <input type="text" size=15 id="parfumpivoine" readonly value="Quantité de parfum" name="parfumpivoine" required>
  </div>
</div>
<div class ="w3-center">
  <br>
  <br>
  <style>
  .button {
    display: inline-block;
    padding: 15px 25px;
    font-size: 24px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: white;
    background-color: #ff3333;
    border: none;
    border-radius: 15px;
    box-shadow: 0 6px 10px 3px #999;
  }

  .button:hover {background-color: #ff9999}

  .button:active {
    background-color: #ff9999;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  </style>
  </head>
  <body>

<button type="submit" class="button">Envoyer!</button>

</div>



</body>
</html>
