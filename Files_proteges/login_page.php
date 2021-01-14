<!-- Page une fois loggé -->
<main class="dashboardmain">
    <div class="pointage1">
        <?php   
        // echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];
        if($_SESSION['statut'] === 'Chef'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';  
        } else if($_SESSION['statut'] === 'Learner'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';   // Peut afficher des choses en plus
            include('./Files_proteges/pointage.php');
        }
            ?>
    </div>

    <section class="calendrier">
        <h2>Calendrier</h2>

    </section>

    <div class="flex">
        <?php include('./Files_proteges/calendrierRecette.php'); ?>
        <div>   

            <form action="" method="post">  
            <input  type="date" name="dateP" value=<?php 
            if($_SESSION['statut'] === 'learner'){
                echo $jour;
            }
              ?> required>
            <input type="submit"  value="recherche"required>
            </form>
            
        </div>
            <div class="recetteDJ">
                    RECETTE DU JOUR
                <div>
                <?php 
            if(isset($_POST["dateP"])){ 
                $dateDemand = $_POST["dateP"];
                echo'<br>';
                $recherche = $bdd->prepare('SELECT * FROM recette WHERE dateR=?');
                $recherche->execute([$dateDemand]);
                while($donnee = $recherche->fetch()){

                   echo $donnee['dateR'],'<br>';
                   echo $donnee['contenu'];
                
                }
                $reponse->closeCursor();
            }
            ?>
                </div>
            </div>
        
    </div>
    <?php include('./Files_proteges/creation_recette.php'); ?>

</main>
