<!-- Page une fois loggé -->
<main class="dashboardmain">
    <div class="pointage1">
        <?php   echo 'Bienvenu ', $_SESSION['statut'],' ',$_SESSION['prenom'],' ',$_SESSION['nom'];
?>
    </div>
    <section class="pointage">
        <div class="pointage1">
            <h2>Pointage</h2>
            <div class="pointage2">
                <div class="heurepointage">
                    <h3>Start</h3>
                    <button id="bouton_pointage"> 9:00</button>
                </div>
                <div class="heurepointage">
                    <h3>End</h3>
                    <button id="bouton_pointage">17:00</button>
                </div>
            </div>
        </div>
    </section>


    <section class="calendrier">
        <h2>Calendrier</h2>
    </section>

    <!-- <section class="recettes"> -->
        <!-- <h2></h2> -->
        <div class="main_container_recette">
            <form class="formulaire_recette">
                <!-- <div class="divrecette"> -->
                <!-- <div class="user-box"> -->
                <h2 class="title">Ajouter une recette</h2>
                <table class="tableau_recette">
                    
                    <tr>
                        <td><label class="label">Nom de la recette</label></td>
                        <td><input class="nom_recette" id="name" type="text" name="" required></td>
                    </tr>
                    <tr>
                        <td><label class="label">Date</label></td>
                        <td><input class="date_recette" id="date" type="date" name="" required></td>
                    </tr>
                    <tr>
                        <td><label class="label">Description de la recette </label></td>
                        <td><textarea class="description" type="text" id='textarea' name="" required></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" id="confirm_recette" value="Confirm" /> </td>
                    </tr>
                </table>


        </div>
        <!-- <div class="user-box"></div> -->
        </div>
        <!-- <div class="user-box" id="messageLabel">
                
                
                
            </div> -->
        </form>
        </div>
    <!-- </section> -->
</main>