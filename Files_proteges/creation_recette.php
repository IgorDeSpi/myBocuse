
<section class="recettes">
        <h2>Ajouter une recette</h2>
        <form method="post">
            <!-- <div class="divrecette"> -->
            <!-- <div class="user-box"> -->
            <table>
                <tr>
                    <td><label class="label">Nom de la recette</label></td>
                    <td><input class="input" id="name" type="text" name="titre" required></td>
                </tr>
                <tr>
                    <td><label class="label">Date</label></td>
                    <td><input class="date" id="date" type="date" name="date" required></td>
                </tr>
                <tr>
                    <td><label class="label">Description de la recette </label></td>
                    <td><textarea class="input" id='textarea' name="recette" required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="envoyerrecette">Envoyer</button></td>
                </tr>
            </table>
            </div>
            <!-- <div class="user-box"></div> -->
            </div>
            <!-- <div class="user-box" id="messageLabel">
                
            </div> -->
        </form>
        <?php

        // $bdd->exec('INSERT INTO recette(id_recette,user_recette,titre,recette) VALUE (NULL,"ok","ok","ok")');

                    if(isset($_POST['titre']) && isset($_POST['recette'])){
                  

                            // $dateTimeNaissance->createFromFormat('d/m/Y', $_POST['date']);
                            // $dateNaissanceSQL = $dateTimeNaissance->format('Y-m-d');


                            // $test = $_SESSION['email'];
                            // $titre = $_POST['titre'];
                            // $dateRecette = $_POST['dateRecette'];
                            // $recette = $_POST['recette'];
                     
                            // $addRecette = $bdd->prepare('INSERT INTO `recette` (`id_recette`, `user_recette`, `date_recette`, `titre`, `recette`) VALUES (NULL, ?,?, ?,?);)');
                            // $addRecette->execute(array($_SESSION['id'] ,$dateNaissanceSQL,$_POST['titre'],$_POST['recette']));

                            $bdd->exec('INSERT INTO recette(id_recette,user_recette,titre,recette) VALUE (NULL,"ok","ok","ok")');
                      
                    }
        ?>
    </section>