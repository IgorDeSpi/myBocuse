<div class="boxRecette">

<?php
    $reponse = $bdd->query('SELECT * FROM recette ORDER BY dateR');
    while($donnees = $reponse->fetch())
    {
    ?>
<div class="boxTitre">

    <div class="calendrierDate">
    <?php echo  $donnees['dateR'] ,' <br> ',' ',$donnees['prenom'],' ',$donnees['nom'], ' <br> ' , $donnees['titre']  ;?></div>
    <div class="calendrierContenu"></div>
</div>
<?php
    }         
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>


</div>