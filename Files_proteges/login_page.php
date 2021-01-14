<!-- Page une fois loggé -->
<main class="dashboardmain">
    <div class="pointage1">
        <?php   
        // echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];
        if($_SESSION['statut'] === 'chef'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';  
        } else if($_SESSION['statut'] === 'learner'){
            echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' ! ';   // Peut afficher des choses en plus
<<<<<<< HEAD
        }
            else{
        
                echo '<div class="div_statut"><p class="no_status">No status has been assigned to you...</br>
                Please disconnect and ask the chefs to assign you a status !!!</p></div>';
                
                 
            } ?>
    </div>

    <?php include('./Files_proteges/pointage.php') ?>

=======
            include('./Files_proteges/pointage.php');
        }
            ?>
    </div>

>>>>>>> fb75ed8a1b82571bd9d2b21e6fa8876d77d0cf89
    <section class="calendrier">
        <h2>Calendrier</h2>

    </section>

    <div class="flex">
<<<<<<< HEAD
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
=======
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
                print_r($dateDemand);
                echo'<br>';
                $recherche = $bdd->prepare('SELECT * FROM recette WHERE dateR=?');
                $recherche->execution(array([$dateDemand]));
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
>>>>>>> fb75ed8a1b82571bd9d2b21e6fa8876d77d0cf89



</main>
