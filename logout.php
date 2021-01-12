<?php 
session_start();
session_destroy();
header("Location: ./index.php");

?>
<a href="index.php">Retour à l'acceuil</a>