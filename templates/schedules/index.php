<?php 
    use App\Db\Mysql; 
    //on se connecte à la bdd
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();
    
    $query = $pdo->prepare("SELECT * FROM horaires");
    $query->execute();
    $schedules = $query->fetchAll($pdo::FETCH_ASSOC);
?>

<div class="horaires">
    <?php foreach ($schedules as $schedule) {?>
        <div class="container">
            <div>
                <h3><?= $schedule['jours']; ?></h3>
            </div>

            <div class="heures">
                <p><?php echo $schedule['horairesMatin']; ?></p>
                <p><?php echo $schedule['horairesAprem']; ?></p>
            </div>
        </div>
    <?php } ?>
</div>