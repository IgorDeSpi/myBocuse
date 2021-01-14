<!-- Page une fois loggé -->
<main class="dashboardmain">
    <div class="pointage1">
        <?php   
        // echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];

        if($_SESSION['statut'] == 'Chef'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';  
            // include('./Files_proteges/regardPointage.php');


        } else if($_SESSION['statut'] === 'Learner'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';   // Peut afficher des choses en plus
            include('./Files_proteges/pointage.php');
        }
            ?>
    </div>

    <section class="calendrier">
        <h2>THE RECETTE Calendar</h2>
        <div>   

            <form action="" method="post">  
            <input  type="date" name="dateP" value=<?php if($_SESSION['statut'] === 'learner'){ echo $jour; }?> required>
            <input type="submit"  value="recherche"required>
            </form>
            
        </div>
    </section>

    <div class="flex">
        <?php include('./Files_proteges/calendrierRecette.php'); ?>

        <!-- contenu des recettes choisis -->
            <div class="recetteDJ">
                    <div>
                    <?php 
                        if(isset($_POST["dateP"])){ 
                            $dateDemand = $_POST["dateP"];
                            echo'<br>';
                            $recherche = $bdd->prepare('SELECT * FROM recette WHERE dateR=?');
                            $recherche->execute([$dateDemand]);
                            while($donnee = $recherche->fetch()){
                                    
                            $date = $donnee['dateR'];
                            $titre = $donnee['titre'];
                            $contenu = $donnee['contenu'];
                            echo '<div class="dateRecette">', $date ,'</div>';
                            echo '<div class="dateRecette">', $titre, '</div>';
                            echo '<div class="contenuRecette">', $contenu ,'</div>';
                            }
                            $reponse->closeCursor();
                        }
                
                        ?>

                    
                    
                    
                  

                    </div>
            </div>
        
    </div>
    <?php include('./Files_proteges/creation_recette.php'); ?>

</main>
