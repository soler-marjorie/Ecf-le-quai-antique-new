<?php require_once _ROOTPATH_.'\templates\header.php';

use App\Db\Mysql;

    //on récupère une instance de mysql 
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM home');
    $query->execute();
    //fetch pour récuperer qu'un seul livre
    $homes = $query->fetchAll(); //renvoi un tableau associatif juste avec les valeurs nécessaires
    ?>
    <div class="image"></div>
        <h1>Nos spécialités du moment !</h1>

    <?php
    foreach ($homes as $home) {
    ?>
        
        <div>
            <img src="uploads/<?php echo $home['src']; ?>" width="200px" title="<?php echo $home['title']; ?>"/>
        </div>
        
    <?php
    }

require_once _ROOTPATH_.'\templates\footer.php'; ?>