<!-- Page une fois loggé -->
<main class="dashboardmain">
    <div class="pointage1">
        <?php   
        // echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];
        if($_SESSION['statut'] === 'chef'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';  
        } else if($_SESSION['statut'] === 'learner'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';   // Peut afficher des choses en plus
        }
            else{
        
                echo '<div class="div_statut"><p class="no_status">No status has been assigned to you...</br>
                Please disconnect and ask the chefs to assign you a status !!!</p></div>';
                
                 
            } ?>
    </div>

    <?php include('./Files_proteges/pointage.php') ?>

    <section class="calendrier">
        <h2>Calendrier</h2>

    </section>

    <div class="flex">
                <div class="boxRecette">

                <?php
                $reponse = $bdd->query('SELECT * FROM recette ORDER BY dateR');
                while($donnees = $reponse->fetch())
                {
                ?>
                <div class="boxTitre">
                    
                <div ><?php echo $donnees['dateR'] ?></div>
                <div ><?php echo $donnees['titre'] ?></div>
                <div ><?php echo $donnees['contenu'] ?></div>
                </div>
                <?php
                }         
                $reponse->closeCursor(); // Termine le traitement de la requête
                ?>
   
   
</div>
<div class="recetteDJ">RECETTE DU JOur</div>
            </div>
        </div> 
            </div> 

<?php include('./Files_proteges/creation_recette.php'); ?>



</main>
