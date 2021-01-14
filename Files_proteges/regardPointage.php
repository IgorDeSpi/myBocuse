<h2>Pointage des élèves</h2>
<?php
$quiAPointe = $bdd->query('SELECT * FROM pointage ORDER BY jour');
while($donnees = $quiAPointe->fetch())
{
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    $start = $donnees['startTime'];
    $fin = $donnees['finish'];
    $date = $donnees['jour'];
}
$quiAPointe->closeCursor(); 
?>
<table class="tablePersonne">
    <tr class="bolder">
        <td class="td"> Nom</td>
        <td class="td"> Prenom</td>
        <td class="td"> Date</td>
        <td class="td"> Start</td>
        <td class="td"> Fin</td>
    </tr>
    <tr>
        <td class="td"><?php echo '<br>',$nom ?></td>
        <td class="td"><?php echo '<br>',$prenom ?></td>
        <td class="td"><?php echo '<br>',$date ?></td>
        <td class="td"><?php echo '<br>',$start ?></td>
        <td class="td"><?php echo '<br>',$fin ?></td>
    </tr>

</table>