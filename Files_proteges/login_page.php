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
                    <button> 9:00</button>
                </div>
                <div class="heurepointage">
                    <h3>End</h3>
                    <button>17:00</button>
                </div>
            </div>
        </div>
    </section>


    <section class="calendrier">
        <h2>Calendrier</h2>
    </section>

    <section class="recettes">
        <h2>Ajouter une recette</h2>
        <form>
            <!-- <div class="divrecette"> -->
                <!-- <div class="user-box"> -->
                <table>
                <tr>
                    <td><label class="label">Nom de la recette</label></td><td><input class="input" id="name" type="text" name="" required></td>
                </tr>
                <tr>
                <td><label class="label">Date</label></td><td><input class="date" id="date" type="date" name="" required></td>
                </tr>
                <tr>
                <td><label class="label">Description de la recette </label></td><td><textarea class="input" id='textarea' name="" required></textarea></td>
                </tr>
                <tr>
                <td></td><td><button class="envoyerrecette">Envoyer</button></td>
                </tr>
                </table>
                    
                    
                </div>
                <!-- <div class="user-box"></div> -->
            </div>
            <!-- <div class="user-box" id="messageLabel">
                
                
                
            </div> -->
        </form>
    </section>
</main>