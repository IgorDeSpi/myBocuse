<section class="pointage">
        <div class="pointage1">
            <h2>Pointage</h2>
            <div class="pointage2">
                <div class="heurepointage">
                    <h3>Start</h3>
                    <form action="" method="get">
                    <button id="bouton_pointage" name="pMatin"> 9:00</button>
                </div>
                <div class="heurepointage">
                    <h3>End</h3>
                    <button id="bouton_pointage" name="pSoir">17:00</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    $id = $_SESSION['id'];
    $jour = date('Y-m-d');
    
    $demande = $bdd->query("SELECT `id`,`jour` FROM `pointage` WHERE $id");
    while($donnee = $demande->fetch())
    {
        if($donnee['jour'] == $jour ){
            $matin = "Tu a pointé.";  
        }
    }
    $demande->closeCursor(); 
    $bdd = new PDO("mysql:host=localhost;dbname=my.bocuse;charset=utf8", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
   
        if(isset($_GET['pMatin'])){
            $timestamp = date('h:i:s'); 
            $addTime = $bdd->prepare("INSERT INTO `pointage` (`id`, `user`, `jour`, `startTime`, `finish`) VALUES (NULL, $id, CURRENT_DATE, CURRENT_TIME, '')");
            $addTime->execute(array(NULL, $id, 'CURRENT_DATE', 'CURRENT_TIME', ''));             
        };     
    
    ?>
    <div class="pointMatin"><?php echo $matin; ?></div>
    

