<HTML>
  <HEAD><meta charset="UTF-8"/><TITLE>DATA</TITLE></head>
    <body>
  <?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$port = 3306;
$dbname= "client";

$couleur=$_POST['couleur'];
$parfumrose=$_POST['parfumrose'];
$parfumpivoine=$_POST['parfumpivoine'];
$con=mysqli_connect("127.0.0.1","root","");

if (!$con)

{
  die('could not connect'.mysqli_error($con));
}
mysqli_select_db($con,'client');
$query="INSERT INTO demandeurbis (couleur,parfumrose,parfumpivoine) VALUES('".$couleur."','".$parfumrose."','".$parfumpivoine."')";
if (!mysqli_query($con,$query))
{
  die('Error in inserting data: <br>  '.mysqli_error($con));
}
?>
<?php header('location: maquette_site_resumesite.html'); ?>

?>
</body>
</HTML>
