<!-- Page une fois loggé -->

<main class="dashboardmain">

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
        <form class="formulaire">
            <div class="divrecette">
                <div class="user-box">
                    <label class="label">Nom de la recette</label>
                    <input class="input" id="name" type="text" name="" required>
                </div>
                <div class="user-box">
                    <label class="label">Date</label>
                    <input class="date" id="date" type="date" name="" required>
                </div>
            </div>
            <div class="user-box" id="messageLabel">
                <label class="label">Description de la recette </label>
                <textarea class="input" id='textarea' name="" required></textarea>
                <button class="envoyerrecette">Envoyer</button>
            </div>
        </form>
    </section>
</main>