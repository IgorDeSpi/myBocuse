<?php
try
{
    
    $bdd = new PDO("mysql:host=localhost;dbname=my.bocuse;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<section class="recettes">
        <h2>Ajouter une recette</h2>
        <form method="post" action="">
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
                    if(isset($_POST['titre']) && isset($_POST['recette'])){
                        if(!empty($_POST['titre']) && !empty($_POST['recette'])){
                            // $titre = strip_tags(trim($_POST['titre']));
                                $date = $_POST['date'];
                                $test = $_SESSION['id'];
                                $mail = $_SESSION['email'];
                                $titre = $_POST['titre'];                           
                                $recette = $_POST['recette'];
                                $addRecette = $bdd->prepare("INSERT INTO recette (id_recette,user_recette, date_recette, titre, recette, email_recette) VALUES (NULL, ?, ?, ?, ?, ?)");
                                $addRecette->execute(array($test,$date,$titre, $recette, $mail));
                        }
                    }
        ?>
    </section>
