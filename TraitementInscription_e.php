<?php
$nom_e=$_POST['nom'];
$secteur=$_POST['secteur'];
$email=$_POST['email'];
$localisation=$_POST['localisation']
$nb_salarie=$_POST['nb_salarie']
$num=$_POST['numero'];
$pass=$_POST['password'];
$pass=password_hash($pass, PASSWORD_DEFAULT);
$servername = "localhost";
$username = "root";
try {
  $conn = new PDO('mysql:host=localhost;dbname=SAP;charset=utf8', 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="INSERT INTO entreprise(nom, prenom, numero , adresse, cv, motdepasse ) VALUES('$nom', '$prenom', '$num', '$email' , '$dest', '$pass' )";
  $res = $conn->prepare($sql);
  $res->execute();
  echo " Inscription success";
 
}
  catch(PDOException $e)
  {
  echo "Error: " . $e->getMessage();
  }
$conn = null;
?>