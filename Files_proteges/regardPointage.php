<h2>Pointage des élèves</h2>
<table class="tablePersonne">
    <tr class="bolder">
        <td class="td"> Nom</td>
        <td class="td"> Prenom</td>
        <td class="td"> Date</td>
        <td class="td"> Start</td>
        <td class="td"> Fin</td>
    </tr>
<?php
$quiAPointe = $bdd->query('SELECT * FROM pointage ');
while($donnees = $quiAPointe->fetch())
{
?>
 <tr>
    <td class="td"><?php echo '<br>',$donnees['nomP']; ?></td>
    <td class="td"><?php echo '<br>',$donnees['prenomP'] ?></td>
    <td class="td"><?php echo '<br>',$donnees['jour'] ?></td>
    <td class="td"><?php echo '<br>',$donnees['startTime'] ?></td>
    <td class="td"><?php echo '<br>',$donnees['finish'] ?></td>
  </tr>  


<?php
} 
$quiAPointe->closeCursor(); 
?>
</table>