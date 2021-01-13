<main class="dashboardmain">
    <div class="pointage1">
        <?php   
            // echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];


            if($_SESSION['statut'] === 'chef'){
                echo 'Bonjour CHEF ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';   //<--- Peut afficher des choses en plus
            }

        ?>