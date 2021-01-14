<div class="boxRecette">

<?php
    $reponse = $bdd->query('SELECT * FROM recette ORDER BY dateR');
    while($donnees = $reponse->fetch())
    {
    ?>
<div class="boxTitre">

    <div class="calendrierDate"><?php echo  $donnees['dateR'] ,' | ', $donnees['titre']  ;?></div>
    <div class="calendrierContenu"><?php echo '<br>', $donnees['contenu']; ?></div>
</div>
<?php
    }         
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>


</div>