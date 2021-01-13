

<section>

<div class="main_container_recette">
    <form class="formulaire_recette" method="post">

        <h2 class="title">Ajouter une recette</h2>
        <table class="tableau_recette">

            <tr>
                <td><label class="label">Nom de la recette</label></td>
                <td><input class="nom_recette" id="name" type="text" name="titre" required></td>
            </tr>
            <tr>
                <td><label class="label">Date</label></td>
                <td><input class="date_recette" id="date" type="date" name="date" required></td>
            </tr>
            <tr>
                <td><label class="label">Description de la recette </label></td>
                <td><textarea class="description" type="text" id='textarea' name="recette" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" id="confirm_recette" value="Confirm" /> </td>
               
            </tr>
        </table>

    </form>
</div>

<?php

    if(isset($_POST['titre']) && isset($_POST['recette'])){
        header('Location: index.php');
        if(!empty($_POST['titre']) && !empty($_POST['recette'])){
        // $titre = strip_tags(trim($_POST['titre']));
        $date = $_POST['date'];
        $test = $_SESSION['id'];
        $titre = strip_tags(trim($_POST['titre']));                           
        $recette = strip_tags(trim($_POST['recette']));
        $addRecette = $bdd->prepare("INSERT INTO recette (id,userID, dateR, titre, contenu) VALUES (NULL, ?, ?, ?, ?)");
        $addRecette->execute(array($test,$date,$titre, $recette));
        }
    }    
?>

    </section>

