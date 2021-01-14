<?php
// On doit lié notre page user quelque part dans notre site pour reload a chaque entrée ainsi --> envoi vers bdd liée e,suite l'enlever et gitignore le fichier exemple : <a href="user.php">TEST</a> pour accéder à la page php et la reload

include('secret.php');


try
{
    $bdd = new PDO("mysql:host=localhost;dbname=my.bocuse;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$password = '2621Abe';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql =$bdd->prepare ( "INSERT INTO mybocuse (statut, first_name, last_name, password, email)
VALUES ('chef', 'jean-pierre','coffe', ? ,'jean-pierrecoffe@gmail.com')");

$sql->execute(array($hashed_password));

?>