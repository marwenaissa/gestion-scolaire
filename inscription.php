<?php


session_start();

$prenom = $_POST['prenom']; 
$prenom = $_POST['nom']; 
$prenom = $_POST['email']; 
$prenom = $_POST['mdp'];


if(isset($_POST['email']))
{

 // connexion à la base de données
 $db_username = 'root';
 $db_password = '';
 $db_name = 'gestion_scolaire';
 $db_host = 'localhost';
 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
 or die('could not connect to database');
 
 $email = $_POST['email'];


 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
 


 
 if($email !== "")
 {
 $requete = "SELECT count(*) FROM user where 
 email = '".$email."' ";

$exec_requete = mysqli_query($db,$requete);
$reponse = mysqli_fetch_array($exec_requete);


var_dump($response);
die();
 


 $count = $reponse['count(*)'];
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {

    $requete = "insert into user ( nom , prenom , email , login , mdp ) values (".$nom.",".$prenom.",".$email.",".$login.",".$mdp.")";       
    $exec_requete = mysqli_query($db,$requete);

   

 header('Location: accueil.php');
 }
 else
 {
 header('Location: login.php?erreur=3'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>






