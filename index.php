<?php
session_start();
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=my.bocuse;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet"> 
    <title>My.Bocuse</title>
    
    <link rel="icon" href="./favicon.ico" type="image/png" />
</head>

<body>
<?php 
    
    if(isset($_POST['email'])&& isset($_POST['pwd'])){
     
        $request = $bdd->prepare('SELECT id,email ,pass, first_name,last_name,statut FROM mybocuse WHERE email=?');
        $request->execute([
            strip_tags(trim($_POST['email'])),
        ]);
        $data = $request ->fetch();
            if($data['pass'] === sha1($_POST['pwd'])){
                $_SESSION['id'] = $data['id'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['pass'] = $data['pass'];
                $_SESSION['prenom'] = $data['first_name'];
                $_SESSION['nom'] = $data['last_name'];
                $_SESSION['statut'] = $data['statut'];
            }
            else if(['pass'])
            $request->closeCursor();
        }

        if(!empty($_SESSION)){
            include('./Files_proteges/header_login_page.php');
            if($_SESSION['statut'] === 'Chef' || $_SESSION['statut'] === 'Learner'){
                include('./Files_proteges/login_page.php'); 

            } 

            else{
        
                echo '<div class="div_statut"><p class="no_status">No status has been assigned to you...</br>
                Please disconnect and ask the chefs to assign you a status !!!</p></div>';
                
            }
            } 
            else {
            // Header 
            include('./Files_proteges/header_formulaire.php'); 
            // Main 
            include('./Files_proteges/formulaire.php');
        }
include('./Files_proteges/footer.php')
?>


  
</body>
<script src="script.js"></script>
</html>
