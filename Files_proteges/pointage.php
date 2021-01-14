<?php

 $heureDepart = "9:00";
 $heureDeFin = "17:00";
 $matin = "";
 $soir ="";

 $id = $_SESSION['id'];
 $jour = date('Y-m-d');
 echo $jour;
    
    // $PointageMatin = $bdd->prepare("SELECT `id`,`jour`,`startTime`,`finish` FROM `pointage` WHERE id=?");
    $PointageMatin = $bdd->prepare("SELECT `jour`,`startTime` FROM `pointage` WHERE user=? AND jour=?");
    $PointageMatin->execute(array($id,date('Y-m-d')));
    $data = $PointageMatin->fetch();
    $PointageMatin->closeCursor();
          if(empty($data)){
              if(isset($_POST['pMatin'])){
                //   header("Location: index.php");
                $timestamp = date('h:i:s'); 
                  echo "Pointé à $timestamp ";
                  $addTime = $bdd->prepare("INSERT INTO `pointage` (`id`, `user`, `jour`, `startTime`, `finish`) VALUES (NULL, $id, CURRENT_DATE, CURRENT_TIME, '')");
                  $addTime->execute(array(NULL, $id, 'CURRENT_DATE', 'CURRENT_TIME', ''));
                  $matin = "pointMatin";
                  $heureDepart = $timestamp;
              };  
          }
          $PointageSoir = $bdd->prepare("SELECT `finish` FROM `pointage` WHERE user=? AND jour=?");
          $PointageSoir->execute(array($id,date('Y-m-d')));
          $data2 = $PointageSoir->fetch();
          $PointageSoir->closeCursor();            
            // if(empty($data2)=== "00:00:00"){
                if(isset($_POST['pSoir'])){
                        $bdd->exec("UPDATE `pointage` SET `finish`= CURRENT_TIME WHERE $id ");
                        $PointageSoir = $bdd->query("SELECT `id`,`jour`,`startTime`,`finish` FROM `pointage` WHERE $id");
                        while($donnee = $PointageSoir->fetch())
                        {
                                if($donnee['jour'] == $jour ){
                                    $stopSoir = true; 
                                    $heureDeFin = $donnee['finish'] ;
                                    header("index.php"); 
                                    $soir = "pointSoir";                         
                                }
                        $PointageSoir->closeCursor(); 
                        }
                }
            // }


    ?>
<section class="pointage">
    <div class="pointage1">
        <h2>Pointage</h2>
        <div class="pointage2">
            <div class="heurepointage">
                <h3>Start</h3>
                <form action="" method="post">
                    <button id="bouton_pointage" name="pMatin"><?php echo $heureDepart; ?></button>
            </div>
            <div class="heurepointage">
                <h3>End</h3>
                <button id="bouton_pointage" class="boutonSoir" name="pSoir"><?php echo $heureDeFin;?></button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="pointMatin"><?php echo $matin; ?></div>
<div class="pointSoir"><?php echo $soir; ?></div>