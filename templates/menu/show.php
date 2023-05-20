<?php require_once _ROOTPATH_.'\templates\header.php'; 


use App\Db\Mysql;

    //on récupère une instance de mysql 
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM menu');
    $query->execute();
    //fetch pour récuperer qu'un seul livre
    $menus = $query->fetchAll(); //renvoi un tableau associatif juste avec les valeurs nécessaires

    foreach ($menus as $menu) {
    ?>
        <div>
            <h3><?php echo $menu['title']; ?></h3>
            <p><?php echo $menu['description']; ?></p>
            <p><?php echo $menu['price']; ?>€</p>
        </div>
        
    <?php
    }

require_once _ROOTPATH_.'\templates\footer.php'; ?>