<?php
 $heureDepart = "9:00";
 $heureDeFin = "17:00";
 $matin = "";
 $soir ="";
 $stopMatin = false;
 $stopSoir = false;

    $id = $_SESSION['id'];
    $jour = date('Y-m-d');
    
    $PointageMatin = $bdd->query("SELECT `id`,`jour`,`startTime`,`finish` FROM `pointage` WHERE $id");
    while($donnee = $PointageMatin->fetch())
    {
        if($donnee['jour'] == $jour ){
            header("index.php");
            $matin = "pointMatin"; 
            $heureDepart = $donnee['startTime'];
            $stopMatin = true; 
        }
    }
    $PointageMatin->closeCursor(); 
    // $bdd = new PDO("mysql:host=localhost;dbname=my.bocuse;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if($stopMatin !== true){
            if(isset($_GET['pMatin'])){
                $timestamp = date('h:i:s'); 
                $addTime = $bdd->prepare("INSERT INTO `pointage` (`id`, `user`, `jour`, `startTime`, `finish`) VALUES (NULL, $id, CURRENT_DATE, CURRENT_TIME, '')");
                $addTime->execute(array(NULL, $id, 'CURRENT_DATE', 'CURRENT_TIME', ''));             
            };     
        }   
        if($stopSoir === false){
        if(isset($_GET['pSoir'])){
                $bdd->exec("UPDATE `pointage` SET `finish`= CURRENT_TIME WHERE $id ");
                $PointageMatin = $bdd->query("SELECT `id`,`jour`,`startTime`,`finish` FROM `pointage` WHERE $id");
                while($donnee = $PointageMatin->fetch())
                {
                        if($donnee['jour'] == $jour ){
                            $stopSoir = true; 
                            $heureDeFin = $donnee['finish'] ;
                            header("index.php"); 
                            $soir = "pointSoir";                         
                    }
        }
        $PointageMatin->closeCursor(); 
    }
}
    ?>
<section class="pointage">
        <div class="pointage1">
            <h2>Pointage</h2>
            <div class="pointage2">
                <div class="heurepointage">
                    <h3>Start</h3>
                    <form action="" method="get">
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
    

