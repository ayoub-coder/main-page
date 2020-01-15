<HTML>
  <HEAD><meta charset="UTF-8"/><TITLE>DATA</TITLE></head>
    <body>
  <?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$port = 3306;
$dbname= "client";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse_mail=$_POST['adresse_mail'];
$telephone=$_POST['telephone'];
$con=mysqli_connect("127.0.0.1","root","");

if (!$con)

{
  die('could not connect'.mysqli_error($con));
}
mysqli_select_db($con,'client');
$query="INSERT INTO demandeur (nom,prenom,adresse_mail,telephone) VALUES('".$nom."','".$prenom."','".$adresse_mail."','".$telephone."')";
if (!mysqli_query($con,$query))
{
  die('Error in inserting data: <br>  '.mysqli_error($con));
}
?>
<?php header('location: maquette_site_personnalisation.html'); ?>

</body>
</HTML>
