<?php require_once _ROOTPATH_.'\templates\header.php'; 
    
    use App\Db\Mysql;

    //on récupère une instance de mysql 
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM menu');
    $query->execute();
    $menus = $query->fetchAll(); //renvoi un tableau associatif juste avec les valeurs nécessaires
   
?>

<section class="formules">
    <?php foreach ($menus as $menu) {?>
    
        <h1><?php echo $menu['formule']; ?></h1>
        <h2><?php echo $menu['plat']; ?></h2>

        <div>
            <h3><?php echo $menu['title']; ?></h3>
            <p><?php echo $menu['description']; ?></p>
            <p><?php echo $menu['price']; ?>€</p>
        </div>
        <hr>
        
  
    <?php } ?>
</section>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>